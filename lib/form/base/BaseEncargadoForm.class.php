<?php

/**
 * Encargado form base class.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseEncargadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'persona_id' => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => false)),
      'correo'     => new sfWidgetFormInput(),
      'horario'    => new sfWidgetFormInput(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Encargado', 'column' => 'id', 'required' => false)),
      'persona_id' => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id')),
      'correo'     => new sfValidatorString(array('max_length' => 50)),
      'horario'    => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Encargado', 'column' => array('correo')))
    );

    $this->widgetSchema->setNameFormat('encargado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Encargado';
  }


}
