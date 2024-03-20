<?php
/* Necessitem emmagatzemar el conjunt de llibres i tenir mètodes que:

Afegeixin, esborrin i modifiquin un llibre de la llibreria.
Permetin consultar llibres per títol, gènere, ISBN o autor.
Retornar llibres grans (més de 500 pàgines). */

declare(strict_types=1);

use Ejercicio1\Biblioteca;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class BibliotecaTest extends TestCase
{

  #[Test]
  public function añadir_un_libro()
  {
    $biblioteca = new Biblioteca();
    $libro = [
      'título' => 'El Quijote',
      'autor' => 'Miguel de Cervantes',
      'ISBN' => '123456789',
      'género' => 'Romance',
      'páginas' => 1000
    ];
    $agregarLibro = $biblioteca->agregar_libro();
    $this->assertSame($libro, $agregarLibro, "El libro se ha añadido correctamente");
  }
}
