<?php

/**
 * articulo actions.
 *
 * @package    tcu
 * @subpackage articulo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class articuloActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
   /* $this->articulo_list = ArticuloPeer::doSelect(new Criteria());

    $this->articulo = $this->getRoute()->getObject();*/

  $this->pager = new sfPropelPager(
    'Articulo',
    sfConfig::get('app_max_articulos_pagina')
  );
  $this->pager->setPeerMethod('doSelect');
  $this->pager->setPage($request->getParameter('pagina', 1));
  $this->pager->init();

  $this->articulo_list = $this->pager->getResults();

  }

  public function executeShow(sfWebRequest $request)
  {

    $this->articulo = ArticuloPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->articulo);
  }

  public function executePermalink(sfWebRequest $request)
  {
      $articulo = ArticuloPeer::obtenerPorNombre($request->getParameter('nombre'));
    $this->forward404Unless($articulo);
    $this->articulo=$articulo;

  }


  public function executeNew(sfWebRequest $request)
  {    
 
      $art=new Articulo();      
      if(!is_null( $this->getUser()->getGuardUser()->getId())){
          $user= $this->getUser()->getGuardUser()->getProfile();
       $art->setPersona($user);
     }
     $this->form = new ArticuloForm($art);
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new ArticuloForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($articulo = ArticuloPeer::retrieveByPk($request->getParameter('id')), sprintf('Object articulo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ArticuloForm($articulo);

  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($articulo = ArticuloPeer::retrieveByPk($request->getParameter('id')), sprintf('Object articulo does not exist (%s).', $request->getParameter('id')));
    $this->form = new ArticuloForm($articulo);

    $this->processForm($request, $this->form);
     
    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($articulo = ArticuloPeer::retrieveByPk($request->getParameter('id')), sprintf('Object articulo does not exist (%s).', $request->getParameter('id')));
    $articulo->delete();
$this->getUser()->setFlash('notice', 'El elemento se ha eliminado correctamente ');
    $this->redirect('articulo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
 
    if ($form->isValid())
    {
      $articulo = $form->save();
$this->getUser()->setFlash('notice', 'El elemento se ha creado correctamente ');
      $this->redirect('articulo/edit?id='.$articulo->getId());
    }
  }
}
