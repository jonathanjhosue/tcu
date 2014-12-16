<?php

class Articulo extends BaseArticulo
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
