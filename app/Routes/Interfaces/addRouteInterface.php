<?php
namespace App\Routes\Interfaces;

interface addRouteInterface {
    
    public function addRoute (string $route, string $method, string $controller, string $action):array;
    public function addProtectedRoute (string $route, string $method, string $controller, string $action):array;
    
}