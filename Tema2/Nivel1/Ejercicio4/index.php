<?php
/* - Exercici 4
Fes un programa que implementi una funció on es compti fins a un nombre determinat. Si no s’inclou un nombre determinat, el nombre haurà de tenir un valor per defecte igual a 10. A més, aquesta funció ha de tenir un segon paràmetre que indiqui de quant a quant es compta(D'1 en 1, de 2 en 2…). El compte s’ha de mostrar per pantalla pas per pas. */


function contarHasta($hasta = 10, $rango = 1)
{
  for ($i = 0; $i < $hasta; $i += $rango) {
    echo "$i + $rango = " . ($i + $rango) . '<br>';
  }
}

contarHasta();
