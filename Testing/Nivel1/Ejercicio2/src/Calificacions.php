<?php

namespace Ejercicio2;

declare(strict_types=1);


class Calificacions
{
  public function __construct(public int $nota)
  {
  }

  function verificarGrado()
  {
    return match (true) {
      $this->nota >= 60 => 'Primera Divisió',
      $this->nota >= 45 => 'Segona Divisió',
      $this->nota >= 33 => 'Tercera Divisió',
      $this->nota < 33 => 'Reprova',
      default => 'Nota incorrecta. Siusplau, introduïu una nota entre 0 i 100',
    };
  }
}
