<?php

namespace Exceptions\Views;

class ViewNotFound extends \Exception {
    public function __construct($message = "View not found", $code = 404, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}