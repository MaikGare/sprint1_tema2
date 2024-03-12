<?php 

function precioLlamada(int $min) : int{

    if ($min > 3){
        $coste = ($min - 1) * 5;
    } else {
        $coste = 10;
    }
    return $coste;
}
echo "El precio de la llamada es de " . precioLlamada(21) / 100 . " euros.";
?>