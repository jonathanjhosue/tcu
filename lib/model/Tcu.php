<?php

class Tcu extends BaseTcu
{
  public function __toString()
  {
    return $this->getNombre();
  }
}
