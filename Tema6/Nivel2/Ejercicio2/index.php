<?php
/* - Exercici 2
Sobreescriu alguna de les lògiques d’entre tots els mètodes màgics que hi ha (que no sigui __construct) */

declare(strict_types=1);

class SuperGuerrer
{
  public function __construct(private string $nom, private int $nivell)
  {
  }

  public function __toString()
  {
    return "El nom del guerrer és $this->nom. Pot transformar-se en Superguerrer de nivell $this->nivell" . '<br>';
  }
}


$guerrer1 = new SuperGuerrer('Goku', 4);
echo $guerrer1;

$guerrer2 = new SuperGuerrer('Vegeta', 4);
echo $guerrer2;

$guerrer3 = new SuperGuerrer('Trunks', 2);
echo $guerrer3;
