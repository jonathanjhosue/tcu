<?php

class Seccion extends BaseSeccion
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
