<?php

//conversão de inteiro para boolean
$variavel = 0;
$variavel = -1;


//conversão de string para boolean
$variavel = ""; //false
$variavel = "0"; //false
$variavel = " "; //true

//conversao de array para boolean
$variavel = array();
$varivael = array(1);

//conversão de NULL para boolean
$variavel = NULL;

$boolean = (bool) $variavel;

var_dump($boolean);

