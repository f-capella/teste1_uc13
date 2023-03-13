<?php
    $salario = 1500;
    
    if ($salario <= 1500){
        $aumento = $salario *0.15;
        $novo_salario = $salario + $aumento;

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
        echo "Novo Salario: <b>R$ ".number_format($novo_salario, 2, ',', '.')."</br>";
        ?>
    </body>
    </html>