<?php
namespace App\Request\Interfaces;

interface RedirectInterface {

    public static function redirect (string $url, int $code = 301):void;

}