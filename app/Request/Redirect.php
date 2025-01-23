<?php
namespace App\Request;

use App\Request\Interfaces\RedirectInterface;

class Redirect implements RedirectInterface {

    public static function redirect (string $url, int $code = 301):void {

        header("Location: {$url}", true, $code);
        exit();
        
    }

}