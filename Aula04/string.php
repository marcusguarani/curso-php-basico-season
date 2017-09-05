<?php

$nome   =    $_GET['nome'] ?? '';

session_start();

//$_SESSION['errors'] = array();


if ($nome != "Marcus Guarani") {
    $_SESSION['errors'][] = "O nome $nome esta errado";
    
}

if(!isset($_SESSION['errors'])){
    $_SESSION['success'] = "A validação realizada com sucesso!";
}

header("Location: http://localhost/Aula04/");


