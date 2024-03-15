<?php
/* - Exercici 1
Crea una classe que contingui els mètodes getFile() i getDir() que torni el path sencer i el directori del fitxer utilitzant constants màgiques. */

class getFileInfo
{
  public static function getFile()
  {
    return __FILE__;
  }

  public static function getDir()
  {
    return __DIR__;
  }
}


echo getFileInfo::getFile() . '<br>';
echo getFileInfo::getDir() . '<br>';
