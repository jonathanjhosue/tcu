<?php

/**
 * Foto form base class.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseFotoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInput(),
      'descripcion' => new sfWidgetFormInput(),
      'imagen'      => new sfWidgetFormInput(),
      'persona_id'  => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => false)),
      'galeria_id'  => new sfWidgetFormPropelChoice(array('model' => 'Galeria', 'add_empty' => false)),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Foto', 'column' => 'id', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 70)),
      'descripcion' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'imagen'      => new sfValidatorString(array('max_length' => 255)),
      'persona_id'  => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id')),
      'galeria_id'  => new sfValidatorPropelChoice(array('model' => 'Galeria', 'column' => 'id')),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('foto[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Foto';
  }


}
