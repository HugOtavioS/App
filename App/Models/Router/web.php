<?php
use Models\Router\Router;
use Controllers\HomeController;
use Controllers\LoginController;
use Controllers\AppController;
use Controllers\CadastroController;

Router::addRoute("/", "GET", HomeController::class, "index");
Router::addRoute("/", "POST", LoginController::class, "index");
Router::addRoute("/sair", "GET", LoginController::class, "logout");
Router::addRoute("/login", "GET", LoginController::class, "index");
Router::addRoute("/login?error", "GET", LoginController::class, "index");
Router::addRoute("/login/create", "POST", LoginController::class, "create");
Router::addRoute("/cadastro", "GET", CadastroController::class, "index");
Router::addRoute("/cadastro/create", "POST", CadastroController::class, "create");
Router::addProtectedRoute("/app", "GET", AppController::class, "index");