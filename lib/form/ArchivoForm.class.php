<?php

/**
 * Archivo form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class ArchivoForm extends BaseArchivoForm
{
  public function configure()
  {
      unset(
          $this['created_at'], $this['updated_at']
      );

$this->validatorSchema['archivo'] = new sfValidatorFile(array( 'required'   => false,'path' => sfConfig::get('sf_upload_dir').'/archivos',));


        $this->widgetSchema['nombre'] =  new sfWidgetFormInput(array(),array('size' => '40','maxlength'=>'70'));

          $this->widgetSchema['descripcion'] = new sfWidgetFormTextarea(array(),array('rows' => '5','cols' => '40',));

                   $this->widgetSchema['archivo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Archivo',
      'file_src'  => '/uploads/archivos/'.$this->getObject()->getArchivo(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew,
      'template'  => '<div>%file% <br />%input%<br />  %delete% borrar existente</div>',

      ));

      $this->validatorSchema['archivo_delete'] = new sfValidatorPass();

      $this->widgetSchema->setLabel('tipo_id', 'Tipo');
$this->widgetSchema->setLabel('descripcion', 'Descripción');

$this->widgetSchema['persona_id'] = new sfWidgetFormInputHidden();

  }
        
  
}
