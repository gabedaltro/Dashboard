

<div id="event-create-container" class="col-md-6 offset-md-3" enctype="multipart/form-data">
    <form action="/api/products/store" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nome do Produto:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="category">Categoria</label>
            <input type="text" name="category" id="category" class="form-control">
        </div>
        <div class="form-group">
            <label for="stock">Quantidade em Estoque:</label>
            <input type="number" name="stock" id="stock">
        </div>
        <input type="submit" value="Enviar">
    </form>
</div>
