<?php

declare(strict_types=1);

/* - Exercici 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un. */

$numeros = [1, 2, 3, 4, 5];

foreach ($numeros as $numero) {
  echo $numero . '<br>';
}

/* - Exercici 2
$X = array (10, 20, 30, 40, 50,60);
Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs). Mostra per última vegada la mida de l’array. */

$X = array(10, 20, 30, 40, 50, 60);

echo count($X) . '<br>';

array_pop($X);

array_values($X);

echo count($X) . '<br>';

/* - Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:

Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”. */

$paraules = ['hola', 'Caracola'];

echo 'Detectar carácter: ' . '<br>';
function detectarCaracter(string $caracter, array $paraules): bool
{
  $paraules_que_contenen = [];
  foreach ($paraules as $paraula) {
    if (strpos($paraula, $caracter) !== false) {
      $paraules_que_contenen[] = $paraula;
    }
  }
  if (count($paraules) == count($paraules_que_contenen)) {
    return true;
  }
  return false;
}


echo detectarCaracter('a', $paraules) . '<br>';
echo detectarCaracter('h', $paraules) . '<br>';



/* - Exercici 4
Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

nom
edat
email
menjar favorit */

$ivan = [
  'nom' => 'Iván',
  'edat' => 38,
  'email' => 'ivanlegranbizarro@gmail.com',
  'menjar favorit' => 'espaguetis'
];
