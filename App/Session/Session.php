<?php

namespace Session;

use Session\Interfaces\SessionInterface;

class Session implements SessionInterface {
    public static function start() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return $_SESSION[$key];
    }

    public static function destroy() {
        session_destroy();
    }

    public static function regenerate() {
        session_regenerate_id(true);
    }

    public static function regenerateId() {
        session_regenerate_id(true);
    }

}