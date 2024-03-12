<?php 

$X = 5;
$Y = 8;

$M = 3.1416;
$N = 1.6180;

echo "El valor de X es: " . $X . ", y el valor de Y es: " . $Y . "<br>";

echo "El resultado de la suma es: " . $X + $Y . "<br>";

echo "El resultado de la resta es: " . $X - $Y . "<br>";

echo "El producto de la multiplicación es: " . $X * $Y . "<br>";

echo "El módulo de la división es: " . $X % $Y . "<br>";

echo "<br>";

echo "El valor de M es: " . $M . ", y el valor de N es: " . $N . "<br>";

echo "El resultado de la suma es: " . $M + $N . "<br>";

echo "El resultado de la resta es: " . $M - $N . "<br>";

echo "El producto de la multiplicación es: " . $M * $N . "<br>";

echo "El módulo de la división es: " . $M % $N . "<br>";

echo "<br>"; 

echo "El doble de X es: " . $X * 2 . ", el doble de Y es: " . $Y * 2 . ", el de M es: " . $M * 2 . " y el de N es: " . $N * 2 . "<br>";

echo "La suma de todos los valores es: " . $X + $Y + $M + $N . "<br>";

echo "El producto de todos los valores es: " . $X * $Y * $M * $N . "<br>";

function Calcular(int $num1, int $num2, string $operador) : float{

    $resultado = "";

switch($operador){
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        $resultado = $num1 / $num2;
        break;
    default:
        echo "Operador incorrecto.";
        break;
}

return $resultado;

}

//echo calculadora(5,6,'+');
?>