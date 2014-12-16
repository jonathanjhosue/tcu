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
class sitioComponents  extends sfComponents{

     
      public function executeAzarSitio()
      {
        if(!isset ($this->cant)) $this->cant=1;
        $c = new Criteria(SitioPeer::DATABASE_NAME);
        $c->addDescendingOrderByColumn('rand()');
        $c->setLimit($this->cant);
        $this->ultimos = SitioPeer::doSelect($c);
      }



    }
?>
