<?php

/*
 * função anonima
 */
//$valor = function(){
//    return 'Marcus Guarani';
//};

//echo $valor;


function exibeSaida($nome, $sobrenome = "Guarani")
{
    echo $nome . ' ' .  $sobrenome;
}

$valor = 'Marcus';
exibeSaida($valor);
