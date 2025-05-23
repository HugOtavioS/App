<?php

namespace Exceptions\Http;

class GetMethodException extends \Exception {
    public function __construct($message = "Método da requisição inválido", $code = 405, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}