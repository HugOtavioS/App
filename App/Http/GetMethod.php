<?php

namespace Http;

use Http\Interfaces\GetMethodInterface;
class GetMethod implements GetMethodInterface {
    public function get() {
        try {
            $requestMethod = $_SERVER['REQUEST_METHOD'];
            return $requestMethod;
        } catch (\Exception $e) {
            return false;
        }
    }
}