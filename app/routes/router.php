<?php
namespace App\routes;

use App\Request;

class Router {

    public static $routes = [];
    public Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public static function addRoute (string $route, string $controller, string $action):void {
        self::$routes[$route] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public static function getRoutes ():array {
        echo "Routes: <pre>";
        print_r(self::$routes);
        echo "<br></pre>";
        return self::$routes;
    }

    public function verifyRoute () {
        $uri = $this->request->getUri();

        if (empty($uri)) {
            $uri = "/";
        }

        $this->handleRoute($uri);
    }

    private function handleRoute ($uri) {
        if (!array_key_exists($uri, self::$routes)) {
            echo "Rota não existe!";
            return;
        }
        
        $this->handleController($uri);
    }

    /** Lida com a criação do objeto, */
    private function handleController ($uri) {
        $controller = self::$routes[$uri]["controller"];
        $controllerInstance = new $controller();
        
        if (!class_exists($controller)) {
            echo "Classe não existe!";
            return;
        }

        $action = self::$routes[$uri]["action"];

        if (!method_exists($controllerInstance, $action)) {
            echo "Método ''{$action}'' Inexistente!";
            return;
        }
        
        $controllerInstance->$action();
    }
}