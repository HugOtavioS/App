<?php
namespace App\Request\Interfaces;

interface GetUriInterface {

    public static function getUri (string $separator = "false"):string;

}