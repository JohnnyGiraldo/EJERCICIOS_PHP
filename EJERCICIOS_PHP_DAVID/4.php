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
echo "<table text-align:center; border=5>";
echo "<tr>";
echo "Tabla del 1";
echo "<br>";
for ($f = 1; $f <= 10; $f = $f + 1) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 2";
echo "<br>";
for ($f = 2; $f <= 20; $f = $f + 2) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 3";
echo "<br>";
for ($f = 3; $f <= 30; $f = $f + 3) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 4";
echo "<br>";
for ($f = 4; $f <= 40; $f = $f + 4) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 5";
echo "<br>";
for ($f = 5; $f <= 50; $f = $f + 5) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 6";
echo "<br>";
for ($f = 6; $f <= 60; $f = $f + 6) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 7";
echo "<br>";
for ($f = 7; $f <= 70; $f = $f + 7) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 8";
echo "<br>";
for ($f = 8; $f <= 80; $f = $f + 8) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 9";
echo "<br>";
for ($f = 9; $f <= 90; $f = $f + 9) {
    echo $f;
    echo "<br>";
}
echo "<br>";
echo "<br>";
echo "Tabla del 10";
echo "<br>";
for ($f = 10; $f <= 100; $f = $f + 10) {
    echo $f;
    echo "<br>";
}
echo "</tr>";
echo "</table>"
?>

<?php 
$multiplicando;
$multiplicador;

echo "<table text-align:center; border=5>";
echo "<tr>";
for ($tabla=1; $tabla<=10  ; $tabla++) { 
    echo "<td>Tabla del $tabla </td>";
}
echo "</tr>";
echo "<tr>";
for ($multiplicador=1; $multiplicador <=10 ; $multiplicador++) { 
    for ($multiplicando=01; $multiplicando <=10 ; $multiplicando++) { 
        echo "<td>$multiplicando X $multiplicador =";
        echo ($multiplicando *$multiplicador);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>