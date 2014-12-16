<?php

/**
 * Seccion form base class.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseSeccionForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInput(),
      'descripcion' => new sfWidgetFormInput(),
      'imagen'      => new sfWidgetFormInput(),
      'es_activa'   => new sfWidgetFormInputCheckbox(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Seccion', 'column' => 'id', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 15)),
      'descripcion' => new sfValidatorString(array('max_length' => 255)),
      'imagen'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'es_activa'   => new sfValidatorBoolean(),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Seccion', 'column' => array('nombre')))
    );

    $this->widgetSchema->setNameFormat('seccion[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Seccion';
  }


}
