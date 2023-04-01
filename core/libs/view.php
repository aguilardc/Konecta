<?php

namespace Core\libs;

use App\Models\ProductModel;

class View
{
    public string $message;
    public array $data;
    public ProductModel $product;
    private string $name;

    public function render($name): void
    {
        $this->name = $name;
        require 'src/views/layout.php';
    }
}