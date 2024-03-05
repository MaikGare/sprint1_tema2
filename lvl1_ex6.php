<?php 

function isBitten(){
    $bocao = rand(1,100);
    if ($bocao >= 1 && $bocao <= 50){
        $resposta = true;
    } else {
        $resposta = false;
    }
    return $resposta;
}

echo isBitten();
?>