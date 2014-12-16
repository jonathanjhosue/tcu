<?php

/**
 * foto actions.
 *
 * @package    tcu
 * @subpackage foto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class fotoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->foto_list = FotoPeer::doSelect(new Criteria());
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->foto = FotoPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->foto);
  }

  public function executeNew(sfWebRequest $request)
  {
      $foto=new Foto();
      if(!is_null($request->getParameter('galeriaid'))){
       $galeria=GaleriaPeer::retrieveByPk($request->getParameter('galeriaid'));
       $foto->setGaleria($galeria);

     }

     if(!is_null( $this->getUser()->getGuardUser()->getId())){
       $user=  $this->getUser()->getGuardUser()->getProfile();
       $foto->setPersona($user);
     }
     
     $this->form = new FotoForm($foto);
    
         //$galeria=GaleriaPeer::retrieveByPk($request->getParameter('galeriaid'));

        // $this->form->getObject()->setGaleria($galeria);

  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new FotoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($foto = FotoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object foto does not exist (%s).', $request->getParameter('id')));
    $this->form = new FotoForm($foto);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod('post') || $request->isMethod('put'));
    $this->forward404Unless($foto = FotoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object foto does not exist (%s).', $request->getParameter('id')));
    $this->form = new FotoForm($foto);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($foto = FotoPeer::retrieveByPk($request->getParameter('id')), sprintf('Object foto does not exist (%s).', $request->getParameter('id')));
   
    $foto->delete();
$this->getUser()->setFlash('notice', 'El elemento se ha eliminado correctamente ');
    $this->redirect('galeria/show?id='.$foto->getGaleriaId());
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
     
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));

    if ($form->isValid())
    {
/*
     $fotillo=$form->getObject();

      // Retrieve the name of the uploaded file
      $fileName = $fotillo->getImagen();

  // Create the thumbnail
     $thumbnail = new sfThumbnail(130, 130);
     $thumbnail->loadFile(sfConfig::get('sf_upload_dir').'/galerias/'.$fileName);
     $thumbnail->save(sfConfig::get('sf_upload_dir').'/galerias/thumbnail/'.$fileName, 'image/png');
     // chmod our file
		chmod($smallFile, $fileMode);
		chmod($file, $fileMode);
*/

           $foto = $form->save();

  // Move the uploaded file to the 'uploads' directory
     //$this->getRequest()->moveFile('file', sfConfig::get('sf_upload_dir').'/'.$fileName);


      $this->getUser()->setFlash('notice', 'El elemento se ha guardado correctamente ');
      $this->redirect('galeria/show?id='.$foto->getGaleriaId());

    }
  }
}
