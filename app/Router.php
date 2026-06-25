<?php

namespace App;

class Router
{
    private array $routes = [];

    public function get(string $uri, string $action, string $name = ''): void
    {
        $this->routes['GET'][$uri] = [
            'action' => $action,
            'name' => $name
        ];
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }

    public function dispatch(): void
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $route = $this->routes[$method][$uri] ?? null;

        if (!$route) {
            http_response_code(404);
            echo '404 - Page introuvable';
            return;
        }

        [$controller, $controllerMethod] = explode('@', $route['action']);

        $controller = "App\\Controllers\\{$controller}";

        $instance = new $controller();

        $instance->$controllerMethod();
    }
}
