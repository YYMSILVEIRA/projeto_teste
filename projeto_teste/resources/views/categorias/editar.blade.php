<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Categoria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        {!! cabecalho() !!}
        <h1>Editar Categoria</h1>
        <form action="/categories/update" method="POST">
            <input type="hidden" name="_token" value="csrf_token_placeholder">
            
            <div class="mb-3">
                <label for="category_name" class="form-label">Nome da Categoria</label>
                <input type="text" class="form-control" id="category_name" name="name" value="Categoria Existente" required>
            </div>

            <div class="mb-3">
                <label for="category_description" class="form-label">Descrição</label>
                <textarea class="form-control" id="category_description" name="description" rows="3">Descrição existente da categoria.</textarea>
            </div>

            <button type="submit" class="btn btn-success mt-3">Salvar</button>
            <a href="categories.html" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
</body>
</html>
