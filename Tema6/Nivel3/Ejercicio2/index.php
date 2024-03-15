<?php
/* - Exercici 2
Implementa una classe Car que tingui informació sobre un cotxe (marca, matrícula, tipus de combustible, velocitat màxima). A més, implementa un Trait anomenat Turbo que tingui un mètode boost() que mostri un missatge “S’ha iniciat el turbo”. Usa aquest mètode des de la classe Car. */

require_once '../traits/Turbo.php';


enum Combustible: string
{
  case DIESEL = 'Diesel';
  case GASOLINA = 'Gasolina';
  case ELECTRICO = 'Eléctrico';
  case GAS = 'Gas';
}

class Car
{
  use Turbo;

  public function __construct(private string $marca, private string $matricula, private Combustible $combustible, private int $velocitat)
  {
  }
}

$coche1 = new Car('Toyota', 'ABC123', Combustible::DIESEL, 200);

$coche1->boost();
