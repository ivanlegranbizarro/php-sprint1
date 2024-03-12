<?php
/* Imagina que has de presentar el catàleg de pel·lícules d'una cadena de cinemes. Cada cinema té un nom, una població a on pertany, i un llistat de pel·lícules. Cada pel·lícula té un nom, una duració, i un director/a.

Es tracta de fer un programa que ens permeti enregistrar aquesta informació per a després:

Per a cada cinema, mostrar les dades de cada pel·lícula.
Per a cada cinema, mostrar la pel·lícula amb major duració.
Implementa una funció que cerqui pel nom del director/a pel·lícules en diferents cinemes. No cal repetir pel·lícules.
A més, pots aprofitar aquest exercici per treballar una bona presentació amb HTML+CSS que doni suport a la lògica. */

declare(strict_types=1);

class Peli
{
  public function __construct(private string $nombre, private int|float $duracion, private string $director)
  {
  }
}

class Cine
{
  public function __construct(private string $nombre, private string $poblacion, private array $pelis = [])
  {
  }

  public function renombrarCine(string $nombre): void
  {
    $this->nombre = $nombre;
  }

  public function agregarPeli(Peli $peli): void
  {
    $this->pelis[] = $peli;
  }

  public function mostrarDatosPelis(): void
  {
    foreach ($this->pelis as $peli) {
      echo $peli->nombre . '<br>';
      echo $peli->duracion . '<br>';
      echo $peli->director . '<br>';
    }
  }

  public function mayorDuracion(): void
  {
    $mayorDuracion = 0;
    foreach ($this->pelis as $peli) {
      if ($peli->duracion > $mayorDuracion) {
        $mayorDuracion = $peli->duracion;
        $nombrePeliMayorDuracion = $peli->nombre;
      }
    }
    echo "La película con mayor duración es $nombrePeliMayorDuracion con $mayorDuracion minutos" . '<br>';
  }
}

function buscarPelis(Cine ...$cines, string $director): string
{
  foreach ($cines as $cine) {
    foreach ($cine->pelis as $peli) {
      if ($peli->director == $director) {
        return 'La peli ' . $peli->nombre . ' se proyecta en el cine ' . $cine->nombre;
      }
    }
  }
  return 'La peli no existe o no se proyecta en ninguno de nuestros cines';
}
