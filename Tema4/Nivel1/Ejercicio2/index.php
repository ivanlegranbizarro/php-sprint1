<?php
/* - Exercici 2
Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area(). */

declare(strict_types=1);

class Shape
{
  public function __construct(protected int|float $ample, protected int|float $alt)
  {
  }
}

class Triangle extends Shape
{
  public function calculArea(): int|float
  {
    return ($this->ample * $this->alt) / 2;
  }
}

class Rectangle extends Shape
{
  public function calculArea(): int|float
  {
    return $this->ample * $this->alt;
  }
}


$triangle1 = new Triangle($ample = 5, $alt = 3.5);
$rectangle1 = new Rectangle($ample = 5, $alt = 3.5);

echo $triangle1->calculArea() . '<br>';

echo $rectangle1->calculArea() . '<br>';
