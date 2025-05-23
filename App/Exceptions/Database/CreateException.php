<?php

namespace Exceptions\Database;

class CreateException extends \Exception {
    public function __construct($message = "Erro ao criar registro", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}