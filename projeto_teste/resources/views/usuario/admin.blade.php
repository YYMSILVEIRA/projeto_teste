<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Painel de Administração</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Categorias
                    </div>
                    <div class="card-body">
                        <p>Gerenciar categorias de produtos ou serviços.</p>
                        <a href="categories.html" class="btn btn-primary">Ver Categorias</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Usuários
                    </div>
                    <div class="card-body">
                        <p>Gerenciar os usuários do sistema.</p>
                        <a href="users.html" class="btn btn-primary">Ver Usuários</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Permissões
                    </div>
                    <div class="card-body">
                        <p>Gerenciar permissões de acesso para diferentes usuários.</p>
                        <a href="permissions.html" class="btn btn-primary">Ver Permissões</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Configurações
                    </div>
                    <div class="card-body">
                        <p>Configurar preferências do sistema.</p>
                        <a href="settings.html" class="btn btn-primary">Acessar Configurações</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Relatórios
                    </div>
                    <div class="card-body">
                        <p>Visualizar relatórios do sistema.</p>
                        <a href="reports.html" class="btn btn-primary">Ver Relatórios</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
