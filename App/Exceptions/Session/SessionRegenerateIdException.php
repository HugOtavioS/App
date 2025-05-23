<?php

namespace Exceptions\Session;

class SessionRegenerateIdException extends \Exception {
    public function __construct($message = "Erro ao regenerar o ID da sessão: ", $code = 500, \Throwable $previous = null) {
        // parent::__construct($message, $code, $previous);
        echo "<strong>$message</strong>";
    }
}
