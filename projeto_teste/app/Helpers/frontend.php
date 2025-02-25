<?php



function Abrir_HtmlHeader($tituloAdicional="", $estilo="", $script="", $tipRet="IMP"){
    
    $conteudo = '<!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1">
                    <title>'.$tituloAdicional.'</title>
                    <style>'.$estilo.'</style>
                    <script>'.$script.'</script>
                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
                </head>
                ';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Fechar_HtmlHeader($scripts=[], $tipRet="IMP"){
    $conteudo="";    
    foreach ($scripts as $item){
        $conteudo .= "<script>".$item['script']."</script>";
    }
    
    $conteudo .= '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            </body></html>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Rodape($tipRet="IMP"){
    $anoAtual = date('Y');

    $conteudo = '<footer class="bg-dark text-light text-center py-3">
                    <p>&copy; '.$anoAtual.' IB2S Cursos. Todos os direitos reservados.</p>
                </footer>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function InputNumero($nomeEntrada="", $classe="", $idEntrada="", $prefixo="", $txtAmostra="", $sufixo="", $txtAcessibilidade="", $parametrosExtra="", $tipRet="IMP"){
    if ($idEntrada != ""){
        $idEntrada = ' id="'.$idEntrada."' ";
    }
    if ($sufixo!='')
    {
        $sufixo = '<span class="input-group-text">'.$sufixo.'</span>';
    }

    if ($prefixo!= ''){
        $prefixo = '<span class="input-group-text">'.$prefixo.'</span>';
    }

    $conteudo = '<div class="input-group mb-3">
		    '.$prefixo.'
		        <input type="number" '.$parametrosExtra.' '.$idEntrada.' class="form-control '.$classe.'" name="'.$nomeEntrada.'" placeholder="'.$txtAmostra.'" aria-label="'.$txtAcessibilidade.'">
		    '.$sufixo.'
		  </div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function img($caminhoImagem="", $txtAlternativo="", $parametros="", $classe="", $tipRet="IMP"){
    $conteudo = '<img src="'.$caminhoImagem.'"  '.$parametros.' class="card-img-top '.$classe.' " alt="'.$txtAlternativo.'">';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Titulo($txtTitulo="", $classe="", $parametros="", $nroTitulo="2", $tipRet="IMP"){
    $conteudo = '<h'.$nroTitulo.' class="'.$classe.' text-center" '.$parametros.'>'.$txtTitulo.'</h'.$nroTitulo.'>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Abrir_Container($tipo="mt-5", $tipRet="IMP"){
    $conteudo = '<div class="container '.$tipo.'">';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}
function Fechar_Container($tipRet="IMP"){
    $conteudo = '</div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Abrir_Formulario($metodo="POST", $destino="", $tipRet="IMP", $idObjeto=""){
    if ($destino!=''){
        $destino = 'action="' . route($destino) . '" ';
    }
    if ($idObjeto!=''){
        $idObjeto ='id="'.$idObjeto.'" ';
    }
    $conteudo = '<form '.$destino.' method="'.$metodo.'" '.$idObjeto.' class="mt-4" >';
    
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}
function Fechar_Formulario($tipRet="IMP"){
    $conteudo = '</form>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Btn($txtBtn="", $tpBtn="btn-primary", $classe="", $tipRet="IMP", $idObjeto= "", $param=""){
    if ($idObjeto!= ""){
        $idObjeto ='id="'.$idObjeto.'" ';
    }
    
    $conteudo = '<button type="submit" class="btn '.$tpBtn.' '.$classe.' w-100" '.$idObjeto.' '.$param.'>'.$txtBtn.'</button>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function HBtn($txtBtn="", $link="", $tpBtn="btn-danger", $classe="", $tipRet="IMP", $idObjeto= "", $param=""){
    if ($idObjeto!= ""){
        $idObjeto ='id="'.$idObjeto.'" ';
    }
    
    $conteudo = '<a href="'.route($link).'" class="btn '.$tpBtn.' '.$classe.'" '.$idObjeto.' '.$param.'>'.$txtBtn.'</a>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}


function CheckBtnSwt($nomeCheckBtn="", $txtCheckBtn="", $value="", $estilo="", $tipRet="IMP"){
    if ($value != ''){
        $value= ' value="'.$value.'"';
    }
    
    $conteudo = '<div class="input-group mb-3">
			<div class="form-check form-switch">
			<input class="form-check-input" type="checkbox" role="switch" name="'.$nomeCheckBtn.'" '.$value.' style="cursor: pointer; '.$estilo.'" id="flexSwitchCheckDefault">
			<label class="form-check-label" for="flexSwitchCheckDefault">'.$txtCheckBtn.'</label>
			</div>
		</div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Abrir_DivResultados($tipRet="IMP"){
    $conteudo = '<div class="mt-4 p-3 bg-light border rounded">';

    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}
function Fechar_DivResultados($tipRet="IMP"){
    $conteudo =  '</div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function ImprimirMonetario($txtTitulo="", $vlr=0, $tipRet="IMP"){
    $conteudo = '<p><strong>'.$txtTitulo.'</strong> R$ '.number_format($vlr, 2, ',', '.').'</p>';
    
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}
function ImprimirTxt($txtTitulo="", $txt="", $tipRet="IMP"){
    $conteudo = '<p><strong>'.$txtTitulo.'</strong> '.$txt.'</p>';

    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function SelecionarItem($txtTitulo="", $nomeObjeto = "", $txtPadrao="", $vlrPadrao="", $tipRet="IMP", $arrAssotiativo=[]){
    $conteudo = '<div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">'.$txtTitulo.'</label>
                <select class="form-select" id="inputGroupSelect01" style="cursor: pointer;" name="'.$nomeObjeto.'">
                    <option selected value="'.$vlrPadrao.'">'.$txtPadrao.'</option>';
    
    foreach ($arrAssotiativo as $item){
        $conteudo .= '<option value="'.$item['vlr'].'">'.$item['txt'].'</option>';
    }
    
    $conteudo .= '</select> </div>';

    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function inputTxt($txtLabel="", $idNameFor="", $tipRet="IMP"){
    $conteudo = '<div class="mb-3">
                <label for="'.$idNameFor.'" class="form-label">'.$txtLabel.'</label>
                <input type="text" id="'.$idNameFor.'" name="'.$idNameFor.'" class="form-control" required>
            </div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function inputSenha($txtLabel="", $idNameFor="", $estilo_labels="", $classeLabels="", $tipRet="IMP", $parametros_input = ""){
    
    $conteudo = '<div class="mb-3">
    <label for="'.$idNameFor.'" style="'.$estilo_labels.'" class="form-label '.$classeLabels.'">'.$txtLabel.'</label>
    <input type="password" id="'.$idNameFor.'" name="'.$idNameFor.'" class="form-control" '.$parametros_input.' required
        style="border-radius: 8px; border: 1px solid #ced4da; padding: 10px; font-size: 16px; width: 100%; outline: none; '.$estilo_labels.' "
        onfocus="this.style.borderColor=\'#007AFF\'; this.style.boxShadow=\'0 0 0 2px rgba(0, 122, 255, 0.2)\';"
        onblur="this.style.borderColor=\'#ced4da\'; this.style.boxShadow=\'none\';">
</div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Abrir_LoginContainer($classe="", $estilo="", $tipRet="IMP"){
    $conteudo = '<div class="login-container '.$classe.'" style="'.$estilo.'">';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}
function Fechar_LoginContainer($tipRet='IMP'){
    $conteudo = '</div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function Estilizacao_Login($tipRet="IMP"){
    
    $conteudo='body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            max-width: 400px;
            width: 100%;
            padding: 30px;
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #2c3e50;
            font-size: 1.8rem;
        }
        .login-container .form-control {
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 16px;
        }
        .login-container .form-control:focus {
            border-color: #007AFF;
            box-shadow: 0 0 0 2px rgba(0, 122, 255, 0.2);
        }
        .login-container .btn {
            width: 100%;
            background-color: #007AFF;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            font-weight: 500;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .login-container .btn:hover {
            background-color: #005bb5;
        }
        .error-message {
            color: #dc3545;
            text-align: center;
            margin-bottom: 15px;
            font-size: 14px;
        }
        .login-container .btn-link {
            text-decoration: none;
            font-size: 14px;
            transition: color 0.3s ease;
        }
        .login-container{color: #007AFF;}
        .btn-link {color: #005bb5;}';
    
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
     
}


function card($htmlImagem="", $titulo, $descricao, $htmlBotao, $tipRet="IMP"){
    $conteudo = '<div class="col-md-4">
                <div class="card">
                    '.$htmlImagem.'
                    <div class="card-body">
                        <h5 class="card-title">'.$titulo.'</h5>
                        <p class="card-text">'.$descricao.'</p>
                        '.$htmlBotao.'
                    </div>
                </div>
            </div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function cabecalho($tipRet="IMP"){
    $conteudo = '    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="'.Route("painel_adm").'">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="'.Route("listar_categoria").'">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="'.Route("listar_usuarios").'">Usuários</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="'.Route("listar_permissao").'">Permissões</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="'.route("todos_cursos").'">Ir para todos os cursos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-danger" href="'.Route("logout").'">Sair</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>';
    
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function cabecalhoPadrao($tipRet="IMP"){
    $entrar_sair="";
    if(Auth::check()){
        $entrar_sair='<li class="nav-item"><a href="'.Route("logout").'" class="btn btn-danger ">Sair</a></li>';
    }else{
        $entrar_sair='<li class="nav-item"><a href="'.route("login").'" class="btn btn-danger ">Entrar</a></li>';
    }
    $conteudo = '    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="'.Route('home').'">IB2S Cursos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="'.Route('home').'">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="'.Route("todos_cursos").'">Todos os Cursos</a></li>
                    <li class="nav-item"><a class="nav-link" href="'.Route('sobre').'">Sobre</a></li>
                    <li class="nav-item"><a class="nav-link" href="'.Route("contato").'">Contato</a></li>
                    '.$entrar_sair.'
                </ul>
            </div>
        </div>
    </nav>';
    
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function cardAdmMenu($titulo="", $descricao="", $hBtn="", $tipRet="IMP"){
    $conteudo = '<div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        '.$titulo.'
                    </div>
                    <div class="card-body">
                        <p>'.$descricao.'</p>
                        '.$hBtn.'
                    </div>
                </div>
            </div>';
    if ($tipRet == 'IMP'){
        echo $conteudo;
    }else{
        return $conteudo;
    }
}

function tabela($lstCabColunas=[], $ArrDados=[], $lstAcoes=[]){
    $Colunas="";
    foreach ($lstCabColunas as $coluna){
        $Colunas .= '<th>'.$coluna.'</th>';
    }
    
    $linhas="";
    foreach ($ArrDados as $linha){
        $linhas.= '<tr>';
        foreach ($linha as $valor){
            $linhas.= '<td>'.$valor.'</td>';
        }
        $linhas.= '</tr>';
    }

    $conteudo = '<table class="table">
            <thead>
                <tr>
                    '.$Colunas.'
                </tr>
            </thead>
            <tbody>
                    '.$linhas.'
            </tbody>
        </table>';
}



class SVG {
    private array $symbols = [
        "check2" => "M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z",
        "circle-half" => "M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z",
        "moon-stars-fill" => "M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z",
        "sun-fill" => "M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13z",
        "cart" => "M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z",
        "cracha" => "M6 .75A2.25 2.25 0 0 0 3.75 3v18c0 1.266.984 2.25 2.25 2.25h12A2.25 2.25 0 0 0 20.25 21V3c0-1.219-1.031-2.25-2.25-2.25H6ZM3 3c0-1.64 1.313-3 3-3h12c1.64 0 3 1.36 3 3v18c0 1.688-1.36 3-3 3H6c-1.688 0-3-1.313-3-3V3Zm11.25 7.5c0-.797-.469-1.5-1.125-1.922-.703-.422-1.594-.422-2.25 0C10.172 9 9.75 9.703 9.75 10.5c0 .844.422 1.547 1.125 1.969.656.422 1.547.422 2.25 0 .656-.422 1.125-1.125 1.125-1.969ZM9 10.5c0-1.031.563-2.016 1.5-2.578.89-.516 2.063-.516 3 0 .89.562 1.5 1.547 1.5 2.578 0 1.078-.61 2.063-1.5 2.625-.938.516-2.11.516-3 0A3.049 3.049 0 0 1 9 10.5Zm0-7.125A.37.37 0 0 1 9.375 3h5.25c.188 0 .375.188.375.375a.37.37 0 0 1-.375.375h-5.25C9.141 3.75 9 3.61 9 3.375Zm-1.5 15a.37.37 0 0 1-.375.375c-.234 0-.375-.14-.375-.375 0-1.828 1.5-3.375 3.375-3.375h3.75c1.828 0 3.375 1.547 3.375 3.375a.37.37 0 0 1-.375.375c-.234 0-.375-.14-.375-.375 0-1.406-1.219-2.625-2.625-2.625h-3.75c-1.453 0-2.625 1.219-2.625 2.625Z"
    ];

    public function render(string $symbol = null): string {
        if ($symbol && isset($this->symbols[$symbol])) {
            return "<svg xmlns='http://www.w3.org/2000/svg'><symbol id='$symbol' viewBox='0 0 16 16'><path d='{$this->symbols[$symbol]}'/></symbol></svg>";
        }
        
        $svg = '<svg xmlns="http://www.w3.org/2000/svg" class="d-none">';
        foreach ($this->symbols as $id => $path) {
            $svg .= "<symbol id='$id' viewBox='0 0 16 16'><path d='$path'/></symbol>";
        }
        $svg .= '</svg>';
        return $svg;
    }
}

// Exemplo de uso:
//$svgSymbols = new SVG();
//echo $svgSymbols->render("check2");







?>