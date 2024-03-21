<?php
/* Crazy Train:
Un teclat de 9 digits.
10 digits a entrar.
L'objectiu per activar el fre és que, la suma dels 10 digits que introduim sumi tant com el nombre reflexat a la foto(67).
Cada cop que introduim un nombre, ens mostrar la suma parcial. */

//TODO:Estar pendiente del refactor para no repetir bucles como un noob

declare(strict_types=1);

function desactivarFreno(): void
{
  $acumulat = 0;
  for ($i = 1; $i <= 10; $i++) {
    $digit = readline('Introduce el digito ' . $i . ':');
    $intDigit = intval($digit);
    $acumulat += $intDigit;
    echo $acumulat . '<br>';
  }
  if ($acumulat == 67) {
    echo 'Freno activado. Ahora procederás a intentar activar el segundo freno: <br>';
  } else {
    echo 'Has muerto. Y ni siquiera ha sido por el ataque de un zombie. Tu gobierno debería invertir más en seguridad ferroviaria.';
    exit;
  }
  desactivarFreno2();
}

function desactivarFreno2(int $codigoDesactivacion = 81): void
{
  $acumulat = 0;
  for ($i = 1; $i < 10; $i++) {
    $digit = readline('Introduce el digito ' . $i . ':');
    $intDigit = intval($digit);
    $acumulat += $intDigit;
  }

  if ($acumulat == $codigoDesactivacion) {
    echo 'Freno activado. Estás a salvo';
  }
  echo 'Has muerto. Y ni siquiera ha sido por el ataque de un zombie. Ha sido porque el gobierno de este estado no invierte lo suficiente en seguridad ferrovial.';
}


desactivarFreno();
