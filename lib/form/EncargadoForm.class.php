<?php

/**
 * Encargado form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class EncargadoForm extends BaseEncargadoForm
{
  public function configure()
  {


           $this->widgetSchema->setLabels(array(
      'persona_id'    => 'Persona',
    ));

     $this->validatorSchema['correo'] = new sfValidatorEmail();


  }
}
