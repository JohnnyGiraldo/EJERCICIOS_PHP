<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$suma = 0;
$cuadrado = 0;
$cubo = 0;
$contador = 0;


for ($i = 2; $i <= 29; $i += 2) {
    echo $i . "<br>";
    $suma += $i; 
    $cuadrado = pow($suma, 2); 
    $cubo = pow($suma, 3); 
    $contador++; 
}


$promedio = $suma / $contador;

echo "<br>";
echo "La sumatoria de los números pares es: " . $suma . "<br>";
echo "El cuadrado de la sumatoria es: " . $cuadrado . "<br>";
echo "El cubo de la sumatoria es: " . $cubo . "<br>";
echo "El promedio de los números pares es: " . $promedio . "<br>";

?>
</body>
</html>