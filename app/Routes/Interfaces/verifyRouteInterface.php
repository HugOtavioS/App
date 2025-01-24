<?php
namespace App\Routes\Interfaces;

interface verifyRouteInterface {

    public function verifyRoute (array $routes, string $uri, string $verb);

}