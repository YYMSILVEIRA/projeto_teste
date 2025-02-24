<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Permissões</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        {!! cabecalho() !!}
        <h1>Editar Permissões</h1>
        <form action="/permissions/update" method="POST">
            <input type="hidden" name="_token" value="csrf_token_placeholder">

            <div class="mb-3">
                <label for="permission_name" class="form-label">Nome da Permissão</label>
                <input type="text" class="form-control" id="permission_name" name="name" value="Permissão Existente" required>
            </div>

            <div class="mb-3">
                <label for="permission_description" class="form-label">Descrição</label>
                <textarea class="form-control" id="permission_description" name="description" rows="3">Descrição existente da permissão.</textarea>
            </div>

            <div class="mb-3">
                <label for="assign_roles" class="form-label">Atribuir Funções</label>
                <select class="form-select" id="assign_roles" name="roles[]" multiple>
                    <option value="admin">Administrador</option>
                    <option value="editor">Editor</option>
                    <option value="viewer">Visualizador</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Salvar</button>
            <a href="permissions.html" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
</body>
</html>
