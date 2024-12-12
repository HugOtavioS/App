<?php
use App\Routes\Route;
use App\Controllers\HomeController;

Route::addRoute("/", "GET", [HomeController::class, "index"]);
