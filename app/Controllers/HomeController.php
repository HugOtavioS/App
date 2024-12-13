<?php
namespace App\Controllers;

use App\Models\View;

class HomeController {
    private View $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }
    public function index ()
    {
        $this->view->render("home");
    }
}