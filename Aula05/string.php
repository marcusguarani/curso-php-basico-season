<?php

session_start();

require_once('functions.php');

$nome   =    $_POST['nome'] ?? '';
$linguagem = $_POST['linguagem'] ?? '';
$conhecimento = (bool) ($_POST['conhecimento']) ?? false;
$php = $_POST['php'] ?? '';


var_dump($php);
exit();


//$_SESSION['errors'] = array();



validacaoTamanhoNomeUtf8($nome);

validacaoComSucesso("Validação realizada com sucesso!");


/*if(!isset($_SESSION['errors'])){
    $_SESSION['success'] = "A validação realizada com sucesso!";
}*/

header("Location: http://localhost/Aula05/");
