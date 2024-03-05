<?php 

function precioLlamada($min){

    if ($min < 3){
        $coste = 10;
    } else {
        $coste = 10 + (($min - 3) * 5);
    }
    return $coste;
}
echo precioLlamada(5);
?>