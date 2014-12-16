<?php

/**
 * contacto actions.
 *
 * @package    tcu
 * @subpackage contacto
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12479 2008-10-31 10:54:40Z fabien $
 */
class contactoActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->formulario = new ContactoForm();

     if ($request->isMethod('post'))
    {
      $this->formulario->bind($request->getParameter('contacto'));
      if ($this->formulario->isValid())
      {

        $this->redirect('contacto/gracias?'.http_build_query($this->formulario->getValues()));
      }
    }


  }

 public function executeGracias(sfWebRequest $request)
 {

    $this->encargado = EncargadoPeer::retrieveByPK('1');
    $this->forward404Unless($request->getParameter('email'));

// enviar correo
    ProjectConfiguration::registerZend();
    $config = array(
'auth' => 'login',
'username' =>sfConfig::get('app_smtp_usuario'),
'password' => sfConfig::get('app_smtp_contrasenia'),
'ssl' => 'ssl',
'port' => sfConfig::get('app_smtp_puerto')
);
$tr = new Zend_Mail_Transport_Smtp(sfConfig::get('app_smtp_servidor'),$config);
Zend_Mail::setDefaultTransport($tr);
    $mail = new Zend_Mail();
    $mail->setBodyText(<<<EOF

Nombre {$request->getParameter('nombre')}
...
{$request->getParameter('contenido')}
EOF
);
    $mail->setFrom($request->getParameter('email'), 'TCU Bot');
    $mail->addTo($this->encargado->getCorreo());
    $mail->setSubject('Correo Web TCU');
    $mail->send();
 
 }

}
