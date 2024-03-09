<?php
/* - Exercici 1
Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays. */

declare(strict_types=1);

function inspeccionarArray(array $array): void
{
  echo '<pre>';
  echo var_dump($array);
  echo '</pre>';
}

$array1 = [19, 17, 5.2, 5.1];
$array2 = [19, 16, 5.1, 5.3];

inspeccionarArray(array_intersect($array1, $array2));

inspeccionarArray(array_merge($array1, $array2));
