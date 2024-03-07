<?php
/*- Exercici 1
El sedàs d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. Basant-te en la informació de l'enllaç adjunt, implementa el sedàs d'Eratòstenes dins d'una funció, de tal forma que puguem invocar la funció per a un número concret.*/
function cribaEratostenes($num)
{
  $candidats = [];
  for ($i = 2; $i <= $num; $i++) {
    $candidats[] = $i;
  }
  $num_prim = $candidats[0];

  do {
    foreach ($candidats as $candidat) {
      if ($candidat % $num_prim == 0) {
        unset($candidats[array_search($candidat, $candidats)]);
      }
    }
  } while (pow($candidats[0], 2) < $num);



  return implode(', ', $candidats);
}

echo cribaEratostenes(20);
