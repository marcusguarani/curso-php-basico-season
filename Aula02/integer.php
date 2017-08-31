<?php

//conversão para boolenao
$true = true;

$integer = (int) $true;
$integer = intval($integer);
echo "O valor convertido é $integer <br>";

$integer = (int) false;
echo "O valor boolean é $integer <br><br>";


//conversão para float
$float = 5.9;

$integer = (int) $float;
echo "O valor float convertido é $integer <br><br>";


//conversão de string para integer
$string = '1';
$string = '2.11';
$string = "texto";

$integer = (int) $string;
echo "O valor string convertido é $integer <br><br>";

$soma = 12 + 'teste';
$soma = 12 + 'teste';
echo "O valor  da soma é $soma <br><br>";





