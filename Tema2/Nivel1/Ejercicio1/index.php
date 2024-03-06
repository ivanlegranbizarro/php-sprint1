<?php

/* - Exercici 1
Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla. */

$miEdad = 38;

echo $miEdad . '<br>';

$miAltura = 1.78;

echo $miAltura . '<br>';

$miNombre = 'Iván';

echo $miNombre . '<br>';

$soyHermoso = true;

echo $soyHermoso . '<br>';

// Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla.
const MY_NAME = 'Iván Legrán';

echo '<h1>' . MY_NAME . '</h1>'. '<br>';

// O bien esto, no sé a qué se refiere con formato título xD:
echo ucwords(MY_NAME);
