<?php
namespace Src\Route\Interfaces;

interface verifyRouteInterface {

    public function verifyRoute (array $routes, string $uri, string $verb);

}