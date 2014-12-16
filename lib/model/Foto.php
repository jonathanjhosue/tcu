<?php

class Foto extends BaseFoto
{
     public function __toString()
  {
    return $this->getNombre();
  }

 public function generateImagenFilename(sfValidatedFile $file)
{
   $nombreArchivo=$this->getNombre();
    //return Funciones::slugify("".$file->generateFilename()).rand(11111,99999).$file->getOriginalExtension();
    // return $file->generateFilename();
    return Funciones::slugify($file->getOriginalName()).rand(11111,99999).$file->getOriginalExtension();

}
}
