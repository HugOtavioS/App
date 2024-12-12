<?php
namespace App\Routes;

use App\Request;
use Config\Exception;

/** Lidando com as rotas da aplicação */
class Route {
    static private array $routeList = [];
    private Request $request;
    private Exception $exception;

    public function __construct(Exception $exception)
    {
        $this->exception = $exception;
    }
    
    /** Adiciona rota a lista de rotas */
    static public function addRoute (string $uri, string $method, array $action)
    {
        self::$routeList[] = [
            "uri"=>$uri,
            "method"=>$method,
            "action"=>$action
        ];
    }

    /** Verifica se a rota existe */
    public function verifyExistRoute (Request $request)
    {
        $this->request = $request;
        
        foreach (self::$routeList as $route) {

            if ($this->findMatchUri($route["uri"]))
            {
                return $route["action"];
            }

        }
        
        return $this->exception->teste();
    }

    /** Acha a rota da URL correspondente na lista de rotas */
    private function findMatchUri ($routeUri): bool
    {
        $requestUri = $this->request->getUri();
        
        if ($requestUri === $routeUri)
        {
            return true;
        }else
        {
            return false;
        }
    }
}
