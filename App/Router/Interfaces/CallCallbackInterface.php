<?php

namespace Router\Interfaces;

interface CallCallbackInterface {
    public function callCallback();
    public function callController($callback);
}