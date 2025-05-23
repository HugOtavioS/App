<?php

namespace App\Controllers;

use Models\ViewLoader;

class HomeController {

    public function index() {
        ViewLoader::load('home', ['title' => 'Home']);
    }

}