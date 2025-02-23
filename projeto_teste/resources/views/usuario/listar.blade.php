<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Usuários</h1>
        <a href="create_user.html" class="btn btn-primary mb-3">Cadastrar Novo Usuário</a>
        
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Usuário 1</td>
                    <td>usuario1@example.com</td>
                    <td>
                        <a href="edit_user.html" class="btn btn-info btn-sm">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Usuário 2</td>
                    <td>usuario2@example.com</td>
                    <td>
                        <a href="edit_user.html" class="btn btn-info btn-sm">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
