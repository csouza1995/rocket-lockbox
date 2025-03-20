<?php

namespace Core;

class Route
{
    public array $routes = [];

    private function addRoute($httpMethod, $uri, $controller)
    {
        $data = match (true) {
            is_array($controller) => [
                'class' => $controller[0],
                'method' => $controller[1]
            ],
            default => [
                'class' => $controller,
                'method' => '__invoke'
            ],
        };

        $this->routes[$httpMethod][$uri] = $data;
    }

    public function get($uri, $controller): self
    {
        $this->addRoute('GET', $uri, $controller);
        return $this;
    }

    public function post($uri, $controller): self
    {
        $this->addRoute('POST', $uri, $controller);
        return $this;
    }

    public function run(): self
    {
        $uri = '/' . str_replace('/', '', parse_url($_SERVER['REQUEST_URI'])['path']);
        $httpMethod = $_SERVER['REQUEST_METHOD'];

        if (!isset($this->routes[$httpMethod][$uri])) {
            abort(404);
        }

        $routeInfo = $this->routes[$httpMethod][$uri];

        $class = $routeInfo['class'];
        $method = $routeInfo['method'];

        // check if the class exists and the method is callable
        if (!class_exists($class) || !method_exists($class, $method)) {
            abort(404);
        }

        $controller = new $class;
        $controller->$method();

        return $this;
    }
}
