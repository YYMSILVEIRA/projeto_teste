<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: white;
        }
        .card {
            background-color: #1e1e1e;
            border: 1px solid #dc3545;
        }
        .card-header {
            background-color: #dc3545;
            color: white;
        }
        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-primary:hover {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .form-control {
            background-color: #2b2b2b;
            color: white;
            border: 1px solid #dc3545;
        }
        .form-control::placeholder {
            color: #bbbbbb;
        }
        label{
            color: white;
        }
    </style>
</head>
<body>
    {!! cabecalhoPadrao() !!}
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h3>Entre em Contato</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome:</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Digite seu nome" required>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu e-mail" required>
                            </div>

                            <div class="mb-3">
                                <label for="message" class="form-label">Mensagem:</label>
                                <textarea id="message" name="message" class="form-control" rows="5" placeholder="Escreva sua mensagem" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
