<?php

namespace Router\Interfaces;

interface VerifyRoutesInterface {
    public function verifyRoutes();
    public function verifyProtectedRoute(array $route);
    public function verifyAdminRoute(array $route);
}