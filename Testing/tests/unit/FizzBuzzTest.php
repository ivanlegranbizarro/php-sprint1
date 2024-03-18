<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;
use Src\FizzBuzz;

final class FizzBuzzTest extends TestCase
{

  public static function posibles_numeros(): array
  {
    return [
      [1, '1'],
      [3, 'Fizz'],
      [5, 'Buzz'],
      [15, 'FizzBuzz'],
    ];
  }
  /**
   * Devuelve Fizz si el número es divisible entre 3
   * Devuelve Buzz si el número es divisible entre 5
   * Devuelve FizzBuzz si el número es divisible entre 3 y 5
   */
  #[Test]
  #[TestDox('Prueba de la función Fizz Buzz')]
  #[DataProvider('posibles_numeros')]
  public function fizz_buzz(int $numberToTest, string $expected): void
  {
    //Setup
    $fb = new FizzBuzz();
    //Acción
    $actual = $fb->generateOutPut($numberToTest);
    //Comprobació
    $this->assertEquals($expected, $actual);
  }
}
