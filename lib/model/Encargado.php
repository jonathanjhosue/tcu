<?php

class Encargado extends BaseEncargado
{
  public function __toString()
  {
    return $this->getPersonaId();
  }
}
