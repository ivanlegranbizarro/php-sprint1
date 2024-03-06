<?php
/*
- Exercici 3
a) Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un valor. A continuació, mostra per pantalla per a X i Y:

El valor de cada variable.
La suma.
La resta.
El producte.
El mòdul.
Per N i M realitzaràs el mateix.

Per a totes les variables (X, Y, N, M):

El doble de cada variable.
La suma de totes les variables.
El producte de totes les variables.
b) Crea una funció Calculadora que entri dos nombres per paràmetre, i en un tercer paràmetre et permeti fer la suma, la resta, la multiplicació o la divisió dels dos nombres.
*/

$x = 32;
$y = 38;



echo $x . '<br>';

echo $y . '<br>';

$suma = $x + $y;
$resta = $x - $y;
$producto = $x * $y;
$modulo = $x % $y;

echo "La suma de $x y $y es: $suma" . '<br>';
echo "La resta de $x y $y es: $resta" . '<br>';
echo "El producto de $x y $y es: $producto" . '<br>';
echo "El módulo de $x y $y es: $modulo" . '<br>';

$n = 1.62;
$m = 1.78;

echo $n . '<br>';
echo $m . '<br>';

$suma = $n + $m;
$resta = $n - $m;
$producto = $n * $m;
$modulo = $n % $m;

echo "La suma de $n y $m es: $suma" . '<br>';
echo "La resta de $n y $m es: $resta" . '<br>';
echo "El producto de $n y $m es: $producto" . '<br>';
echo "El módulo de $n y $m es: $modulo" . '<br>';

echo "El doble $x es: " . $x*2. . '<br>';
echo "El doble $y es: " . $y*2. . '<br>';
echo "El doble $n es: " . $n*2. . '<br>';
echo "El doble $m es: " . $m*2. . '<br>';
