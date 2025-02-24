<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Plataforma de Cursos</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #f8f9fa; /* Cor de texto mais clara */
        }
        
        .card {
            background-color: #1e1e1e;
            border: 1px solid #dc3545;
        }
        .card-header {
            background-color: #dc3545;
            color: white;
        }
        .card-body{
            color: white;
        }
        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-primary:hover {
            background-color: #bb2d3b;
            border-color: #bb2d3b;
        }
        .highlight {
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    {!! cabecalhoPadrao() !!}    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8" style="margin-top:4vh;">
                <div class="card shadow">
                    <div class="card-header text-center">
                        <h3>Sobre a <span class="highlight">IB2S Cursos</span></h3>
                    </div>
                    <div class="card-body">
                        <p>A <strong>IB2S Cursos</strong> é uma plataforma inovadora que oferece **cursos online de alta qualidade** para quem deseja aprimorar suas habilidades e conquistar novas oportunidades no mercado de trabalho.</p>

                        <p>Nosso objetivo é tornar o aprendizado acessível e eficiente, com **cursos práticos e conteúdos atualizados**, desenvolvidos por especialistas de diversas áreas.</p>

                        <p>💡 **Diferenciais da nossa plataforma:**</p>
                        <ul>
                            <li>📚 **Cursos atualizados e certificados**</li>
                            <li>👨‍🏫 **Instrutores experientes e renomados**</li>
                            <li>⏳ **Flexibilidade para estudar no seu tempo**</li>
                            <li>💼 **Preparação para o mercado de trabalho**</li>
                        </ul>

                        <p>Seja você um iniciante ou um profissional experiente, temos um curso ideal para o seu crescimento! 🚀</p>

                        <div class="text-center mt-4">
                            <a href="{!! Route('todos_cursos') !!}" class="btn btn-primary">Conheça Nossos Cursos</a>
                            <a href="{!! Route('contato') !!}" class="btn btn-outline-light">Fale Conosco</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
