<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h2>Registrar Producto</h2>
            <hr>
            <?php if (isset($this->message)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->message ?>
                </div>
            <?php endif; ?>
            <form
                    action="<?php echo constant('BASE_URL') . 'product/create' ?>"
                    method="POST"
            >
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="referencia" class="form-label">Referencia</label>
                    <input class="form-control" id="referencia" name="referencia" required>
                </div>
                <div class="mb-3">
                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" class="form-control" id=precio" name="precio" required>
                </div>
                <div class="mb-3">
                    <label for="peso" class="form-label">Peso</label>
                    <input type="number" class="form-control" id="peso" name="peso" required>
                </div>
                <div class="mb-3">
                    <label for="categoria" class="form-label">Categoria</label>
                    <input class="form-control" id="categoria" name="categoria" required>
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>
</div>


