<?php
/* - Exercici 1
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea. */

declare(strict_types=1);

require_once '../../classes/Shape.php';

class Cercle extends Shape
{
  public function __construct(public int|float $radi, public float $pi = 3.14159)
  {
  }

  public function calculArea(): int|float
  {
    return $this->pi * $this->radi ** 2;
  }
}


$circulo1 = new Cercle(3.2);

echo $circulo1->calculArea() . '<br>';

$circulo2 = new Cercle(2.5);

echo $circulo2->calculArea() . '<br>';
