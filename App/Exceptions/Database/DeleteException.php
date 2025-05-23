<?php

namespace Exceptions\Database;

class DeleteException extends \Exception {
    public function __construct($message = "Erro ao deletar registro", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}