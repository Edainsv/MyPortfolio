<?php

if (!function_exists('asset')) {
    function asset(string $src = ''): string
    {
        return '/assets/' . ltrim($src, '/');
    }

}

if (!function_exists('route')) {
    function route(string $name): string
    {
        $routes = $GLOBALS['router']->getRoutes();

        foreach ($routes['GET'] as $uri => $route) {

            if ($route['name'] === $name) {
                return $uri;
            }

        }

        return '#';
    }
}

if (!function_exists('route_exists')) {
    function route_exists(string $name): bool
    {
        $routes = $GLOBALS['router']->getRoutes();

        foreach ($routes['GET'] as $route) {
            if ($route['name'] === $name) {
                return true;
            }
        }

        return false;
    }
}
