<?php
namespace Models\Router;

use Models\Router\Interfaces\RouteExecuteInterface;

class RouteExecute implements RouteExecuteInterface {

    private VerifyRoutes $verifyRoutes;
    private RouteExecute $routeExecute;
    
    public function __construct (VerifyRoutes $verifyRoutes) {
        $this->verifyRoutes = $verifyRoutes;
    }

    public function executeActionController ($routes): void {

        $route = $this->verifyRoutes->verifyRouteWithUri($routes);

        $this->verifyRoutes->verifyProtectedRoute($route);

        $controller = new $route["controller"];
        $action = $route["action"];

        $this->verifyRoutes->verifyExistsAction($controller, $action);

        $controller->$action();
        
    }
}