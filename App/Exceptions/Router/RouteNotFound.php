<?php

namespace Exceptions\Router;

class RouteNotFound extends \Exception {
    public function __construct($message = "Route not found", $code = 404, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}