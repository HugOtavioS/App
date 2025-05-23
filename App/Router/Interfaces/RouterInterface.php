<?php

namespace Router\Interfaces;

interface RouterInterface {
    public function addRoute($method, $uri, $callback);
    public function addProtectedRoute($method, $uri, $callback);
    public function addAdminRoute($method, $uri, $callback);
}