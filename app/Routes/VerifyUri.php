<?php
namespace App\Routes;

use App\Routes\Interfaces\InterfaceRouteError;
use App\Routes\Interfaces\verifyUriInterface;
use App\Utils;

class VerifyUri implements verifyUriInterface {

    private Utils $utils;
    private InterfaceRouteError $routeError;

    public function __construct (Utils $utils, InterfaceRouteError $routeError) {
        $this->utils = $utils;
        $this->routeError = $routeError;
    }

    public function verifyUri (string $uri, array $routes):array {

        $i = [];

        foreach ($routes as $value) {

            if ($this->utils->array_value_exists($value, $uri, "route")) {
                $i[] = $value;
            }

        }

        if (count($i) <= 0) {

            $this->routeError->routeNotFound();

        }

        return $i;

    }

}