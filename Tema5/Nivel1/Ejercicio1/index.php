<?php
/* - Exercici 1
Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom, ara bé, no és el mateix el so de la “parla” d’un gos, que el d’un gat. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments. Bàsicament, volem un mètode makeSound() que mostri un missatge diferent si es tracta d’un gos (per exemple,“Bup, bup!”) o un gat (per exemple “Meu!”).
?> */

declare(strict_types=1);

require_once '../../classes/Animal.php';


class Gos extends Animal
{

  public function makeSound(): string
  {
    return 'Bup, bup!';
  }
}


class Gat extends Animal
{
  public function makeSound(): string
  {
    return 'Meu!';
  }
}


$gos1 = new Gos('Spike');
echo $gos1->makeSound();
