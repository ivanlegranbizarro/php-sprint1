<?php
/* - Exercici 1
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus. */

//TODO: Sobre el nivel 2:

/* Necesitaríamos algo para contar las tiradas totales.
Apenas separas la creación de los dados de su tirada. De hecho, no separas la tirada del muestreo de la cara que ha salido, que es parte del enunciado.
Respecto a como representas las caras del dado, bueno, puedes estar bien ese match!
Sobre el nivel 3:

La lógica es correcta, te recomiendo que separes la lógica en distintos ficheros.
Faltaría solo la parte gráfica. */

declare(strict_types=1);


class PockerDice
{
  public function __construct(private int $dau = 0)
  {
  }

  public function throw(): string
  {
    $this->dau = rand(1, 6);
    return match ($this->dau) {
      1 => 'As',
      2 => 'K',
      3 => 'Q',
      4 => 'J',
      5 => '7',
      6 => '8',
    };
  }
}

function tirarHastaCincoDados(int $numDados = 1): string
{
  $dados = [];
  for ($i = 0; $i < $numDados; $i++) {
    $dados[] = (new PockerDice())->throw();
  }

  return implode(', ', $dados);
}

echo tirarHastaCincoDados(5);
