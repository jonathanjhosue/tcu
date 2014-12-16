<?php

/**
 * sitio actions.
 *
 * @package    tcu
 * @subpackage sitio
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class sitioActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
      $this->pager = new sfPropelPager(
        'Sitio',
        sfConfig::get('app_max_sitio_pagina')
      );
      $this->pager->setPeerMethod('doSelect');
      $this->pager->setPage($request->getParameter('pagina', 1));
      $this->pager->init();

      $this->sitio_list = $this->pager->getResults();
    /*$this->sitio_list = SitioPeer::doSelect(new Criteria());*/
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->sitio = SitioPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->sitio);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new SitioForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new SitioForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($sitio = SitioPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sitio does not exist (%s).', $request->getParameter('id')));
    $this->form = new SitioForm($sitio);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($sitio = SitioPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sitio does not exist (%s).', $request->getParameter('id')));
    $this->form = new SitioForm($sitio);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($sitio = SitioPeer::retrieveByPk($request->getParameter('id')), sprintf('Object sitio does not exist (%s).', $request->getParameter('id')));
    $sitio->delete();
$this->getUser()->setFlash('notice', 'El elemento se ha eliminado correctamente ');
    $this->redirect('sitio/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $sitio = $form->save();
$this->getUser()->setFlash('notice', 'El elemnto se ha guardado correctamente '); 
      $this->redirect('sitio/edit?id='.$sitio->getId());
    }
  }
}
