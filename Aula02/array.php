<?php

$array = array(1, 10);
$array[5] = 5;
$array[] = 10;


echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

echo "A posição 0 do array é " . $array[0] ."<br>";
echo "A posição 1 do array é " . $array[1] ."<br>";
echo "A posição 5 do array é " . $array[5] ."<br><br>";


//dicionarios
$array = array('Livro'=>4,'Autor'=>'Marcus');
$array[5] = 5;
$array[] = 10;


echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

echo "O autor do Livro é " . $array['Autor'];






