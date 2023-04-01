<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2>Actualizar Producto</h2>
            <hr>
            <?php if (isset($_SESSION['message'])): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_SESSION['message'] ?>
                </div>
            <?php endif; ?>
            <form
                    action="<?php echo constant('BASE_URL') . 'main/update/'. $this->product->getId() ?>"
                    method="POST"
            >
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" value="<?= $this->product->getNombre() ?>"
                           required>
                </div>
                <div class="mb-3">
                    <label for="referencia" class="form-label">Referencia</label>
                    <input class="form-control" id="referencia" name="referencia"
                           value="<?= $this->product->getReferencia() ?>" required>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id=precio" name="precio"
                           value="<?= $this->product->getPrecio() ?>" required>
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" class="form-control" id="peso" name="peso"
                           value="<?= $this->product->getPeso() ?>"
                           required>
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input class="form-control" id="categoria" name="categoria"
                           value="<?= $this->product->getCategoria() ?>" required>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock"
                           value="<?= $this->product->getStock() ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>
    </div>
</div>


