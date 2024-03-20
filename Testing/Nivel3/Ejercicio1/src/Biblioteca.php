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
  case Terror = 'Terror';
}

class Biblioteca
{
  public static array $libros = [];

  public function agregar_libro(string $autor, string $título, string $ISBN, Genero $género, int $páginas): array
  {
    $libro = [
      'autor' => $autor,
      'título' => $título,
      'ISBN' => $ISBN,
      'género' => $género,
      'páginas' => $páginas

    ];

    self::$libros[] = $libro;
    return $libro;
  }

  public function borrar_libro(string $isbn): string
  {
    foreach (self::$libros as $key => $libro) {
      if ($libro['ISBN'] == $isbn) {
        unset(self::$libros[$key]);
        return "El libro se ha eliminado correctamente";
      }
    }
  }

  public function buscar_libro(string $busqueda): array
  {
    foreach (self::$libros as $libro) {
      if (in_array($busqueda, $libro)) {
        return $libro;
      }
    }
    return [];
  }


  public function modificar_libro(string $isbn, array $parametros): array|string
  {
    $libro = $this->buscar_libro($isbn);

    foreach ($parametros as $key => $value) {
      $libro[$key] = $value;
    }
    return $libro;
  }
}
