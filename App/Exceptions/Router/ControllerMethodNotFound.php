<?php

namespace Exceptions\Router;

class ControllerMethodNotFound extends \Exception {
    public function __construct($message = "Controller method not found", $code = 404, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "Controller method <strong>$message</strong> not found";
    }
}
