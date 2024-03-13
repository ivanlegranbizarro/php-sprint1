<?php

declare(strict_types=1);

class Animal
{
  public function __construct(protected string $nom)
  {
  }


  public function makeSound(): string
  {
    return "L'animal en qüestió parla el seu idioma";
  }
}
