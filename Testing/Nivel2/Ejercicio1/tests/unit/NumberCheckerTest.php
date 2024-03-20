<?php

declare(strict_types=1);

use Ejercicio1\NumberChecker;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class NumberCheckerTest extends TestCase
{
  public static function numeros_a_probar_pares_impares(): array
  {
    return [
      [2, true],
      [3, false]
    ];
  }

  public static function numeros_a_probar_positivos_negativos(): array
  {
    return [
      [2, true],
      [-5, false]
    ];
  }


  #[Test]
  #[DataProvider('numeros_a_probar_pares_impares')]
  public function probar_pares_impares(int $numero, bool $esPar): void
  {
    $prueba = new NumberChecker($numero);
    $this->assertSame($esPar, $prueba->isEven());
  }

  #[Test]
  #[DataProvider('numeros_a_probar_positivos_negativos')]
  public function probar_si_es_positivo($numero, $esPositivo): void
  {
    $prueba = new NumberChecker($numero);
    $this->assertSame($esPositivo, $prueba->isPositive());
  }
}
