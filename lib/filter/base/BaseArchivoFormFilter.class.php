<?php

require_once(sfConfig::get('sf_lib_dir').'/filter/base/BaseFormFilterPropel.class.php');

/**
 * Archivo filter form base class.
 *
 * @package    tcu
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormFilterGeneratedTemplate.php 16976 2009-04-04 12:47:44Z fabien $
 */
class BaseArchivoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
      'archivo'     => new sfWidgetFormFilterInput(),
      'persona_id'  => new sfWidgetFormPropelChoice(array('model' => 'Persona', 'add_empty' => true)),
      'tipo_id'     => new sfWidgetFormPropelChoice(array('model' => 'Tipo', 'add_empty' => true)),
      'created_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
      'updated_at'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => true)),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
      'archivo'     => new sfValidatorPass(array('required' => false)),
      'persona_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Persona', 'column' => 'id')),
      'tipo_id'     => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipo', 'column' => 'id')),
      'created_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'updated_at'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('archivo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Archivo';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
      'archivo'     => 'Text',
      'persona_id'  => 'ForeignKey',
      'tipo_id'     => 'ForeignKey',
      'created_at'  => 'Date',
      'updated_at'  => 'Date',
    );
  }
}
