<?php
use Models\Router\Router;
use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\AppController;

Router::addRoute("/", "GET", HomeController::class, "index");
Router::addRoute("/", "POST", LoginController::class, "index");
Router::addRoute("/sair", "GET", LoginController::class, "logout");
Router::addRoute("/login", "GET", LoginController::class, "index");
Router::addRoute("/login?error", "GET", LoginController::class, "index");
Router::addRoute("/login/create", "POST", LoginController::class, "create");
Router::addProtectedRoute("/app", "GET", AppController::class, "index");