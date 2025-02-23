@php
$script='function validarSenha() {
            let senha = document.getElementById("password");
            let confirmarSenha = document.getElementById("password_confirmation");
            let botao = document.getElementById("cadastrar");

            if (senha.value === confirmarSenha.value && senha.value !== "") {
                senha.style.border = "1px solid #ced4da";
                confirmarSenha.style.border = "1px solid #ced4da";
                
            } else {
                senha.style.border = "2px solid red";
                confirmarSenha.style.border = "2px solid red";
                
            }
        }';
$ScrDesBtnCad='
            
            function validarFormulario() {
            let formulario = document.getElementById("formularioCadastro");
            let botao = document.getElementById("cadastrar");

            // Verifica se todos os campos estão preenchidos
            let preenchido = true;
            formulario.querySelectorAll("input").forEach((campo) => {
                if (campo.value.trim() === "") {
                    preenchido = false;
                }
            });

            // Ativa ou desativa o botão
            if (preenchido) {
                botao.disabled = false;
                botao.classList.add("ativo");
            } else {
                botao.disabled = true;
                botao.classList.remove("ativo");
            }
        }

        // Adiciona eventos para verificar a cada digitação
        document.querySelectorAll("#formularioCadastro input").forEach((campo) => {
            campo.addEventListener("input", validarFormulario);
        });';
$js_DesatDirBtn = "document.addEventListener('contextmenu', function (e) {
                    e.preventDefault();
                    });";
$js_DesAtaBtn = "document.addEventListener('keydown', function(e) {
  if (e.key === 'F12') {
    e.preventDefault();
  }
});";

$js_DetectarDT = "function detectDevTool(allow) {
  if (isNaN(+allow)) allow = 100;
  var start = +new Date();
  debugger;
  if (new Date() - start > allow) {
    // DevTools is open
    window.location.href = 'about:blank'; //Redireciona para uma página em branco
  }
}

setInterval(detectDevTool, 1000);";

$js_detectarCSI="document.addEventListener('keydown', function(e) {
  if (e.ctrlKey && e.shiftKey && e.key === 'I') {
    e.preventDefault();
  }
});";

$nomeCol='script';
$array_scripts_final=[
                        [$nomeCol => $ScrDesBtnCad],
                        [$nomeCol => $script],
                        [$nomeCol => $js_DesatDirBtn],
                        [$nomeCol => $js_DesAtaBtn],
                        [$nomeCol => $js_DetectarDT],
                        [$nomeCol => $js_detectarCSI],
                     ];

@endphp

{!! Abrir_HtmlHeader(" Página Inicial", estilo:Estilizacao_Login(tipRet: 'RETORNAR')) !!}
    {!! Abrir_LoginContainer() !!}
        <h2>Cadastrar Usuário</h2>

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

        {{-- Formulário --}}
        {!! Abrir_Formulario(destino: 'usuario.store', metodo:'POST', idObjeto: 'formularioCadastro') !!}
        
            @csrf {{-- Proteção contra CSRF --}}
            
            {!! inputTxt(txtLabel: 'Nome', idNameFor:'nome') !!}

            {!! inputTxt(txtLabel: 'E-mail', idNameFor:'email') !!}

            {!! inputSenha(txtLabel:'Senha',idNameFor:'password', parametros_input:'oninput="validarSenha()"') !!}

            {!! inputSenha(txtLabel:'Confirme a senha',idNameFor:'password_confirmation', parametros_input:'oninput="validarSenha()"') !!}


            {!! btn(txtBtn: 'Cadastrar', idObjeto: 'cadastrar', param: 'disabled') !!}

        
        {!! Fechar_Formulario() !!}
    {!! Fechar_LoginContainer() !!}
{!! Fechar_HtmlHeader(scripts:$array_scripts_final) !!}
