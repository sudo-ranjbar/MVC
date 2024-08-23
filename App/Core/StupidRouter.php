<?php

namespace App\Core;

use App\Utilities\Url;

class StupidRouter
{

    private array $routes;

    public function __construct()
    {
        $this->routes = [
            '/' => 'home/index',
            '/colors/red' => 'colors/red',
            '/colors/green' => 'colors/green',
            '/colors/blue' => 'colors/blue',
        ];
    }

    public function runRoute(): void
    {
        $current_route = Url::current_route();

        foreach ($this->routes as $route => $view) {
            if ($current_route === $route) {
                include BASE_PATH . "views/" . $view . ".php";
            }
        }
    }


}