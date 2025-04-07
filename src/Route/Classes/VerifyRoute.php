<?php
namespace Src\Route\Classes;

use Src\Route\Interfaces\verifyRouteInterface;
use Src\Utils;

class VerifyRoute implements verifyRouteInterface {

    private Utils $utils;

    public function __construct(
        Utils $utils
    ) {
        $this->utils = $utils;
    }

    public function verifyRoute (array $routes, string $uri, string $verb) {

        $i = [];
        // echo "$verb - ";
        foreach ($routes as $value) {

            if ($this->utils->array_value_exists($value, $uri, "route")) {

                if ($this->utils->array_value_exists($value, $verb, "method")) {
                    $i[] = $value;
                }
                
            }
        }

        if (count($i) <= 0) {
            return false;
        }

        return true;

    }

}