<?php

namespace Exceptions\Router;

class ControllerClassNotFound extends \Exception {
    public function __construct($message = "Controller class not found", $code = 404, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "Controller class <strong>$message</strong> not found";
    }
}
