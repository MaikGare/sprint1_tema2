<?php 

function calcularChoco(int $numChoco) : float{
    $chocoPrice = 1;
    return $numChoco * $chocoPrice;
}
function calcularChicle(int $numChile) : float{
    $chiclePrice = 0.5;
    return $numChile * $chiclePrice;
}
function calcularCandy( int $numCandy) : float{
    $candyPrice = 1.5;
    return $numCandy * $candyPrice;
}
function calcularTotalFactura(int $numChoco, int $numChile, int $numCandy){
    $total = calcularChoco($numChoco) + calcularChicle($numChile) + calcularCandy($numCandy);
    return $total;
}

echo "El importe total de tu compra es de: " . calcularTotalFactura(5,7,11) . " euros";
?>