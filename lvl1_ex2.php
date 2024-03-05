<?php 

$frase = "Hello, World!";

echo $frase . "<br>";

$mayus = strtoupper($frase);

echo $mayus . "<br>";

$long = strlen($frase);

echo $long . "<br>";

$rev = strrev($frase);

echo $rev . "<br>";

$curs = " Aquest és el curs de PHP";

echo $frase . $curs;
?>