<?php 

function verificarGrado(int $nota) : void{

    if ($nota > 60) {
        echo "El grado es de primera división.";
    } elseif ( $nota >= 45) {
        echo "El grado es de segunda división.";
    } elseif ( $nota >= 33) {
        echo "El grado es de tercera división.";
    } else{
        echo "El estudiante está reprobado.";
    }
}

//echo verificarGrado(36);
?>