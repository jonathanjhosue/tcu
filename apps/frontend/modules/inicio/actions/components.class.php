<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of componentsclass
 *
 * @author jonathan
 */
class inicioComponents  extends sfComponents{

      public function executeTcu()
      {
          $this->encargado = EncargadoPeer::retrieveByPK('1');
          $this->tcu = TcuPeer::retrieveByPK('1');

      }

       public function executeAzarEnlaces()
      {
        if(!isset ($this->cant)) $this->cant=3;
        $c = new Criteria(EnlacePeer::DATABASE_NAME);
        $c->addDescendingOrderByColumn('rand()');
        $c->setLimit($this->cant);
        $this->ultimos = EnlacePeer::doSelect($c);
      }

      public function executeSubSecciones()
      {
          if(!isset ($this->idSeccion)) $this->idSeccion=1;
          $seccion=SeccionPeer::retrieveByPK($this->idSeccion);
          if($seccion)$this->subseccion_list =$seccion->getSubseccions();
          else $this->subseccion_list= array();
      }
    }
?>
