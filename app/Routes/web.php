<?php
use App\Routes\Router;
use App\Controllers\HomeController;
use App\Controllers\LoginController;

Router::addRoute("/", "GET", HomeController::class, "index");
Router::addRoute("/", "POST", LoginController::class, "index");
Router::addRoute("/login", "GET", LoginController::class, "index");
Router::addRoute("/login?error", "GET", LoginController::class, "index");
Router::addRoute("/login/create", "POST", LoginController::class, "create");
Router::addProtectedRoute("/app", "GET", LoginController::class, "index");