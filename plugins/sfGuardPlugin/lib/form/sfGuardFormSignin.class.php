<?php

class sfGuardFormSignin extends sfForm
{
  public function configure()
  {
    $this->setWidgets(array(
      'username' => new sfWidgetFormInput(),
      'password' => new sfWidgetFormInput(array('type' => 'password')),
      'remember' => new sfWidgetFormInputCheckbox(),
    ));

    $this->setValidators(array(
      'username' => new sfValidatorString(),
      'password' => new sfValidatorString(),
      'remember' => new sfValidatorBoolean(),
    ));

    $this->validatorSchema->setPostValidator(new sfGuardValidatorUser());

    $this->widgetSchema->setNameFormat('signin[%s]');

    $this->widgetSchema->setLabels(array(
  'username'  => 'Usuario',
  'password'   => 'Contraseña',
  'remember' => 'Recordar',
));

unset( $this['remember']);

 $this->widgetSchema['username']->setAttribute('size', '15');
  $this->widgetSchema['password']->setAttribute('size', '15');

  }

  public function verComo($vista){
      $this->widgetSchema->setFormFormatterName($vista);
  }

}
