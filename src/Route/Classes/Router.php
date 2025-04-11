<?php
namespace Src\Route\Classes;

use Src\Route\Classes\RouteError;
use Src\Request\Request;
use Src\Session;
use Exception;

/**
 * Classe responsável por lidar com as rotas da aplicação
 */
class Router {

    private static $routes = [];
    private $routeError;

    public function __construct () {
        $this->routeError = new RouteError();
    }

    public function registerRoutes ():void {
        require __DIR__ . "../../web.php";
        $this->executeActionController();
    }

    public static function addRoute ($uri, $method, $controller, $action): void {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "controller" => $controller,
            "action" => $action,
            "protected" => false,
        ];
    }

    public static function addProtectedRoute ($uri, $method, $controller, $action): void {
        self::$routes[] = [
            "uri" => $uri,
            "method" => $method,
            "controller" => $controller,
            "action" => $action,
            "protected" => true,
        ];
    }

    public function getRoutes (): array {
        return self::$routes;
    }

    private function verifyRouteWithUri () {
        try {

            $result = false;
    
            foreach (self::$routes as $route) {
                if ($route["uri"] === Request::getUri() and 
                    $route["method"] === Request::getVerb()) {
                    $result = $route;
                }
            }
    
            if (!$result) {
                throw new Exception("Rota não encontrada");
            }

            // $this->verifyProtectedRoute();

            return $result;
            
        } catch (Exception $e) {
            $this->routeError->error(["msg" => $e->getMessage()], 404);
        }
    }

    private function verifyProtectedRoute ($route):void {
        try {

            if ($route["protected"] === true) {

                if (!Session::get("user")) {
                    throw new Exception("Rota protegida, faça login para acessar");
                }

            }

        } catch (Exception $e) {
            $this->routeError->error(["msg" => $e->getMessage()], 404);
        }

    }

    private function executeActionController ():void {
        $route = $this->verifyRouteWithUri();

        $this->verifyProtectedRoute($route);
        
        $controller = new $route["controller"];
        $action = $route["action"];

        $this->verifyExistsAction($controller, $action);

        $controller->$action();
    }

    private function verifyExistsAction ($controller, $action):void {
        try {

            if (!is_object($controller)) {
                throw new Exception("Controller não encontrado");
            }

            if (!method_exists($controller, $action)) {
                throw new Exception("Ação não encontrada");
            }

        } catch (Exception $e) {
            $this->routeError->error(["msg" => $e->getMessage()], 404);
        }
    }

}