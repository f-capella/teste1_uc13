<?php

$ano = 2005;

    if ( ($ano % 4 == 0 && $ano%100 != 0 ) || ($ano % 4 == 0 && $ano % 100 == 0 && $ano % 400 == 0) ) {     
        echo "Ano bissexto";
        }

        else {
            echo "Não é bissexto";
        }
    
    

?>    