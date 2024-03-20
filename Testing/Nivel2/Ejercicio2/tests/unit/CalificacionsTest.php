<?php

declare(strict_types=1);

use Ejercicio2\Calificacions;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class CalificacionsTest extends TestCase
{

  public static function notas_a_probar(): array
  {
    return [
      [32, 'Reprova'],
      [33, 'Tercera Divisió'],
      [46, 'Segona Divisió'],
      [60, 'Primera Divisió']
    ];
  }

  #[Test]
  #[DataProvider('notas_a_probar')]
  public function calificacions_per_nota(int $nota, string $resultat): void
  {
    $calificacio = new Calificacions($nota);
    $this->assertSame($resultat, $calificacio->verificarGrado());
  }
}
