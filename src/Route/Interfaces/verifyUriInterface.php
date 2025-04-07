<?php
namespace Src\Route\Interfaces;

interface verifyUriInterface {
    public function verifyUri (string $uri, array $routes):array;
}