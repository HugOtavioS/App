<?php

namespace Exceptions\Database;

class ConnectException extends \Exception {
    public function __construct($message = "Erro ao conectar ao banco de dados", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}