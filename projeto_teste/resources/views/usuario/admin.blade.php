{!! Abrir_HtmlHeader('Administração da Plataforma','.card {margin-bottom: 20px;}') !!}
    
    {!! Abrir_Container() !!}

        {!! cabecalho() !!}
        
        {!! Titulo("Painel de Administração",nroTitulo:"1") !!}
        
        <div class="row">
            
            {!! cardAdmMenu("Categorias","Gerenciar categorias de produtos ou serviços.",HBtn("Ver Categorias","listar_categoria",tpBtn:"btn-primary",tipRet:"RETORNO")) !!}
            
            {!! cardAdmMenu("Usuários","Gerenciar os usuários do sistema.",HBtn("Ver Usuários","listar_usuarios",tpBtn:"btn-primary",tipRet:"RETORNO")) !!}
            
            {!! cardAdmMenu("Permissões","Gerenciar permissões de acesso para diferentes usuários.",HBtn("Ver Permissões","listar_permissao",tpBtn:"btn-primary",tipRet:"RETORNO")) !!}

            {!! cardAdmMenu("Configurações","Configurar preferências do sistema.", '<a href="#" class="btn btn-secondary">Ver Configurações</a>') !!}
            
            {!! cardAdmMenu("Relatórios","Visualizar relatórios do sistema.", '<a href="#" class="btn btn-secondary">Ver Relatórios</a>') !!}

        
            
        </div>

    {!! Fechar_Container() !!}

{!! Fechar_HtmlHeader() !!}
