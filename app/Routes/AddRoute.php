<?php
namespace App\Routes;

use App\Interfaces\addRouteInterface;

class AddRoute implements addRouteInterface {

    private handleRoute $handleRoute;

    public function __construct (HandleRoute $handleRoute) {
        $this->handleRoute = $handleRoute;
    }

    public function addRoute (string $route, string $method, string $controller, string $action):array {

        return [
            'route' => $this->handleRoute->handleRoute($route),
            'controller' => $controller,
            'action' => $action,
            'method' => $method
        ];

    }

    public function addProtectedRoute (string $route, string $method, string $controller, string $action):array {
        return [
            'route' => $this->handleRoute->handleRoute($route),
            'controller' => $controller,
            'action' => $action,
            'method' => $method,
            "protected" => true
        ];
    }

}