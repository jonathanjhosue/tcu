<?php

class Archivo extends BaseArchivo
{
  public function __toString()
  {
    return $this->getNombre();
  }

 public function generateImagenFilename(sfValidatedFile $file)
{
   $nombreArchivo=$this->getNombre();
    return Funciones::slugify($nombreArchivo).rand(11,99).$file->getOriginalExtension();
}
}
