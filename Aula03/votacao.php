<?php

//$nome = $_GET['nome'];
//$idade = (int) $_GET['idade'];

if(!isset($nome)){
    $nome = $_GET['nome'];
}else{
    $nome = '';
}

if(!isset($nome)){
    $idade = (int) $_GET['idade'];
}else{
    $idade = 0;
}

//$resultado = (($idade >= 18) && ($idade <= 65)) ? "É obrigado a Votar" : "Não é obrigado a Votar";

//echo $resultado;

if(($idade >= 18) && ($idade <= 65)){
    
    echo "É obrigado a votar";

    
}elseif(($idade >= 16 && $idade < 18) || ($idade > 65)){
    echo "O voto é opcional";  
    
}else{
    echo "não pode votar";  
}

