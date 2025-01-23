<?php
namespace App\Routes\Interfaces;

interface verifyUriInterface {
    public function verifyUri (string $uri, array $routes):array;
}