<?php
namespace App;

class Request {
    public function __construct () {
        
    }

    public function getUri ():string {
        return $_SERVER['REQUEST_URI'];
    }

    public function getMethod ():string {
        return $_SERVER['REQUEST_METHOD'];
    }
}