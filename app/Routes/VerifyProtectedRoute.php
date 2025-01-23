<?php
namespace App\Routes;

use App\Routes\Interfaces\InterfaceRouteError;
use App\Routes\Interfaces\verifyProtectedRouteInterface;
use App\Session;

class VerifyProtectedRoute implements verifyProtectedRouteInterface {

    private InterfaceRouteError $routeError;

    public function __construct (InterfaceRouteError $routeError) {
        $this->routeError = $routeError;
    }

    public function verifyProtectedRoute (array $route):void {

        Session::init();

        if (array_key_exists("protected", $route) and !Session::get("session_login")) {

            $this->routeError->routeNotFound();

        }

    }

}