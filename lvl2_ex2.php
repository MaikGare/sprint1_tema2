<?php 

function subChoco($numChoco){
    return $numChoco * 1;
}
function subChicle($numChile){
    return $numChile * 0.5;
}
function subCandy($numCandy){
    return $numCandy * 1.5;
}
function totalFactura($numChoco,$numChile,$numCandy){

    $total = subChoco($numChoco) + subChicle($numChile) + subCandy($numCandy);

    return $total;
}

echo totalFactura(5,6,4);
?>