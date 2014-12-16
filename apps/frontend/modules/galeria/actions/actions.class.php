<?php

/**
 * galeria actions.
 *
 * @package    tcu
 * @subpackage galeria
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class galeriaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->pager = new sfPropelPager(
        'Galeria',
        sfConfig::get('app_max_iconos_pagina')
      );
      $this->pager->setPeerMethod('doSelect');
      $this->pager->setPage($request->getParameter('pagina', 1));
      $this->pager->init();

      $this->galeria_list = $this->pager->getResults();
    /*$this->galeria_list = GaleriaPeer::doSelect(new Criteria());*/
  }

  public function executeShow(sfWebRequest $request)
  {
       $this->galeria = GaleriaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->galeria);

$c= new Criteria();
$c->add(FotoPeer::GALERIA_ID,$this->galeria->getId());
       $this->pager = new sfPropelPager(
        'Foto',
        sfConfig::get('app_max_iconos_pagina')
      );
      $this->pager->setCriteria($c);
      $this->pager->setPage($request->getParameter('pagina', 1));
      $this->pager->init();

      $this->foto_list = $this->pager->getResults();
      /*
    $this->galeria = GaleriaPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->galeria);
 
       */
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new GaleriaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new GaleriaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($galeria = GaleriaPeer::retrieveByPk($request->getParameter('id')), sprintf('Object galeria does not exist (%s).', $request->getParameter('id')));
       $this->foto_list =$galeria->getFotos();
   $this->form = new GaleriaForm($galeria);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($galeria = GaleriaPeer::retrieveByPk($request->getParameter('id')), sprintf('Object galeria does not exist (%s).', $request->getParameter('id')));
    $this->form = new GaleriaForm($galeria);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($galeria = GaleriaPeer::retrieveByPk($request->getParameter('id')), sprintf('Object galeria does not exist (%s).', $request->getParameter('id')));
    $galeria->delete();
$this->getUser()->setFlash('notice', 'El elemento se ha eliminado correctamente ');
    $this->redirect('galeria/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
     // $request->setParameter();
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $galeria = $form->save();
$this->getUser()->setFlash('notice', 'El elemento se ha guardado correctamente ');
      $this->redirect('galeria/edit?id='.$galeria->getId());
    }
  }
}
