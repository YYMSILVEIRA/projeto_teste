<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração - Permissões</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        {!! cabecalho() !!}
        <h1>Permissões</h1>
        
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Permissão 1</td>
                    <td>
                        <a href="edit_permission.html" class="btn btn-info btn-sm">Editar</a>
                        <form action="#" method="POST" style="display:inline;">
                            <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Permissão 2</td>
                    <td>
                        <a href="edit_permission.html" class="btn btn-info btn-sm">Editar</a>
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
