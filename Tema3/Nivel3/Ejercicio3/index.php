<?php

declare(strict_types=1);

/* - Exercici 3
Donat un array d’enters, fes un programa que ens retorni la suma dels enters de l’array que siguin primers fent servir la funció array_reduce(). */


$array_enteros = [1, 2, 3, 4, 5, 6, 7];

function esPrimo(int $valor): bool
{
  if ($valor <= 1) {
    return false;
  }

  for ($i = 2; $i < sqrt($valor); $i++) {
    if ($valor % $i == 0) {
      return false;
    }
  }

  return true;
}

function sumarPrimos(int $acumulador, int $valor): int
{
  if (esPrimo($valor)) {
    return $acumulador + $valor;
  }

  return $acumulador;
}

echo $suma_primos = array_reduce($array_enteros, 'sumarPrimos', 0);
