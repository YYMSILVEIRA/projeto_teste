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
    {!! cabecalhoPadrao() !!}
    
    <header class="text-center text-light bg-dark py-1">
        <div class="container">
            <!-- Verifica se o usuário é admin -->
            @if(auth()->user() && auth()->user()->roles->contains('nome', 'adm'))
                    {!! HBtn(txtBtn:"Painel Administrador",link:"painel_adm", tpBtn:"btn-warning") !!}
            @endif
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
