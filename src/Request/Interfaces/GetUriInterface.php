<?php
namespace Src\Request\Interfaces;

interface GetUriInterface {

    public static function getUri (string $separator = "false"):string;

}