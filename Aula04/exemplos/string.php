<?php

$nome = $_GET['nome'] ?? '';
/*
 * printf
 */
//printf("%s tem %.2f de altura", "Marcus Guarani", 1.70);

/*
 * strlen
 */
//$nome = strlen(utf8_decode("André"));

/*
 * wordwrap
 */
//$novo = wordwrap($nome, 5);

/*
 * trim
 */
//$novo = trim($nome);

/*
 * ltrim
 */
//$novo = ltrim($nome);

/*
 * rtrim
 */
//$novo = rtrim($nome);

/*
 * explode
 */
//$linguagem = "PHP-JAVA-PHYTON";
//$novo = explode("-",$linguagem );

/*
 * split
 */
//$linguagem = "PHP-JAVA-PHYTON";
//$novo = str_split($linguagem , 4);

/*
 * implode
 */
//$linguagem = array("JAVA","PHP","PHYTON");
//$novo = implode(" . ", $linguagem);

/*
 * strpos
 */
//$frase = "Aprendendo PHP";
//$novo = strpos($frase, "PHP");

/*
 * substr
 */
$texto = "Aprendendo PHP Básico";
$novo = substr($texto, 2, 5);

var_dump($novo);
