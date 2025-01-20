<?php
namespace App\Interfaces;

interface verifyUriInterface {
    public function verifyUri (string $uri, array $routes):array;
}