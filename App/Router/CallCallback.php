<?php

namespace Router;

use Router\Interfaces\CallCallbackInterface;

class CallCallback implements CallCallbackInterface {

    private $callback;

    public function __construct($route) {
        $this->callback = $route['callback'];
    }

    public function callCallback() {
        $callback = $this->callback;
        if (is_array($callback)) {
            $this->callController($callback);
            return;
        }

        $callback();
    }

    public function callController($callback) {
        $controller = new $callback[0];

        if (!is_object($controller)) {
            return false;
        }

        if (!class_exists($callback[0])) {
            return false;
        }

        if (!method_exists($controller, $callback[1])) {
            return false;
        }

        $controller->{$callback[1]}();
    }
}
