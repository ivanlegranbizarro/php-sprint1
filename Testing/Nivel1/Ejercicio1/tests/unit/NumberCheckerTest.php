<?php

declare(strict_types=1);

use Ejercicio1\NumberChecker;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{
  #[Test]
  public function probar_pares()
  {
    $prueba = new NumberChecker(2);
    $this->assertTrue($prueba->isEven());
  }

  #[Test]
  public function probar_impares()
  {
    $prueba = new NumberChecker(3);
    $this->assertFalse($prueba->isEven());
  }

  #[Test]
  public function probar_si_es_positivo()
  {
    $prueba = new NumberChecker(2);
    $this->assertTrue($prueba->isPositive());
  }

  #[Test]
  public function probar_si_es_negativo()
  {
    $prueba = new NumberChecker(-5);
    $this->assertFalse($prueba->isPositive());
  }
}
