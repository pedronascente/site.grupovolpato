<?php 

if(!isset($_POST['token_response']) || null==$_POST['token_response']){
	header("Location:/obrigado.php"); 
}else{
	$token_response = $_POST['token_response'];
	unset($_POST['token_response']);
}

include_once('config.php'); 
include_once('phpmailer/PHPMailer.class.php'); 
include_once('Funcoes.class.php'); 
include_once('classes/conn.php');
include_once('classes/Captacao.php');
include_once('classes/RecaptchaGoogle.php'); 


$phpmailer = new PHPMailer;
$captacao = new Captacao($phpmailer, $_POST);
$rg = new RecaptchaGoogle();

$rg->set_recaptchaResponse($token_response);
$rg->set_url_api_recaptcha_google('https://www.google.com/recaptcha/api/siteverify');
$rg->set_secret('6Lc4Ce4aAAAAAOFdkZTHVDkxuNH9WcnrbKzF7mTi');
$result = $rg->validaRecapchaGoogle();

if($result['success'] ===true){
	//salvar leds
	if($captacao->_Dados['captacao_interesse']=="projetos-integrados"){
	    $captacao->enviarEmailparaMarketing();    
	}else{
	    if(!empty($captacao->_Dados['captacao_cliente']) && !empty($captacao->_Dados['captacao_telefone1'])){
			$captacao->backup_captacao_seguidor($conn);
	        $captacao->enviarCaptacaoGPI();
	        $captacao->enviarCaptacaoSeguidor();
	        $rtrtr =  $captacao->enviarEmail();

	       // var_dump($rtrtr); die;
	    }
	}

}else{
	header("Location:/obrigado.php"); 
}
header("Location:/obrigado.php"); 