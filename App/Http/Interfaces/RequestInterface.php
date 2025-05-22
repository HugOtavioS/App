<?php

namespace Http\Interfaces;

interface RequestInterface {
    public function getMethod();
    public function getUri();
}
