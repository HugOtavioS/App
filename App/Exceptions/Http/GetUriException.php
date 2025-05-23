<?php

namespace Exceptions\Http;

class GetUriException extends \Exception {
    public function __construct($message = "URI inválida", $code = 400, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}