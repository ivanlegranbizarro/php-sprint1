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
  public function __construct(public string $nombre, public int|float $duracion, public string $director)
  {
  }
}

class Cine
{
  public function __construct(public string $nombre, public string $poblacion, public array $pelis = [])
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
      echo "<h1>$peli->nombre</h1>";
      echo "<p>Duracion: $peli->duracion</p>";
      echo "<p>Director: $peli->director</p>";
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
    echo "La película con mayor duración es $nombrePeliMayorDuracion con $mayorDuracion minutos de metraje" . '<br>';
  }
}

function buscarPelis(string $director, Cine ...$cines): void
{
  foreach ($cines as $cine) {
    foreach ($cine->pelis as $peli) {
      if ($peli->director == $director) {
        echo 'La peli ' . $peli->nombre . ' se proyecta en el cine ' . $cine->nombre . '<br>';
        exit;
      }
    }
  }
  echo 'La peli no existe o no se proyecta en ninguno de nuestros cines <br>';
}


$peli1 = new Peli('El señor de los anillos', 180, 'Peter Jackson');
$peli2 = new Peli('Terminator 2', 140, 'James Cameron');

$cine1 = new Cine('Cine Capri', 'El Prat de Llobregat', [$peli1, $peli2]);

$cine1->mostrarDatosPelis();
$cine1->mayorDuracion();


buscarPelis('Peter Jackson', $cine1);
