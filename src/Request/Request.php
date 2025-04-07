<?php
namespace Src\Request;

use Src\Request\Interfaces\GetUriInterface;
use Src\Request\Interfaces\GetVerbInterface;
use Src\Request\Interfaces\RedirectInterface;

/**
 *  Classe lida com requisições HTTP
 */
class Request {

    private static GetUriInterface $uri;
    private static GetVerbInterface $verb;
    private static RedirectInterface $redirect;

    public function __construct (
        GetUriInterface $uri,
        GetVerbInterface $verb,
        RedirectInterface $redirect
    ) {
        self::$uri = $uri;
        self::$verb = $verb;
        self::$redirect = $redirect;
    }

    public static function getUri (string $separator = "false"):string {

        return self::$uri->getUri($separator);

    }

    public static function getVerb ():string {

        return self::$verb->getVerb();

    }

    public static function redirect (string $url, int $code = 301):void {

        self::$redirect->redirect($url, $code);
        exit();
        
    }
}