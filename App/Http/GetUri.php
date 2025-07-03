<?php

namespace Http;

use Http\Interfaces\GetUriInterface;

class GetUri implements GetUriInterface {
    public function get() {
        try {
            $requestUri = $_SERVER['REQUEST_URI'];
            return $requestUri;
        } catch (\Exception $e) {
            return false;
        }
    }
}
