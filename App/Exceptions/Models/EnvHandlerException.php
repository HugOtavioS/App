<?php

namespace Exceptions\Models;

class EnvHandlerException extends \Exception {
    public function __construct($message = "Erro ao obter o arquivo .env", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}