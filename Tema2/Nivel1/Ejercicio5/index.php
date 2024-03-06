<?php
/* - Exercici 5
Escriure una funció per verificar el grau d'un/a estudiant d'acord amb la nota.

Condicions:

Si la nota és 60% o més, el grau hauria de ser Primera Divisió.
Si la nota està entre 45% i 59%, el grau hauria de ser Segona Divisió.
Si la nota està entre 33% to 44%, el grau hauria de ser Tercera Divisió.
Si la nota és menor a 33%, l'estudiant reprovarà. */

function verificarGrado($nota)
{
  return match (true) {
    $nota >= 60 => 'Primera Divisió',
    $nota >= 45 => 'Segona Divisió',
    $nota >= 33 => 'Tercera Divisió',
    $nota < 33 => 'Reprova',
    default => 'Nota incorrecta. Siusplau, introduïu una nota entre 0 i 100',
  };
}

echo verificarGrado(75);
