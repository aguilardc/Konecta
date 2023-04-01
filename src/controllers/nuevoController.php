<?php

namespace App\Controllers;

use \Core\libs\Controller;

class NuevoController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this->view->render('product/index');
    }

    public function create()
    {
        $response = $this->model->insert([
            'nombre' => $_POST['nombre'],
            'referencia' => $_POST['referencia'],
            'precio' => $_POST['precio'],
            'peso' => $_POST['peso'],
            'categoria' => $_POST['categoria'],
            'stock' => $_POST['stock'],
            'fecha' => date('Y-m-d')
        ]);

        $this->view->message = ($response) ? 'producto registrado correctamente' : 'Error al registrar el producto';
        $this->render();
    }
}