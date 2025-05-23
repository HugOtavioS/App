<?php

namespace Exceptions\Session;

class SessionRegenerateException extends \Exception {
    public function __construct($message = "Erro ao regenerar a sessão: ", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}
