<?php
    $nota1 = 10;
    $nota2 = 500;
    $nota3 = 100;
    $nota4 = 50;

    $media =($nota1+$nota2+$nota3+$nota4)/4;
    
    if  ($media >= 70){
       echo "Aprovado";
    }
    else if ($media >=50 && $media <70){
        echo "Recuperação";
    }

    else {
        echo "Reprovado";
    }    
    ?>