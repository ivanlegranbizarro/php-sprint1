<?php
/*Necessitem crear un petit software per a tractament d’informació en una biblioteca. Per això necessitem representar la informació d’un llibre, que té:

Un títol
Un autor/autora
Un ISBN
Un gènere, que pot ser: Aventures, Ciència-ficció, Conte, Novel·la Policial, Paranormal, Distopia, Fantàstic.
núm. de pàgines.

Necessitem emmagatzemar el conjunt de llibres i tenir mètodes que:

Afegeixin, esborrin i modifiquin un llibre de la llibreria.
Permetin consultar llibres per títol, gènere, ISBN o autor.
Retornar llibres grans (més de 500 pàgines). */

declare(strict_types=1);

namespace Ejercicio1;

enum Genero: string
{
  case Aventuras = 'Aventuras';
  case CienciaFiccion = 'Ciencia-ficción';
  case RelatoCorto = 'Relato corto';
  case Romantico = 'Romántico';
  case NoFiccion = 'No ficción';
}

class Biblioteca
{
  public function __construct(private string $titulo, private string $autor, private int $isbn, private Genero $genero, private int $paginas)
  {
  }
}
