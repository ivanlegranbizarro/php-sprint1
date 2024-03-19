<?php

declare(strict_types=1);

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
}
