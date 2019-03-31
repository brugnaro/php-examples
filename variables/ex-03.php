<?php
//tipos básicos
$nome = "Hcode";
$site = "www.hcode.com.br";

$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//tipos compostos
$frutas = array("abacaxi", "laranja", "manga");
//echo $frutas[2];

$nascimento = new DateTime();
//var_dump($nascimento);

//var_dump verifica tipo
$arquivo = fopen("ex-03.php", "r");
//var_dump($arquivo);

$nulo = NULL; //auxencia de valor
$vazio = ""; //foi iniciado (ja reservou espaço)