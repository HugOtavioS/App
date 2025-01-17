<?php
namespace App;

/**
 *  Classe para manipular requisições
 */
class Request {
    public function __construct () {
        
    }

    public function getUri (string $separator = null):string {

        if ($separator == null) {
            return $_SERVER['REQUEST_URI'];
        }

        return explode("$separator", $_SERVER["REQUEST_URI"])[0];

    }

    public function getMethod ():string {

        return $_SERVER['REQUEST_METHOD'];

    }

    public static function redirect (string $url, int $code = 301):void {

        header('Location: '. $url, true, $code);
        exit();
        
    }
}