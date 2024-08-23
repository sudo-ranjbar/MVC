<?php

namespace App\Core\Routing;

use App\Core\Request;
use JetBrains\PhpStorm\NoReturn;

class Router
{
    private Request $request;
    private array $routes;
    private mixed $current_route;

    const CONTROLLERS_NAMESPACE = 'App\Controllers\\';

    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->current_route = $this->findRoute($this->request);

    }

    private function findRoute(Request $request)
    {
        foreach ($this->routes as $route) {
            if ($request->getMethod() === $route['methods'] && $request->getUri() === $route['uri']) {
                return $route;
            }
        }
        return null;
    }

    public function runRouter(): void
    {
        # 405 : invalid request method
        if ($this->invalidRequest($this->request)) {
            $this->dispatch405();
        }
        # 404 : page not found
        if (is_null($this->current_route)) {
            $this->dispatch404();
        } else {
            $this->dispatch($this->current_route);
        }

    }

    private function invalidRequest($request): bool
    {
        foreach ($this->routes as $route) {
            if ($request->getMethod() !== $route['methods'] && $request->getUri() === $route['uri']) {
                return true;
            }
        }
        return false;
    }

    #[NoReturn] private function dispatch404(): void
    {
        header("HTTP/1.1 404 Not Found");
        view('errors.404');
        die();
    }

    #[NoReturn] private function dispatch405(): void
    {
        header("HTTP/1.1 405 Method Not Allowed");
        view('errors.405');
        die();
    }

    /**
     * @throws \Exception
     */
    private function dispatch($route): void
    {
        $action = $route['action'];

        # action = null
        if (empty($action)) {
            return;
        }

        # action = closure function
        if (is_callable($action)) {
            $action();
        }

        # action = Controller@method
        if (is_string($action)) {
            $action = explode('@', $action);
        }

        # action = ['Controller', 'method']
        if (is_array($action)) {
            $class = self::CONTROLLERS_NAMESPACE . $action[0];
            $method = $action[1];

            if (!class_exists($class)) {
                throw new \Exception("Controller '$class' does not exist");
            }
            $controller = new $class();

            if (!method_exists($controller, $method)) {
                throw new \Exception("Method '$method' does not exist");
            }
            $controller->$method();
        }

    }
}