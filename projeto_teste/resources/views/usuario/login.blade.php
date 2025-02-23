
 {!! Abrir_HtmlHeader(" Página Inicial", estilo:Estilizacao_Login(tipRet: 'RETORNAR')) !!}
    
    {!! Abrir_LoginContainer() !!}
    {{-- Exibe mensagens de sucesso --}}
    @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- Exibe erros de validação --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    
        {!! Abrir_Formulario(destino: 'validar_login') !!}
            @csrf {{-- Proteção contra CSRF --}}
            {!! Titulo(txtTitulo: "Login") !!}

            {!! inputTxt(txtLabel: 'E-mail', idNameFor: 'email') !!}

            {!! inputSenha(txtLabel: 'Senha', idNameFor: 'password') !!}

            {!! btn(txtBtn: 'Entrar') !!}
        {!! Fechar_Formulario() !!}
    
    {!! Fechar_LoginContainer() !!}

{!! Fechar_HtmlHeader() !!}

