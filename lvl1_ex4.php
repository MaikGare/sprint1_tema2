<?php 

function Incrementar(int $incremento, int $tope = 10) : void{

    for ($i=0; $i <= $tope; $i += $incremento) { 
        echo $i . "<br>";
    }

}
Incrementar(5);
?>