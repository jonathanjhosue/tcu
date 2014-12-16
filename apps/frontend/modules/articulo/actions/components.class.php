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
class articuloComponents  extends sfComponents{

      public function executeUltimos()
      {
        if(!isset ($this->cant)) $this->cant=1;
        $c = new Criteria();
        $c->addDescendingOrderByColumn(ArticuloPeer::CREATED_AT);
        $c->setLimit($this->cant);
        $this->ultimos = ArticuloPeer::doSelect($c);
      }
    }
?>
