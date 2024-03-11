<?php
/* - Exercici 1
Crea una classe Employee, defineix com a atributs el seu nom i sou. Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos). */

declare(strict_types=1);

class Employee
{
  public function __construct(private string $nom, private int $sou)
  {
  }

  public function print_employee(): string
  {
    return $this->nom . ' ' . ($this->sou > 6000 ? 'paga impostos' : 'no paga impostos');
  }
}

$empleado1 = new Employee($nom = 'Iván', $sou = 5999);

echo $empleado1->print_employee();
