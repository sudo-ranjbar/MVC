<?php

namespace App\Core\Routing;

class Route
{
    private static array $routes = [];

    public static function add($methods, $uri, $action = null): void
    {
//        $methods = is_array($methods) ? $methods : [$methods];
        self::$routes[] = ['methods' => $methods, 'uri' => $uri, 'action' => $action];

    }

    public static function get($uri, $action = null): void
    {
        self::add('GET', $uri, $action);
    }

    public static function post($uri, $action = null): void
    {
        self::add('POST', $uri, $action);
    }

    public static function put($uri, $action = null): void
    {
        self::add('PUT', $uri, $action);
    }

    public static function patch($uri, $action = null): void
    {
        self::add('PATCH', $uri, $action);
    }

    public static function delete($uri, $action = null): void
    {
        self::add('DELETE', $uri, $action);
    }

    public static function options($uri, $action = null): void
    {
        self::add('OPTIONS', $uri, $action);
    }


    public static function routes(): array
    {
        return self::$routes;
    }
}