<?php

    $array1 = [10, 250, 250];
    
    $array1[] = 100;
    $array1[] = 500;
    $array1[] = 800;

    $ultima_posicao = sizeof($array1) -1;
    echo "Ultima posicao:" .$ultima_posicao;
    echo "<br>";

    echo "Elemento posicao 1:" .$array1[$ultima_posicao];
    echo "<br>";
    echo "Elemento posicao 1:" .$array1[ sizeof($array1)-1 ];

    echo "<pre>";
    print_r($array1);
    echo "</pre>";


    ?>





    

    
