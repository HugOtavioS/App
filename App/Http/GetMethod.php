<?php

namespace Http;

use Http\Interfaces\GetMethodInterface;

class GetMethod implements GetMethodInterface {
    public function get() {
        return $_SERVER['REQUEST_METHOD'];
    }
}