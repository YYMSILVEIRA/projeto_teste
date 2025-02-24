<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        {!! cabecalho() !!}
        <h1>Editar Usuário</h1>
        <form action="/users/update" method="POST">
            <input type="hidden" name="_token" value="csrf_token_placeholder">

            <div class="mb-3">
                <label for="user_name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="user_name" name="name" value="Nome do Usuário" required>
            </div>

            <div class="mb-3">
                <label for="user_email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="user_email" name="email" value="usuario@exemplo.com" required>
            </div>

            <div class="mb-3">
                <label for="user_role" class="form-label">Função</label>
                <select class="form-select" id="user_role" name="role">
                    <option value="admin">Administrador</option>
                    <option value="editor">Editor</option>
                    <option value="viewer">Visualizador</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="user_password" class="form-label">Nova Senha (Opcional)</label>
                <input type="password" class="form-control" id="user_password" name="password">
            </div>

            <button type="submit" class="btn btn-success mt-3">Salvar</button>
            <a href="users.html" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>
</body>
</html>
