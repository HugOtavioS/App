<?php
namespace App\Routes;

use App\Interfaces\verifyProtectedRouteInterface;
use App\Session;

class VerifyProtectedRoute implements verifyProtectedRouteInterface {

    private RouteError $routeError;

    public function __construct (RouteError $routeError) {
        $this->routeError = $routeError;
    }

    public function verifyProtectedRoute (array $route):void {

        Session::init();

        if (array_key_exists("protected", $route) and !Session::get("session_login")) {

            $this->routeError->routeNotFound();

        }

    }

}