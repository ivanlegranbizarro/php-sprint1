<?php
/* - Exercici 1
Crea la classe PokerDice. Les cares d'un dau de pòquer tenen les següents figures: As, K, Q, J, 7 i 8.

Crea el mètode throw que no fa altra cosa que tirar el dau, és a dir, genera un valor aleatori per a l'objecte a què se li aplica el mètode.

Crea també el mètode shapeName, que digui quina és la figura que ha sortit en l'última tirada del dau en qüestió.

Realitza una aplicació que permeti tirar cinc daus de pòquer alhora.

A més, programa el mètode getTotalThrows que ha de mostrar el nombre total de tirades entre tots els daus. */

declare(strict_types=1);

class PockerDice
{
  public static int $totalThrows = 0;
  public function __construct(public int $valor = 0, public string $figura = '')
  {
  }

  public function setValor(): void
  {
    $this->valor = rand(1, 6);
  }

  public function getValor(): int
  {
    return $this->valor;
  }

  public function setFace(): void
  {
    match ($this->valor) {
      1 => $this->figura = 'As',
      2 => $this->figura = 'K',
      3 => $this->figura = 'Q',
      4 => $this->figura = 'J',
      5 => $this->figura = '7',
      6 => $this->figura = '8',
    };
  }

  public function shapeFace(): string
  {
    return $this->figura;
  }

  public function throw(): void
  {
    $this->setValor();
    $this->setFace();
    self::$totalThrows++;
  }

  public static function getTotalThrows(): int
  {
    return self::$totalThrows;
  }
}


function tirarHastaCincoDados(int $numeroDados = 1): void
{
  $dados = [];
  for ($i = 0; $i < $numeroDados; $i++) {
    $dados[$i] = new PockerDice();
    $dados[$i]->throw();
  }
}

$dado1 = new PockerDice();

$dado1->throw();
$dado1->throw();

tirarHastaCincoDados(3);

echo 'Número total de tiradas entre los dados: ' . PockerDice::getTotalThrows();
