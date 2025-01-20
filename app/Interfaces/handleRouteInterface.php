<?php
namespace App\Interfaces;

interface handleRouteInterface {
    public function handleRoute (string $route):string;
    public function handleController (array $route):void;
}