<?php 

function verificarGrado($nota){

    if ($nota > 60) {
        echo "El grado es de primera división.";
    } elseif ($nota <= 59 && $nota >= 45) {
        echo "El grado es de segunda división.";
    } elseif ($nota <= 44 && $nota >= 33) {
        echo "El grado es de tercera división.";
    } else{
        echo "El estudiante está reprobado.";
    }
}

//echo verificarGrado(50);
?>