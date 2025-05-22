<?php

namespace Http;

use Http\Interfaces\GetUriInterface;

class GetUri implements GetUriInterface {
    public function get() {
        return $_SERVER['REQUEST_URI'];
    }
}
