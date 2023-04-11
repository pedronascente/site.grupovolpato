<?php 
include_once('config.php'); 
include_once('phpmailer/PHPMailer.class.php'); 
include_once('Funcoes.class.php'); 
include_once('classes/Captacao.php'); 

$phpmailer = new PHPMailer;
$captacao = new Captacao($phpmailer, $_POST);

if($captacao->_Dados['captacao_interesse']=="projetos-integrados"){
    $captacao->enviarEmailparaMarketing();    
}else{
    if(!empty($captacao->_Dados['captacao_cliente']) && !empty($captacao->_Dados['captacao_telefone1'])){
        $captacao->enviarCaptacao();
        $captacao->enviarEmail();
    }
}

header("Location:/obrigado.php");

//C:\wamp\www\grupovolpato.com\residencial\enviar_captacao\index.php