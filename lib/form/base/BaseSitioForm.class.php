<?php

/**
 * Sitio form base class.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseSitioForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInput(),
      'descripcion' => new sfWidgetFormInput(),
      'direccion'   => new sfWidgetFormInput(),
      'imagen'      => new sfWidgetFormInput(),
      'web'         => new sfWidgetFormInput(),
      'telefono'    => new sfWidgetFormInput(),
      'correo'      => new sfWidgetFormInput(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Sitio', 'column' => 'id', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 70)),
      'descripcion' => new sfValidatorString(array('max_length' => 255)),
      'direccion'   => new sfValidatorString(array('max_length' => 255)),
      'imagen'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'web'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'telefono'    => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'correo'      => new sfValidatorString(array('max_length' => 70, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Sitio', 'column' => array('nombre')))
    );

    $this->widgetSchema->setNameFormat('sitio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Sitio';
  }


}
