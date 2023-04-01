<?php

namespace App\Controllers;

use Core\libs\Controller;

class ErrorController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render('error/index');
    }
}