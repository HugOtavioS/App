<?php

namespace Router;

use Router\Interfaces\CallCallbackInterface;

use Exceptions\Router\ControllerNotObject;
use Exceptions\Router\ControllerClassNotFound;
use Exceptions\Router\ControllerMethodNotFound;

class CallCallback implements CallCallbackInterface {

    private $callback;

    public function __construct($route) {
        $this->callback = $route['callback'];
    }

    public function callCallback() {
        $callback = $this->callback;

        if (!is_callable($callback)) {
            $this->callController($callback);
        }

        $callback();
    }

    public function callController($callback) {
        $controller = new $callback[0];

        if (!is_object($controller)) {
            throw new ControllerNotObject();
        }

        if (!class_exists($callback[0])) {
            throw new ControllerClassNotFound();
        }

        if (!method_exists($controller, $callback[1])) {
            throw new ControllerMethodNotFound($callback[1]);
        }

        $controller->{$callback[1]}();
    }
}
