<?php
namespace App\Routes;

use App\Routes\Interfaces\InterfaceRouteError;
use App\Routes\Interfaces\verifyVerbInterface;
use App\Request\Request;

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