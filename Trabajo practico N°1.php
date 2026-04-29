<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola mundo</h1>
        <p>2. </p>
    <?php
    $Primeruso = "Hola mundo";
    echo $Primeruso;
    ?>

    <br>
        <p>3. </p>
    <?php
    $empanadas = 15000;
    $pizza = 10000;
    $primera = $empanadas + $pizza;
    echo $primera;
    ?>
    <br>
    <?php
    $segunda = $empanadas - $pizza;
    echo $segunda;
    ?>
    <br>
    <?php
    $tercera = $empanadas * $pizza;
    echo $tercera;
    ?>
    <br>
    <?php
    $cuarta = $empanadas / $pizza;
    echo $cuarta;
    ?>

    <br>
        <p> 4. </p>
    <?php
    $celsius = 20;
    $fahrenheit = (20*9/5)+32;
    echo $fahrenheit;
    ?>

    <br>
        <p> 5.A </p>
    <?php
    $base = 18;
    $altura = 12;
    $perimetro1 = 2*($base + $altura);
    echo $perimetro1;
    ?>
    <br>
    <?php
    $area1 = $base * $altura;
    echo $area1;
    ?>
    <br>
        <p>5.B </p>
    <?php
    $radio = 30;
    $perimetro2 = (3.1416)*(30*30);
    echo $perimetro2;
    ?>
    <br>
    <?php
    $radio = 30;
    $area2 = 2*(3.1416)*(30);
    echo $area2;
    ?>
</body>
</html>