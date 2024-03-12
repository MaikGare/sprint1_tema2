<?php 

function calcularHeratostenes(int $numUser){
    
  

    for ($i = 2; $i <= $numUser; $i++) { 
        $numPrimo = true;
        for ($j=2; $j * $j <= $i; $j++) { 
            if ($i % $j == 0) {
                $numPrimo = false;
            }   
        }
        if ($numPrimo){
            echo $i . " - ";
        }
    }
}
calcularHeratostenes(20);
?>