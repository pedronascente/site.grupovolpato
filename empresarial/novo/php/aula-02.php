<?php

//comentario é ignorado por php;

//variavel inteira: idade, somente letras e numeros, não inventar moda

//cuidar ponto e virgula, tod linha deve terminar assim


// defino valor 1 - defino valor2 - defino valor 3

//php ignora comentarios e linhas em branco




$valor1 = 1;
$valor2 = 2;
$valor3 = 3;


$total = $valor1 + $valor2 + $valor3;

echo $total; //funcao echo

echo "<br>";

//string armazenamento de textos

//como declarar uma variavel string "seja bem vindo / mostrar isso na tela"


// ponto concatena strings


$palavra1 = "seja";
$palavra2 = "bem";
$palavra3 = "vindo";

$frase1 = $palavra1.$palavra2.$palavra3;


echo $frase1;


echo "<br>";


// constante em aplicação php

// passo 1 criar constante de email de uma suposta empres
// exibir email


//valor de umas constante ficar em MAIUSCULO




define("EMAIL_EMPRESA", "@grupovolpato.com");


echo "EMAIL_EMPRESA.<br><br>";
 

 //exemplo usuarios de email


$user1 ="christian_markus";
$user3 = "dienifer";



echo $user1.EMAIL_EMPRESA."<br>";
echo $user3.EMAIL_EMPRESA."<br>";



//expressões matematicas



//passo 1 criar variavel inteira e valor 1 e inicializar com valor 10
//passo 2 criar variavel inteira e valor 2 e inicializar com valor 15
//passo 3 criar variavel total e conter soma do valor1 mais valor 2 e dividir por 2
//passo 4 exibir



$v1 = 10;
$v2 = 15;
$totalizando = ($v1 + $v2) / 2;  //tudo que esta dentro do parenteses é executado primeiro

echo $totalizando;

echo "<br>";


//estruturas condicionais


//1 criar variavel chamada condição e inicializar com valor 2
//2 se a variavel for igual a 2, somar a 1
//3 exibir resultado

/*
$condicao = 2; 

if ($condicao == 2) { // se a condicao for igual a 2
	// vai entao processar essa funcionalidade

	$condicao = $condicao + 5;
}


// condinua executando

echo $condicao;
*/



$usuario = "aca";

if ($usuario == "Administrato") {

	echo "FAÇA SEU LOGIN";
}

else {
	echo "FAÇA SEU CADASTRO";
}


//Aula7- loops/laços de repetiçao

//escrever 50 vezes a palavra OLA
// iniciar variavel em zero
// fazer contator girar ate 49 


/*
$contador = 0;

//enquanto contator for menor que 50 repita esse funcao

while ( $contador < 51) {
	echo "$contador.OLA PHP.<br>";

	$contador ++; //devo adicionar mais um na variavel pois ficara fazendo loop infinito
}
*/

echo "FIM";


//loop de repetição for

//1 repetir a mesma palavra 50 vezes



for ($i=0; $i<50;$i++){
	echo "Ollá PHP FOR.<br>";

	if ($i==25) { //parar o loop
		echo $i."- parar o loop<br>";
		break;
	}
}

echo "fim.<br><br><br><br><br>";


//ARRAYS DE UMA DIMENSÃO COMPARADO COM TABELA DO EXCEL

//TIPO DE ESTUTURA DE DADOS QUE UMA UNICA VARIAVEL ARMAZENE INFINITA COISAS



// faze loop de 1 a 50 e armazenar todos numeros em uma variavel
//ARRAYS COM DUAS DIMENSÕES



$bd = array();

$bd[0] = array("nome"=>"Jaison Schidt", "Idade"=>31, "Cidade"=>"Passo Fundo");
$bd[1] = array("nome"=>"Jaison Schidt", "Idade"=>31, "Cidade"=>"Passo Fundo");
$bd[2] = array("nome"=>"Jaison Schidt", "Idade"=>31, "Cidade"=>"Passo Fundo");
$bd[3] = array("nome"=>"Jaison Schidt", "Idade"=>31, "Cidade"=>"Passo Fundo");


foreach ($bd as $coluna) {

	echo $coluna["nome"]." ".$coluna['Idade']." ".$coluna["Cidade"]."</br></br></br>"; //CUIDAR QUE TUDO DEVE ESTAR IGUAL
}



//FUNÇÕES: ESTRUTURAS DE PROGRAMAÇÃO MUITO RELEVANTES


//1º criar função de boas vindas na tela

//função deve ser unica


funcition sejaBemvindo (){
	
}



?>