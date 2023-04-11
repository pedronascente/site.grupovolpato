<?php

$_servidor = "mysql.seguidor.com.br";
$_usuario = "seguidor";
$_senha = "33jps665";
$_dbname = "seguidor";

$conn = mysqli_connect($_servidor,$_usuario,$_senha,$_dbname);

if(!$conn){
	die("Falha na conexão".mysqli_connect_error());
}else{
	//echo "Conexão Realizada com sucesso!";
}