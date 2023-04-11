<?php
date_default_timezone_set('America/Sao_Paulo');

//define('MAIL_CHARSET', "UTF-8");
define('MAIL_SMTPAUTH', true);
define('MAIL_SMTPSECURE', 'ssl');
define('MAIL_HOST', 'smtp.revendavolpato.com');
define('MAIL_PORT', 587);
define('MAIL_USER_NAME', "revendavolpato@revendavolpato.com");
define('MAIL_PASSWORD', 'admin@cairu');

require_once("phpmailer/class.phpmailer.php");
require_once("phpmailer/class.smtp.php");
include_once"Funcoes.class.php";

$phpmailer = new PHPMailer;

$nome       = $_POST['nome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];
$cpfCnpj   = $_POST['cpfCnpj'];
$servico   = $_POST['servico'];
$assunto   = $_POST['assunto'];
$mensagem   =  $_POST['mensagem'];

$msgCliente = "
	<h1>Segunda Via de Boleto {$servico}</h1>
	<ul>
		<li>Nome : {$nome}</li>
		<li>Email :  {$email}</li>
		<li>Tel: {$telefone}</li>
		<li>CPF/CNPJ :  {$cpfCnpj}</li>
		<li>Servico Contratado :  {$servico}</li>
		<li>Mensagem : <br> {$mensagem}</li>
	</ul>
";

$DadosEmail['asssunto'] = "Segunda Via de Boleto";
$DadosEmail['emailRementente'] = 'revendavolpato@revendavolpato.com';
$DadosEmail['remetente'] = 'volpatorastr.com';
$DadosEmail['emailDestino'] = "arte.volpato@gmail.com";
$DadosEmail['nome'] = $nome;
$DadosEmail['emailResposta'] = 'marketing@grupovolpato.com';
$DadosEmail['nomeEmailResposta'] = "Segunda Via de Boleto";
$DadosEmail['Body'] = $msgCliente;

$RESPOSTA = (Funcoes::EnviarEmail($DadosEmail, $phpmailer)) ? 1 : 0;



if($RESPOSTA){
	echo'<script type="text/javascript">
		   location.href="obrigado.php";
		 </script>';
}else{
echo'nao';
}