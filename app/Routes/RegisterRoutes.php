<?php
namespace App\Routes;

use App\Interfaces\RegisterRoutesInterface;
use App\Request;
use App\Routes\HandleRoute;
use App\Routes\RouteError;

class RegisterRoutes implements RegisterRoutesInterface {

    private handleRoute $handleRoute;
    private VerifyUri $verifyUri;
    private VerifyProtectedRoute $verifyProtectedRoute;
    private VerifyVerb $verifyVerb;
    private RouteError $routeError;

    public function __construct (
        RouteError $routeError,
        VerifyUri $verifyUri,
        VerifyProtectedRoute $protectedRoute,
        VerifyVerb $verifyVerb,
        HandleRoute $handleRoute
        ) {
        $this->handleRoute = $handleRoute;
        $this->routeError = $routeError;
        $this->verifyUri = $verifyUri;
        $this->verifyProtectedRoute = $protectedRoute;
        $this->verifyVerb = $verifyVerb;
    }

    public function registerRoutes ($routes):void {

        $uri = Request::getUri("=");
        
        if (empty($routes)) {
            $this->routeError->routeNotFound();
        }

        $routes = $this->verifyUri->verifyUri($uri, $routes);

        $route = $this->verifyVerb->verifyVerb($routes);

        $this->verifyProtectedRoute->verifyProtectedRoute($route);

        $this->handleRoute->handleController($route);
    }

}