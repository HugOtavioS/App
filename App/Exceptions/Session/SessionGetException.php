<?php

namespace Exceptions\Session;

class SessionGetException extends \Exception {
    public function __construct($message = "Erro ao obter o valor da sessão: ", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}
