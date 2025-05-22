<?php

namespace Models;

use Exceptions\Views\ViewNotFound;

class ViewLoader {
    public static function load($view, $data = []) {
        $view = str_replace('.', '/', $view);
        $view = VIEWS_PATH . $view . '.php';

        if (!file_exists($view)) {
            throw new ViewNotFound();
        }

        require $view;
    }
}