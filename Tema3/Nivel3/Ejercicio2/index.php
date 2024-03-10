<?php

declare(strict_types=1);

/* - Exercici 2
Donat un array d’strings, fes un programa que:

Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter(). */

function inspeccionarArray(array $array): void
{
  echo '<pre>';
  echo var_dump($array);
  echo '</pre>';
}

function retornaPares(string $cadena): bool
{
  return strlen($cadena) % 2 == 0;
}

$array_strings = ['Ivan', 'Gemma', 'Eva', 'Mari'];

$array_con_pares = array_filter($array_strings, 'retornaPares');

inspeccionarArray($array_con_pares);
