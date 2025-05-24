<?php

namespace Router;

use Http\Interfaces\RequestInterface;
use Router\Interfaces\VerifyRoutesInterface;
use Exceptions\Router\RouteNotFound;

class VerifyRoutes implements VerifyRoutesInterface {

    private $request;
    private $routes = [];

    public function __construct(RequestInterface $request, array $routes) {
        $this->request = $request;
        $this->routes = $routes;
    }

    public function verifyRoutes() {
        foreach ($this->routes as $route) {
            if ($this->verifyFreeRoute($route)) {
                return true;
            }

            if ($route['uri'] === $this->request->getUri() && $route['method'] === $this->request->getMethod()) {
                if ($this->verifyProtectedRoute($route)) {
                    return $route;
                }

                if ($this->verifyAdminRoute($route)) {
                    return $route;
                }

                return $route;
            }
        }

        throw new RouteNotFound();
    }

    public function verifyProtectedRoute(array $route) {
        if ($route['protected'] === true) {
            return true;
        }
        return false;
    }

    public function verifyAdminRoute(array $route) {
        if ($route['admin'] === true) {
            return true;
        }
        return false;
    }

    public function verifyFreeRoute(array $route) {
        if (isset($route['free']) && $route['free'] === true) {
            return true;
        }
        return false;
    }
}