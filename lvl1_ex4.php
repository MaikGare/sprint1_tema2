<?php 

function contador($tope,$incremento){

    for ($i=0; $i <= $tope; $i += $incremento) { 
        echo $i . "<br>";
    }

}
contador(100,5);
?>