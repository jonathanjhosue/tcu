<?php

/**
 * busqueda actions.
 *
 * @package    tcu
 * @subpackage busqueda
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class busquedaActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
   // $this->forward('default', 'module');

   $this->palabras=$request->getParameter('palabras', '');

     $c= new Criteria();        
     
        $cton = $c->getNewCriterion(ArticuloPeer::NOMBRE,'%'.$this->palabras.'%',CRITERIA::LIKE);
         $cton->addOr( $c->getNewCriterion(ArticuloPeer::DESCRIPCION, '%'.$this->palabras.'%',CRITERIA::LIKE));
         $cton->addOr( $c->getNewCriterion(ArticuloPeer::TEXTO, '%'.$this->palabras.'%',CRITERIA::LIKE));
         $cton->addOr( $c->getNewCriterion(ArticuloPeer::TAGS, '%'.$this->palabras.'%',CRITERIA::LIKE));
       $c->add($cton);

 
        $this->pager = new sfPropelPager(
        'Articulo',
        sfConfig::get('app_max_resultados_pagina')
      );

//si se busco algo que no es vacío
      if($this->palabras!='')
      {
          $this->pager->setCriteria($c);
          //$this->pager->setPeerMethod('doSelect');
          $this->pager->setPage($request->getParameter('pagina', 1));
          $this->pager->init();
          $this->resultados_list = $this->pager->getResults();
      }
      else
      {
         $this->resultados_list =array();
      }

      
  }
}
