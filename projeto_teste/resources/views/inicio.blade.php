
{!! Abrir_HtmlHeader(tituloAdicional:"IB2S Cursos") !!}

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">IB2S Cursos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="#cursos">Todos os Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
                    <li class="nav-item">{!! HBtn(txtBtn:"Entrar", link:'login') !!}</li>
                </ul>
            </div>
        </div>
    </nav>
    
    <header class="text-center text-light bg-dark py-5">
        <div class="container">
            
            {!! Titulo(txtTitulo: 'Aprenda com os Melhores Cursos', nroTitulo: '1') !!}
            <p class="lead">Desenvolva novas habilidades e impulsione sua carreira</p>
            {!! HBtn(txtBtn:'Ver Cursos', link:'home') !!}
        </div>
    </header>
    
    <section id="cursos" class="container my-5">
        <h2 class="text-center">Nossos Cursos</h2>
        <div class="row">
            
            {!! card(htmlImagem:img(asset('/image/curso_programacao.png'), tipRet: "RETORNO"), titulo: "Curso de Programação", descricao: "Aprenda a programar com os melhores professores.", htmlBotao:HBtn(txtBtn:'Visitar Categoria', link:'home', tipRet: "RETORNO")) !!}

            {!! card(htmlImagem:img(asset('/image/marketing_digital.png'), tipRet: "RETORNO"), titulo: "Marketing Digital", descricao: "Domine estratégias para crescer seu negócio.", htmlBotao:HBtn(txtBtn:'Visitar Categoria', link:'home', tipRet: "RETORNO")) !!}

            {!! card(htmlImagem:img(asset('/image/desing_grafico.png'), tipRet: "RETORNO"), titulo: "Design Gráfico", descricao: "Aprenda a criar designs incríveis.", htmlBotao:HBtn(txtBtn:'Visitar Categoria', link:'home', tipRet: "RETORNO")) !!}

        </div>
    </section>
    
    {!! Rodape() !!}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
