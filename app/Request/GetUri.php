<?php 
namespace App\Request;

use App\Request\Interfaces\GetUriInterface;

class GetUri implements GetUriInterface {

    public static function getUri (string $separator = "false"):string {

        if (!$separator) {

            return $_SERVER['REQUEST_URI'];
            
        }

        return explode($separator, $_SERVER["REQUEST_URI"])[0];

    }

}