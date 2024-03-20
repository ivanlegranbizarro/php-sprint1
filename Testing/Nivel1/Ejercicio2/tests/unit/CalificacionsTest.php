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
  public function si_la_nota_esta_entre_33_i_45_tercera_divisió(): void
  {
    $calificacio = new Calificacions(33);
    $resultat = $calificacio->verificarGrado();
    $this->assertEquals($resultat, 'Tercera Divisió');
  }

  #[Test]
  public function si_la_nota_esta_entre_45_i_60_segona_divisió(): void
  {
    $calificacio = new Calificacions(46);
    $resultat = $calificacio->verificarGrado();
    $this->assertEquals($resultat, 'Segona Divisió');
  }

  #[Test]
  public function si_la_nota_es_superior_a_60_primera_divisió(): void
  {
    $calificacio = new Calificacions(60);
    $resultat = $calificacio->verificarGrado();
    $this->assertEquals($resultat, 'Primera Divisió');
  }
}
