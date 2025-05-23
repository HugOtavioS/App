<?php

namespace Exceptions\Database;

class ReadException extends \Exception {
    public function __construct($message = "Erro ao ler registro", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}