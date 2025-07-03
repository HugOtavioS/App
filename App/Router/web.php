<?php

use App\Controllers\LoginController;
use App\Controllers\RegisterController;
use Router\Router;
use Models\ViewLoader;

Router::addRoute('GET', '/', function () {
    $view = new ViewLoader();
    $view->load("home");
});

Router::addRoute('GET', '/about', function() {
    $view = new ViewLoader();
    $view->load("about");
});

Router::addRoute('GET', '/contact', function() {
    $view = new ViewLoader();
    $view->load("contact");
});

Router::addRoute('GET', '/login', function() {
    $view = new ViewLoader();
    $view->load("login");
});

Router::addApiRoute('POST', '/api/login', [LoginController::class, "index"]);

Router::addApiRoute('POST', '/api/register', [RegisterController::class, "index"]);

Router::addRoute('GET', '/register', function() {
    $view = new ViewLoader();
    $view->load("register");
});