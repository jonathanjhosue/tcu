<?php

class Subseccion extends BaseSubseccion
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
