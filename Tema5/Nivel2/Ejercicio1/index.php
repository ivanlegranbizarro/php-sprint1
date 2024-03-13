<?php
/* Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que heretin de Shape i que calculin respectivament l'àrea de la forma area(). */

declare(strict_types=1);

require_once 'Shape.php';

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
