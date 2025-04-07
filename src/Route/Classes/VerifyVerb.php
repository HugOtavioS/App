<?php
namespace Src\Route\Classes;

use Src\Route\Interfaces\InterfaceRouteError;
use Src\Route\Interfaces\verifyVerbInterface;
use Src\Request\Request;

class VerifyVerb implements verifyVerbInterface {

    private InterfaceRouteError $routeError;

    public function __construct(InterfaceRouteError $routeError) {
        $this->routeError = $routeError;
    }

    public function verifyVerb (array $routes) {

        foreach ($routes as $route) {

            if (Request::getVerb() == $route["method"]) {
                return $route;
            }

            $this->routeError->verbNotAllowed();

        }

    }

}