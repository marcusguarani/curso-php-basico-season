<?php

//$numeros = array();
//$numeros[0] = 2;
//$numeros[3] = 4;
//$numeros[4] = 5;

$usuario = array(
    'nome' => 'Marcus',
    'idade'=> '42',
    'sobrenome' => 'Guarani'
);  
echo '<pre>';
print_r($usuario);
echo '</pre>';
echo '<br/><br/>';

$numeros = array();
$numeros[] = 2;
        
$databaseConfig = include('config.php');

echo '<pre>';
print_r($databaseConfig);
echo '</pre>';
echo '<br/><br/>';


$matriz = array(
   array(5,7,1), 
   array(8,2,3),
   array(1,2,3),
);
echo '<pre>';
print_r($matriz);
echo '</pre>';
echo '<br/><br/>';

$linguagem = array("PHP","Java","ASP");

var_dump(array_key_exists(3, $linguagem));
echo "<br/><br/>";

$usuario = array(
    'nome' => 'Marcus',
    'sobrenome' => 'Guarani',
    'idade' => '42'    
);

$usuario['altura'] = 1.70;

unset($usuario['altura']);
var_dump(array_key_exists('altura', $usuario));
echo '<br/><br/>';

/*
 * count
 */
$usuario = array(
    'nome' => 'Marcus',
    'sobrenome' => 'Guarani',
    'idade' => '42'    
);
var_dump(count($usuario));
echo '<br/><br/>';


//in_array
$numeros = array(1,2,5,7);
var_dump(in_array(11, $numeros));
