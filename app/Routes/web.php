<?php
use App\Routes\Router;
use App\Controllers\HomeController;
use App\Controllers\LoginController;

Router::addRoute("/", "GET", HomeController::class, "index");
Router::addRoute("/login", "GET", LoginController::class, "index");
Router::addRoute("/login?error", "GET", LoginController::class, "index");
Router::addRoute("/createlogin", "POST", LoginController::class, "create");