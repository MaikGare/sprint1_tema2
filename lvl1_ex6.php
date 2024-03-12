<?php 

function isBitten() : bool{
    $bocao = rand(1,100);
    if ($bocao >= 1 && $bocao <= 50){
        $resposta = true;
    } else {
        $resposta = false;
    }
    return $resposta;
}

if(isBitten()){
    echo "Charlie me ha mordido!";
}else {
    echo "Hoy Charlie ha ido a terapia.";
}
?>