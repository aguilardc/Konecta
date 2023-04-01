<?php

namespace App\Controllers;

use App\Models\ProductModel as Product;
use Core\libs\Controller;
use App\Models\MainModel;

class MainController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->model = new MainModel();

    }

    /**
     * @return void
     */
    public function render(): void
    {
        $this->view->data = $this->model->get();
        $this->view->render('main/index');
    }

    public function view($param = [])
    {
        $id = $param[0];
        $product = $this->model->getById($id);
        if(!$product){
            $this->view->message = "El producto con ID {$id} No existe";
            $this->render();
            return false;
        }
        $this->view->product = $product;

        session_start();
        $_SESSION['idProduct'] = $this->view->product->getId();
        $this->view->render('main/details');
        unset($_SESSION['message']);
    }

    public function update()
    {
        session_start();
        $idProduct = $_SESSION['idProduct'];
        $this->view->product = $this->model->getById($idProduct);

        $response = $this->model->update([
            'id' => $idProduct,
            'nombre' => $_POST['nombre'],
            'referencia' => $_POST['referencia'],
            'precio' => $_POST['precio'],
            'peso' => $_POST['peso'],
            'categoria' => $_POST['categoria'],
            'stock' => $_POST['stock'],
        ]);


        if ($response) {
            $_SESSION['message'] = 'producto actualizado correctamente';
        } else {
            $_SESSION['message'] = 'Error al actualizar el producto';
        }

        unset($_SESSION['idProduct']);
        header('Location: ' . constant('BASE_URL') . 'main/view/' . $idProduct);
    }

    public function delete($param)
    {
        session_start();
        $id = $param[0];
        $product = $this->model->getById($id);
        if (!$product) {
            $this->view->message = "El producto con ID {$id} No existe";
            $this->render();
            return false;
        }

        $this->view->product = $product;

        $response = $this->model->delete($id);


        $this->view->message = ($response) ? 'producto eliminado correctamente' : 'Error al eliminar el producto';

        $this->render();
    }
}

