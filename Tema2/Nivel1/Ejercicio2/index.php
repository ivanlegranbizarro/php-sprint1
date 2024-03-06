<?php
/* - Exercici 2
Imprimeix per pantalla "Hello, World!" utilitzant una variable. En acabat:

Transforma tots els caràcters de l'string a majúscules i imprimeix en pantalla.
Imprimeix per pantalla la mida (longitud) de la variable.
Imprimeix per pantalla l'string en ordre invers de caràcters.
Crea una nova variable amb el contingut “Aquest és el curs de PHP” i imprimeix per pantalla la concatenació de tots dos strings.
*/

$saludoEntusiasta = 'Hello, World!';

echo strtoupper($saludoEntusiasta) . '<br>';

echo 'Longitud de la variable: ' . strlen($saludoEntusiasta) . '<br>';

echo strrev($saludoEntusiasta) . '<br>';

$cursoPhp = 'Aquest és el curs de PHP';

echo $saludoEntusiasta . ' ' . $cursoPhp;
