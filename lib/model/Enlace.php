<?php

class Enlace extends BaseEnlace
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
