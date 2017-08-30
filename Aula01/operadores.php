<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        //operadores aritméticos
        $valor1 = 15;
        $valor2 = 7;
        
        //soma
        $soma = $valor1 + $valor2;
        echo "O valor da soma dos numeros $valor1 e $valor2 é $soma <br>";
        
        //subtração
        $subtracao = $valor1 - $valor2;
        echo "O valor da subtração dos numeros $valor1 e $valor2 é $subtracao <br>";
        
        //multiplicação
        $multiplicacao = $valor1 * $valor2;
        echo "O valor da multiplicacao dos numeros $valor1 e $valor2 é $multiplicacao <br>";
        
        //divisão
        $divisao = $valor1 / $valor2;
        echo "O valor da divisao dos numeros $valor1 e $valor2 é $divisao <br>";
        
        //modulo
        $modulo = $valor1 % $valor2;
        echo "O valor do modulo dos numeros $valor1 e $valor2 é $modulo<br>";
        
        //exponenciacao
        $exponenciacao = $valor1 ** $valor2;
        echo "O valor da exponenciacao dos numeros $valor1 e $valor2 é $exponenciacao<br>";
        
        //media
        $media = (10 + 4) / 2;
        echo "A média é $media <br><br>";
        
        
        //valor absoluto
        $valorabsoluto = -6;
        echo "O valor absoluto de $valorabsoluto é " . abs($valorabsoluto);
        
        //potenciacao
        $valor1 = 4;
        $valor2 = 3;
        $potenciacao = pow($valor1,$valor2);
        echo "A potencia de $valor1 <sup>$valor2</sup> é $potenciacao" . '<br>';
        
        //raiz quadrada
        $valor = 4;
        $raiz = sqrt($valor);
        echo "O valor da raiz quadrada do numero $valor é $raiz <br>";
        
        //round
        $valor = 4.6;
        echo "O arrendondamento de $valor é" .  round($valor). '<br>';
        
        //intval
        $valor = 4.4;
        echo "O valor inteiro de $valor é " . intval($valor). '<br>';
        
        //number format
        $valor = 4;
        echo "R$"  . number_format($valor,2, ",",".");
        
        
        
        ?>
    </body>
</html>
