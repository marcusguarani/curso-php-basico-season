<?php

$a = 1;
$b = 2;

$resultado = ($a <=> $b);
echo "Spacechip MENOR < $resultado <br>";


$a = '2';
$b = 2;

$resultado = ($a <=> $b);
echo "Spacechip IGUAL == $resultado <br>";


$a = 3;
$b = 2;

$resultado = ($a <=> $b);
echo "Spacechip MAIOR > $resultado <br>";