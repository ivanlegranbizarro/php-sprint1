<?php

declare(strict_types=1);

use Ejercicio2\Calificacions;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class CalificacionsTest extends TestCase
{

  #[Test]
  public function si_la_nota_es_inferior_a_33_reprova(): void
  {
    $calificacio = new Calificacions(32);
    $resultat = $calificacio->verificarGrado();
    $this->assertEquals($resultat, 'Reprova');
  }


  #[Test]
  public function si_la_nota_esta_entre_33_i_44_tercera_divisio(): void
  {
    $calificacio = new Calificacions(35);
    $resultat = $calificacio->verificarGrado();
    $this->assertEquals($resultat, 'Tercera Divisió');
  }
}
