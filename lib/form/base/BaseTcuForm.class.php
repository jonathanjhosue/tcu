<?php

/**
 * Tcu form base class.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseTcuForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'codigo'     => new sfWidgetFormInput(),
      'nombre'     => new sfWidgetFormInput(),
      'imagen'     => new sfWidgetFormInput(),
      'created_at' => new sfWidgetFormDateTime(),
      'updated_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorPropelChoice(array('model' => 'Tcu', 'column' => 'id', 'required' => false)),
      'codigo'     => new sfValidatorString(array('max_length' => 10)),
      'nombre'     => new sfValidatorString(array('max_length' => 255)),
      'imagen'     => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
      'updated_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorPropelUnique(array('model' => 'Tcu', 'column' => array('codigo'))),
        new sfValidatorPropelUnique(array('model' => 'Tcu', 'column' => array('nombre'))),
      ))
    );

    $this->widgetSchema->setNameFormat('tcu[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tcu';
  }


}
