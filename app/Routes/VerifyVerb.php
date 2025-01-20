<?php
namespace App\Routes;

use App\Interfaces\verifyVerbInterface;
use App\Request;

class VerifyVerb implements verifyVerbInterface {

    private RouteError $routeError;

    public function __construct(RouteError $routeError) {
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