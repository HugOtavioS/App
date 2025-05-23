<?php

namespace Session;

use Session\Interfaces\SessionInterface;
use Exceptions\Session\SessionStartException;

class Session implements SessionInterface {
    public static function start() {
        try {
            if (session_status() === PHP_SESSION_NONE) {
                session_start();
            }
        } catch (\Exception $e) {
            throw new SessionStartException("Erro ao iniciar a sessão: " . $e->getMessage());
        }
    }

    public static function set($key, $value) {
        try {
            $_SESSION[$key] = $value;
        } catch (\Exception $e) {
            throw new SessionSetException("Erro ao definir o valor da sessão: " . $e->getMessage());
        }
    }

    public static function get($key) {
        try {
            return $_SESSION[$key];
        } catch (\Exception $e) {
            throw new SessionGetException("Erro ao obter o valor da sessão: " . $e->getMessage());
        }
    }

    public static function destroy() {
        try {
            session_destroy();
        } catch (\Exception $e) {
            throw new SessionDestroyException("Erro ao destruir a sessão: " . $e->getMessage());
        }
    }

    public static function regenerate() {
        try {
            session_regenerate_id(true);
        } catch (\Exception $e) {
            throw new SessionRegenerateException("Erro ao regenerar o ID da sessão: " . $e->getMessage());
        }
    }

    public static function regenerateId() {
        try {
            session_regenerate_id(true);
        } catch (\Exception $e) {
            throw new SessionRegenerateIdException("Erro ao regenerar o ID da sessão: " . $e->getMessage());
        }
    }

}