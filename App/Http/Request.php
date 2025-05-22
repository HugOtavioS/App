<?php

namespace Http;

use Http\Interfaces\RequestInterface;
use Http\GetMethod;
use Http\GetUri;

class Request implements RequestInterface {
    private $method;
    private $uri;

    public function __construct(GetMethod $getMethod, GetUri $getUri) {
        $this->method = $getMethod;
        $this->uri = $getUri;
    }

    public function getMethod() {
        return $this->method->get();
    }

    public function getUri() {
        return $this->uri->get();
    }
}