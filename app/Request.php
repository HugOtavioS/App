<?php
namespace App;

/**
 *  Classe para manipular requisições
 */
class Request {
    public function __construct () {
        
    }

    public function getUri ():string {

        return $_SERVER['REQUEST_URI'];

    }

    public function getMethod ():string {

        return $_SERVER['REQUEST_METHOD'];

    }

    public function redirect (string $url, int $code = 301):void {

        header('Location: '. $url, true, $code);
        exit();
        
    }
}