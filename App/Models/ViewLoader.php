<?php

namespace Models;

class ViewLoader {
    public static function load($view, $data = []) {
        try {
            $view = str_replace('.', '/', $view);
            $view = VIEWS_PATH . $view . '.php';

            if (!file_exists($view)) {
                return false;
            }

            require $view;
        } catch (\Exception $e) {
            return false;
        }
    }
}