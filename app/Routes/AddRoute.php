<?php
namespace App\Routes;

use App\Routes\Interfaces\addRouteInterface;
use App\Utils;

class AddRoute implements addRouteInterface {

    private Utils $utils;

    public function __construct (Utils $utils) {
        $this->utils = $utils;
    }

    public function addRoute (string $route, string $method, string $controller, string $action):array {

        return [
            'route' => $this->utils->separator($route, 0),
            'controller' => $controller,
            'action' => $action,
            'method' => $method
        ];

    }

    public function addProtectedRoute (string $route, string $method, string $controller, string $action):array {
        
        return [
            'route' => $this->utils->separator($route, 0),
            'controller' => $controller,
            'action' => $action,
            'method' => $method,
            "protected" => true
        ];
        
    }

}