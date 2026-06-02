<?php

// Array con numeros pares indexado (Punto 1)
$Numerospares = [
    "2",
    "4",
    "6",
    "8",
    "10",
    "12",
    "14",
    "16",
    "18",
    "20",
];

echo "Punto 2"
?>
<br>
<?php
// Array compactado
$punto2 = ["Pedro","Ana","34","1"];
print_r ($punto2);

// Array asociativo (Punto 3)
$valores = [
    'Nombre'=> "Pedro",
    'Apellido'=> "Torres",
    'Dirección'=> "Av. Mayor 3703",
    'Telefono'=> 1122334455,
];
?>
<br>
<?php

echo "Punto 4"
?>
<br>
<?php
// Array indexado 
$ciudades = ["Madrid","Barcelona","Londres","Nueva york","Los Angeles","Chicago"];
print $ciudades [0];
foreach ($ciudades as $valor) {
    print "<p>$valor</p>\n";
}

echo "Punto 5"
?>
<br>
<?php
// Array asociativo
$ciudades = [
    'MD' => "Madrid",
    'BCL' => "Barcelona",
    'LD' => "Londres",
    'NY' => "Nueva york",
    'LA' => "Los Angeles",
    'CCG' => "Chicago",
];
echo "La capital de España es $ciudades[MD]";
?>
