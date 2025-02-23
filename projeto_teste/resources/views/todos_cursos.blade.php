<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos os Cursos - Plataforma de Cursos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">IB2S Cursos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.html">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cursos">Todos os Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item">{!! HBtn(txtBtn:'Sair', link:'logout') !!}</li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="text-center text-light bg-dark py-1">
        <div class="container">
            <h1>Todos os Cursos Disponíveis</h1>
            <p class="lead">Encontre o curso ideal para você e avance na sua carreira!</p>
        </div>
    </header>
    
    <section id="cursos" class="container my-5">
        {!! Titulo(txtTitulo:'Cursos') !!}
        <div class="row">
            
        </div>
    </section>
    
    {!! Rodape() !!}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
