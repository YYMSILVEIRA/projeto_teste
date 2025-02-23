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


?>