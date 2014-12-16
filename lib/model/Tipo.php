<?php

class Tipo extends BaseTipo
{
  public function __toString()
  {
    return $this->getNombre();
  }

  public function generateImagenFilename(sfValidatedFile $file)
{
   $nombreArchivo=$this->getNombre();
    return Funciones::slugify($nombreArchivo).$file->getOriginalExtension();
}
}
