<?php

/**
 * Articulo form base class.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseArticuloForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'nombre'      => new sfWidgetFormInput(),
      'descripcion' => new sfWidgetFormInput(),
      'texto'       => new sfWidgetFormTextarea(),
      'persona_id'  => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => false)),
      'fuente'      => new sfWidgetFormInput(),
      'tags'        => new sfWidgetFormInput(),
      'created_at'  => new sfWidgetFormDateTime(),
      'updated_at'  => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorPropelChoice(array('model' => 'Articulo', 'column' => 'id', 'required' => false)),
      'nombre'      => new sfValidatorString(array('max_length' => 100)),
      'descripcion' => new sfValidatorString(array('max_length' => 255)),
      'texto'       => new sfValidatorString(),
      'persona_id'  => new sfValidatorPropelChoice(array('model' => 'Persona', 'column' => 'id')),
      'fuente'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'tags'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at'  => new sfValidatorDateTime(array('required' => false)),
      'updated_at'  => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Articulo', 'column' => array('nombre')))
    );

    $this->widgetSchema->setNameFormat('articulo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Articulo';
  }


}
