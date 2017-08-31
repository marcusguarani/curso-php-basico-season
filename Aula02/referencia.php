<?php

//atribuição de variavel padrão
$a = 10;

$b = $a;

$b = 5;

echo "A variável a é $a <br>";
echo "A variável b é $b <br><br>";

//atribuição de variavel por referência
$a = 10;

$b = &$a;
echo "Atribuição por referência <br>";
echo "A variável a é $a <br>";
echo "A variável b é $b <br><br>";



