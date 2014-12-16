<?php

/**
 * archivo actions.
 *
 * @package    tcu
 * @subpackage archivo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class archivoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {

      $this->pager = new sfPropelPager(
        'Archivo',
        sfConfig::get('app_max_archivos_pagina')
      );
      $this->pager->setPeerMethod('doSelect');
      $this->pager->setPage($request->getParameter('pagina', 1));
      $this->pager->init();

      $this->archivo_list = $this->pager->getResults();

   /* $this->archivo_list = ArchivoPeer::doSelect(new Criteria());*/
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->archivo = ArchivoPeer::retrieveByPk($request->getParameter('id'));


    $this->forward404Unless($this->archivo);
    //si es imágen verla
    if($this->archivo->getTipo()->getId()==1)
    {
        $this->forward('archivo','ver');
    }

  }

  public function executeVer(sfWebRequest $request)
  {
    $this->archivo = ArchivoPeer::retrieveByPk($request->getParameter('id'));

    $this->forward404Unless($this->archivo);
  }

  public function executeNew(sfWebRequest $request)
  {

       $arch=new Archivo();
      if(!is_null( $this->getUser()->getGuardUser()->getId())){
          $user= $this->getUser()->getGuardUser()->getProfile();
       $arch->setPersona($user);
     }

     $this->form = new ArchivoForm($arch);

  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ArchivoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($archivo = ArchivoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object archivo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ArchivoForm($archivo);   
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($archivo = ArchivoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object archivo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ArchivoForm($archivo);
   

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');

  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($archivo = ArchivoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object archivo does not exist (%s).', $request->getParameter('id')));
    $archivo->delete();
$this->getUser()->setFlash('notice', 'El elemento se ha eliminado correctamente '); 
    $this->redirect('archivo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $archivo = $form->save();
$this->getUser()->setFlash('notice', 'El elemento se ha guardado correctamente ');
      $this->redirect('archivo/edit?id='.$archivo->getId());

    }
  }
}
