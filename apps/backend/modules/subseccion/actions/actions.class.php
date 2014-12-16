<?php

require_once dirname(__FILE__).'/../lib/subseccionGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/subseccionGeneratorHelper.class.php';

/**
 * subseccion actions.
 *
 * @package    tcu
 * @subpackage subseccion
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class subseccionActions extends autoSubseccionActions
{


   protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
        if($form->getObject()->isNew())
        {
            $idsec= $form->getValue('seccion_id');
            $seccion= SeccionPeer::retrieveByPK($idsec);

            $cantSubsecciones= $seccion->countSubseccions();
            //validar cantidad
            if($cantSubsecciones==6)
           {
               $this->getUser()->setFlash('error', ' No se puede agregar la subsección, \n La sección '.$form->getValue('nombre').' tiene su máximo de 6 subsecciones ');
               $this->redirect('@subseccion_new');
            }
        }
      $this->getUser()->setFlash('notice', $form->getObject()->isNew() ? 'The item was created successfully.' : 'The item was updated successfully.');

      $subseccion = $form->save();

      $this->dispatcher->notify(new sfEvent($this, 'admin.save_object', array('object' => $subseccion)));

      if ($request->hasParameter('_save_and_add'))
      {
        $this->getUser()->setFlash('notice', $this->getUser()->getFlash('notice').' You can add another one below.');

        $this->redirect('@subseccion_new');
      }
      else
      {
        $this->redirect('@subseccion_edit?id='.$subseccion->getId());
      }
    }
    else
    {
      $this->getUser()->setFlash('error', 'The item has not been saved due to some errors.');
    }
  }//fin processform

   
}
