<?php

require_once dirname(__FILE__).'/../lib/BasesfGuardUserActions.class.php';

/**
 * sfGuardUser actions.
 *
 * @package    sfGuardPlugin
 * @subpackage sfGuardUser
 * @author     Fabien Potencier
 * @version    SVN: $Id: actions.class.php 12965 2008-11-13 06:02:38Z fabien $
 */
class sfGuardUserActions extends basesfGuardUserActions
{
      public function executeDelete(sfWebRequest $peticion)
  {


    $peticion->checkCSRFProtection();

    $this->dispatcher->notify(new sfEvent($this, 'admin.delete_object', array('object' => $this->getRoute()->getObject())));

       $id = $peticion->getParameter('id');

          $usu = sfGuardUserPeer::retrieveByPK($id);

      if($usu->esUnicoAdministrador())
       {
           $this->getUser()->setFlash('error', ' No se puede borrar '.$usu->getUsername().' ya que es el único administrador ');

         $this->redirect('@sf_guard_user');
        }

    $this->getRoute()->getObject()->delete();

    $this->getUser()->setFlash('notice', 'El usuario fue borrado.');

     $this->redirect('@sf_guard_user');
  }

}
