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
class galeriaComponents  extends sfComponents{

      public function executeUltimos()
      {
        if(!isset ($this->cant)) $this->cant=1;
        $c = new Criteria(FotoPeer::DATABASE_NAME);
        $c->addDescendingOrderByColumn( FotoPeer::CREATED_AT);
        $c->setLimit($this->cant);
        $this->ultimos = FotoPeer::doSelect($c);
      }
    }
?>
