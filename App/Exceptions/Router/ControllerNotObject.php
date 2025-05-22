<?php

namespace Exceptions\Router;

class ControllerNotObject extends \Exception {
    public function __construct($message = "Controller is not an object", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "Controller <strong>$message</strong> is not an object";
    }
}
