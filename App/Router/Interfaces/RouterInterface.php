<?php

namespace Router\Interfaces;

interface RouterInterface {
    public static function addRoute($method, $uri, $callback);
    public static function addProtectedRoute($method, $uri, $callback);
    public static function addApiRoute($method, $uri, $callback);
    public static function addFreeRoute($method, $uri, $callback);
}