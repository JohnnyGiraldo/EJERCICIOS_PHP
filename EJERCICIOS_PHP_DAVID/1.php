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
for ($i = 1; $i <= 100; $i++) {
    $suma += $i;
}
echo "La suma de los 100 primeros números naturales es: $suma";
?>
</body>
</html>