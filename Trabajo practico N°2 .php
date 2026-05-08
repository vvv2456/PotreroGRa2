<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Estructuras de control</h1>
    <ul>
        <li>Trabajo de Damian Cardozo</li>
    </ul>
        <p>punto 1.</p>
    <?php
    $n = "31";
    echo "$n es mayor que 0, por eso $n es numero positivo"
    ?>

    <br>
        <p>punto 2.</p>
    <?php
    $n = 6;
    if ($n >1 and $n <10); 
    {
        echo "$n es mayor que 1";
    };
    ?>
    <br>
    <?php
    {
        echo "$n es menor que 10";
    }
    ?>

    <br>
        <p>punto 3.</p>
    <?php
    $n = 15;
    if ($n >10 or $n <2);
    {
        echo "$n es mayor que 10 o menor que 2";
    }
    ?>

    <br>
        <p>punto 4.</p>
    <?php
    $numero1 = 20;
    $numero2 = 12;
    if ($numero1 > $numero2) {
        echo "$numero1 > $numero2";
    }
    ?>
    <br>
    <?php
    $resultado1 = $numero1 + $numero2;
    echo "$numero1 + $numero2 = $resultado1";
    ?>
    <br>
    <?php
    $resultado2 = $numero1 - $numero2;
    echo "$numero1 - $numero2 = $resultado2";
    ?>
    <br>
    <?php
    $numero3 = 7;
    $numero4 = 35;
    if ($numero4 > $numero3) {
        echo "$numero4 > $numero3";
    }
    ?>
    <br>
    <?php
    $resultado3 = $numero4 * $numero3;
    echo "$numero4 * $numero3 = $resultado3";
    ?>
    <br>
    <?php
    $resultado4 = $numero4 / $numero3;
    echo "$numero4 / $numero3 = $resultado4";
    ?>
    <br>
    <?php
    $numero1 = 4;
    $numero2 = 4;
    if ($numero1 == $numero2) {
        echo "$numero1 = $numero2  los numeros ingresados son iguales";
    }
    ?>
</body>
</html>