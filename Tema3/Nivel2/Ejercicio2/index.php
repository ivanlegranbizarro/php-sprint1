<?php

/* - Exercici 2
Crea un programa que llisti les notes dels/les alumnes d’una classe. Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera. */

declare(strict_types=1);


function inspeccionarArray(array $array): void
{
  echo '<pre>';
  echo var_dump($array);
  echo '</pre>';
}

function listarNotasAlumnos(int $numeroAlumnos): array
{
  $alumnos = [];
  do {
    $nombreAlumno = readline('Nombre del alumno: ');
    for ($i = 1; $i <= 5; $i++) {
      $nota = readline('Introduce la nota ' . $i . ':');
      $alumnos[$nombreAlumno][] = $nota;
    }
    $numeroAlumnos--;
  } while ($numeroAlumnos > 0);

  // inspeccionarArray($alumnos);
  return $alumnos;
}


function mediasDelAlumnoyDeLaClase(array $alumnos): array
{
  $notasAlumnos = [];
  foreach ($alumnos as $alumno => $notas) {
    $notasAlumnos[$alumno] = array_sum($notas) / count($notas);
  }

  $notasClase = array_sum($notasAlumnos) / count($notasAlumnos);

  return [$notasAlumnos, $notasClase];
}

// listarNotasAlumnos(2);

// print_r(listarNotasAlumnos(2));

print_r(mediasDelAlumnoyDeLaClase(listarNotasAlumnos(2)));
