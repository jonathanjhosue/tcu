<?php

class Galeria extends BaseGaleria
{
  public function __toString()
  {
    return $this->getNombre();
  }




 }
