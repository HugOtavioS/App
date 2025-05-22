<?php

namespace Session\Interfaces;

interface SessionInterface {
    public static function start();
    public static function set($key, $value);
    public static function get($key);
    public static function destroy();
    public static function regenerate();
    public static function regenerateId();
}