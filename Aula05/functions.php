<?php

function validacaoTamanhoNome($valor)
{
    if(strlen(utf8_decode($valor)) <= 10){
        //echo "error";
        //exit();
        $_SESSION['errors'][] = "O nome $nome tem que ser maior que 10";
        
    }
}


function validacaoComSucesso($mensagem)
{
    if(!isset($_SESSION['errors'])){
        $_SESSION['success'] = $mensagem;
    
    }
}