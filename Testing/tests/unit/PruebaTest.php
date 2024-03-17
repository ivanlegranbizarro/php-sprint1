<?php

declare(strict_types=1);

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\TestCase;

final class PruebaTest extends TestCase
{
  #[Test]
  #[TestDox('Prueba para verificar el funcionamiento de phpunit')]
  public function testPrueba(): void
  {
    $this->assertTrue(true);
  }
}
