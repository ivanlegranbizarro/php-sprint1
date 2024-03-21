<?php
/* Kata 32 per l'especialitat fullstackPHP 21-3-24

L'explicació serà breu.

Fes un programa que, donat un nombre ens digui si és o no un nombre d'Armstrong.

Exemples:

Input

153
204
Output

És un nombre d'Armstrong!
No és un nombre d'Armstrong!
*/

declare(strict_types=1);
/**
 * Un número de Amstrong es un tipo de número natural que es igual a la suma de sus propios dígitos elevados a la potencia del número total de dígitos.
 */
function detectarNumAmstrong(int $numero): string
{

  $array_numeros = str_split((string)$numero);

  $acumulat = 0;
  foreach ($array_numeros as $num) {
    $acumulat += $num ** count($array_numeros);
    if ($acumulat == $numero) {
      return "És un nombre d'Armstrong!";
    }
  }

  return "No és un nombre d'Armstrong!";
}

echo detectarNumAmstrong(153);
