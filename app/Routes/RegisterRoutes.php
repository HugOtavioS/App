<?php
namespace App\Routes;

use App\Interfaces\InterfaceRouteError;
use App\Interfaces\RegisterRoutesInterface;
use App\Request;
use App\Routes\HandleController;

class RegisterRoutes implements RegisterRoutesInterface {

    private HandleController $handleController;
    private VerifyUri $verifyUri;
    private VerifyProtectedRoute $verifyProtectedRoute;
    private VerifyVerb $verifyVerb;
    private InterfaceRouteError $routeError;

    public function __construct (
        InterfaceRouteError $routeError,
        VerifyUri $verifyUri,
        VerifyProtectedRoute $protectedRoute,
        VerifyVerb $verifyVerb,
        HandleController $handleController
        ) {

        $this->handleController = $handleController;
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

        $this->handleController->handleController($route);
        
    }

}