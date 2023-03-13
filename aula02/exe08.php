<?php

$idade = 19;
    $valor = 50;

    if ($idade >= 11 && $idade <= 65){
        $valor = $valor;
      
            
        echo "O valor do ingresso é:", $valor;

    }

?>    

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            echo "Sua idade é: ".$idade;
            echo "Valor do ingresso: ".$valor;
            
        
    </body>
    </html>