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
            return false;
        }
    }

    public static function get($key) {
        try {
            return $_SESSION[$key];
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function destroy() {
        try {
            session_destroy();
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function regenerate() {
        try {
            session_regenerate_id(true);
        } catch (\Exception $e) {
            return false;
        }
    }

    public static function regenerateId() {
        try {
            session_regenerate_id(true);
        } catch (\Exception $e) {
            return false;
        }
    }

}