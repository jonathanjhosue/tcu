<?php

require_once dirname(__FILE__).'/../lib/personaGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/personaGeneratorHelper.class.php';

/**
 * persona actions.
 *
 * @package    tcu
 * @subpackage persona
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12474 2008-10-31 10:41:27Z fabien $
 */
class personaActions extends autoPersonaActions
{
   public function executeDelete(sfWebRequest $peticion)
  {
       $peticion->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));


         $id = $peticion->getParameter('id');

       $per = PersonaPeer::retrieveByPK($id);

//validar que no sea encargado
       if($per->esEncargado())
       {
           $this->getUser()->setFlash('error', ' No se puede borrar '.$per->getNombre().' ya que es el encargado ');

         $this->redirect('@persona');
        }
        
       if($per->tieneArchivos())
       {
           $this->getUser()->setFlash('error', ' No se puede borrar '.$per->getNombre().' ya que tiene archivos públicados ');

         $this->redirect('@persona');
        }

       if($per->tieneArticulos())
       {
           $this->getUser()->setFlash('error', ' No se puede borrar '.$per->getNombre().' ya que tiene artículos públicados ');

         $this->redirect('@persona');
        }

       if($per->esUnicoAdministrador())
       {
           $this->getUser()->setFlash('error', ' No se puede borrar '.$per->getNombre().' ya que es el único administrador ');

         $this->redirect('@persona');
        }  


    $this->getRoute()->getObject()->delete();

    $this->getUser()->setFlash('notice', 'La persona fue borrada.');

    $this->redirect('@persona');


         

       
  }
}
