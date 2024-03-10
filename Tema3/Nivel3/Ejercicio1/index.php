<?php

declare(strict_types=1);
/* - Exercici 1
Donat un array d’enters, fes un programa que:

Retorni cada valor de l’array elevat al cub fent servir la funció array_map(). */

$array_enters = [1, 2, 3, 4, 5, 6, 7];

function inspeccionarArray(array $array): void
{
  echo '<pre>';
  echo var_dump($array);
  echo '</pre>';
}

function elevarAlCubo(int $valor): int
{
  return $valor ** 3;
}


$array_cub = array_map('elevarAlCubo', $array_enters);

inspeccionarArray($array_cub);
