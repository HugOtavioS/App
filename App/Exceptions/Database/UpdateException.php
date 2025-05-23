<?php

namespace Exceptions\Database;

class UpdateException extends \Exception {
    public function __construct($message = "Erro ao atualizar registro", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}