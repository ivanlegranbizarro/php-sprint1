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

    $biblioteca->agregar_libro(autor: 'El Quijote', título: 'Miguel de Cervantes', ISBN: '123456789', género: Genero::Aventuras, páginas: 1000);

    $this->assertCount(1, $biblioteca::$libros);
  }


  #[Test]
  public function eliminar_un_libro()
  {
    $biblioteca = new Biblioteca();
    $biblioteca->agregar_libro('El Quijote', 'Miguel de Cervantes', '123456789', Genero::Aventuras, 1000);
    $isbn_libro_a_eliminar = '123456789';
    $libro_eliminado = $biblioteca->borrar_libro($isbn_libro_a_eliminar);
    $this->assertSame($libro_eliminado, "El libro se ha eliminado correctamente");
  }

  #[Test]
  public function modificar_un_libro()
  {
    $biblioteca = new Biblioteca();
    $biblioteca->agregar_libro('El Quijote', 'Miguel de Cervantes', '123456789', Genero::Aventuras, 1000);
    $isbn_libro_a_modificar = '123456789';
    $parametros_a_modificar = [
      'título' => 'El Quijote nueva edición',
    ];
    $libro_modificado = $biblioteca->modificar_libro($isbn_libro_a_modificar, $parametros_a_modificar);

    $this->assertSame($libro_modificado['título'], 'El Quijote nueva edición');
  }

  #[Test]
  public function buscar_libro()
  {
    $biblioteca = new Biblioteca();

    $biblioteca->agregar_libro(autor: 'Stephen King', título: 'IT', ISBN: '123456789', género: Genero::Terror, páginas: 1000);

    $busqueda = $biblioteca->buscar_libro('IT');

    $this->assertEquals($busqueda['título'], 'IT');
  }

  #[Test]
  public function buscar_libros_grandes()
  {
    $biblioteca = new Biblioteca();
    $libros_grandes = $biblioteca->buscar_libros_grandes();
    $this->assertGreaterThan(500, $libros_grandes);
  }
}
