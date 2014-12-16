<?php

class Persona extends BasePersona
{
  public function __toString()
  {
    return $this->getNombre();
  }
  public function esEncargado()
  {
      if($this->countEncargados())    return true;
      else   return false;
  }
   public function tieneArticulos()
  {
      if($this->countArticulos())    return true;
      else   return false;
  }
   public function tieneArchivos()
  {
      if($this->countArchivos())    return true;
      else   return false;
  }
  public function esUnicoAdministrador()
  {
      /*
        $criteria = new Criteria(sfGuardUserPeer::DATABASE_NAME);
        $criteria->add(sfGuardUserPeer::IS_SUPER_ADMIN, '1', Criteria::IN);
        $usuarios = ($criteria);
        foreach ($usuarios as $usu)
        {
            if($usu->esUnicoAdministrador())
            {
                return true;
            }
        }

      return false;

       */
      $usu=$this->getsfGuardUser();
      if($usu->esUnicoAdministrador()) return true;

      else return false;


  }

}
