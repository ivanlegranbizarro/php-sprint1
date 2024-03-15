<?php
/* - Exercici 1
Crea una classe que representi un recurs didàctic d’aquesta especialitat. Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). Implementa tant el tema com el tipus de recurs amb enums. */

declare(strict_types=1);

enum Tipus: string
{
  case Fitxer = 'Fitxer';
  case ArticleWeb = 'Article web';
  case Video = 'Vídeo';
}

enum Tema: string
{
  case PHP = 'PHP';
  case CSS = 'CSS';
  case HTML = 'HTML';
  case SQL = 'SQL';
  case Laravel = 'Laravel';
}

class RecursDidactic
{
  public function __construct(private string $nom, private string $url, private Tipus $tipus, private Tema $tema)
  {
  }
}
