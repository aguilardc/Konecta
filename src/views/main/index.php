<div class="container text-center mt-5">
    <div class="row">
        <div class="col mb-3">
            <h1 class="center">Lista de Productos</h1>
            <?php if (isset($this->message)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->message ?>
                </div>
            <?php endif; ?>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre de producto</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Categoría</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Fecha de creación</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                <?php
                /** Product $product  */
                foreach ($this->data as $product): ?>
                    <tr>
                        <td><?= $product->getId() ?></td>
                        <td><?= $product->getNombre() ?></td>
                        <td><?= $product->getReferencia() ?></td>
                        <td><?= $product->getPrecio() ?></td>
                        <td><?= $product->getPeso() ?></td>
                        <td><?= $product->getCategoria() ?></td>
                        <td><?= $product->getStock() ?></td>
                        <td><?= $product->getFecha() ?></td>
                        <td><a href="<?= constant('BASE_URL') . "main/view/{$product->getId()}" ?>">Edit</a></td>
                        <td>
                            <a href="<?= constant('BASE_URL') . "main/delete/{$product->getId()}" ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


