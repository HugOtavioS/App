<?php
use App\Routes\Router;
use App\Controllers\HomeController;

Router::addRoute("/", "GET", HomeController::class, "index");
Router::addRoute("/contato", "GET", HomeController::class, "index");
Router::addRoute("/produtos", "GET",  HomeController::class, "index");