<?php
/* - Exercici 1
Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea. */

declare(strict_types=1);

require_once '../../interfaces/AreaCalculation.php';

class Cercle implements AreaCalculation
{
  const PI = pi();
  public function __construct(protected float $radio)
  {
  }

  public function calculArea(): float
  {
    return self::PI * pow($this->radio, 2);
  }
}

$circulo1 = new Cercle(3.2);

echo $circulo1->calculArea() . '<br>';

$circulo2 = new Cercle(2.5);

echo $circulo2->calculArea() . '<br>';
