<?php
/*- Exercici 1
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims. */

function totalPagar($durada)
{
  $cost = 0;
  if ($durada <= 3) {
    return $cost = 10;
  }
  $cost = 10 + ($durada - 3) * 5;

  return $cost;
}


echo totalPagar(4);
