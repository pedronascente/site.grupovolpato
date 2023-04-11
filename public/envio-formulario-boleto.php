<?php
$data = $_POST;
if($data['acao']==="form_grupoVolpato"){
	if($data['interesse']==="rastreamento"){		
		include_once("segunda-via-rastreamento.php");	
	}else{
			include_once("segunda-via-alarme.php");	
		}
	}
else
	header('Location: falhou.php');