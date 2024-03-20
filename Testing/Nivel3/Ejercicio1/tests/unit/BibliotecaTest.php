<?php
/* Necessitem emmagatzemar el conjunt de llibres i tenir mètodes que:

Afegeixin, esborrin i modifiquin un llibre de la llibreria.
Permetin consultar llibres per títol, gènere, ISBN o autor.
Retornar llibres grans (més de 500 pàgines). */

declare(strict_types=1);

use Ejercicio1\Biblioteca;
use Ejercicio1\Genero;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

final class BibliotecaTest extends TestCase
{

  #[Test]
  public function añadir_un_libro()
  {
    $biblioteca = new Biblioteca();
    $libro = [
      'autor' => 'Miguel de Cervantes',
      'título' => 'El Quijote',
      'ISBN' => '123456789',
      'género' => Genero::Aventuras,
      'páginas' => 1000
    ];

    // Llama al método agregar_libro() con cada propiedad del libro como argumento individual
    $agregarLibro = $biblioteca->agregar_libro(
      $libro['autor'],
      $libro['título'],
      $libro['ISBN'],
      $libro['género'],
      $libro['páginas']
    );

    // Verifica que el libro devuelto sea igual al libro esperado
    $this->assertSame($agregarLibro, $libro);
  }


  #[Test]
  public function eliminar_un_libro()
  {
    $biblioteca = new Biblioteca();
    $isbn_libro_a_eliminar = '123456789';
    $libro_eliminado = $biblioteca->borrar_libro($isbn_libro_a_eliminar);
    $this->assertSame($libro_eliminado, "El libro se ha eliminado correctamente");
  }

  // #[Test]
  // public function modificar_un_libro()
  // {
  //   $biblioteca = new Biblioteca();
  //   $id_libro_a_modificar = 1;
  //   $parametros_a_modificar = [
  //     'título' => 'El Quijote nueva edición',
  //   ];
  //   $libro_modificado = $biblioteca->modificar_libro($id_libro_a_modificar, $parametros_a_modificar);
  //   $this->assertSame($libro_modificado, "El libro se ha modificado correctamente");
  // }

  // #[Test]
  // public function buscar_libros()
  // {
  //   $biblioteca = new Biblioteca();
  //   $parametros_de_busqueda = [
  //     'título' => 'El Quijote'
  //   ];
  //   $libros_encontrados = $biblioteca->consultar_libros($parametros_de_busqueda);

  //   $this->assertNotEmpty($libros_encontrados);

  //   $primer_libro = reset($libros_encontrados);
  //   $this->assertSame(1, $primer_libro['id']);
  //   $this->assertSame('El Quijote', $primer_libro['título']);
  //   $this->assertSame('Miguel de Cervantes', $primer_libro['autor']);
  //   $this->assertSame('123456789', $primer_libro['ISBN']);
  //   $this->assertSame('Aventuras', $primer_libro['género']);
  //   $this->assertSame(1000, $primer_libro['páginas']);
  // }

  // #[Test]
  // public function libros_grandes()
  // {
  //   $biblioteca = new Biblioteca();
  //   $libros_grandes = $biblioteca->libros_grandes();
  //   $this->assertGreaterThan(500, $libros_grandes);
  // }
}
