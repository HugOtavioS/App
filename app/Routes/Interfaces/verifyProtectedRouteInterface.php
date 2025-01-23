<?php
namespace App\Routes\Interfaces;

interface verifyProtectedRouteInterface {
    public function verifyProtectedRoute (array $route):void;
}