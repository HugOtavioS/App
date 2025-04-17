<?php
namespace Models\Router\Interfaces;

interface VerifyRoutesInterface {
    public function verifyExistsAction ($controller, $action);
    public function verifyRouteWithUri (array $routes);
    public function verifyProtectedRoute (array $route);
    public function treatRoute (array $routes);
    public function treatUri (string $uri);
    // public function getRouteError (): object;
}