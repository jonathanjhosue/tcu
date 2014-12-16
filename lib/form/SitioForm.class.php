<?php

/**
 * Sitio form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class SitioForm extends BaseSitioForm
{
  public function configure()
  {
     parent::configure();


     $this->validatorSchema['correo'] = new sfValidatorEmail();


     $this->validatorSchema['imagen'] = new sfValidatorFile(array( 'required'   => false,'path' => sfConfig::get('sf_upload_dir').'/logos', 'mime_types' => 'web_images',));


     $this->widgetSchema['direccion'] = new sfWidgetFormTextarea();
     $this->widgetSchema['descripcion'] = new sfWidgetFormTextarea();
         //$this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable();
         $this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Imagen',
      'file_src'  => '/uploads/logos/'.$this->getObject()->getImagen(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew,
      'template'  => '<div>%file% <br />%input%<br />  %delete% borrar existente</div>',

      ));

      $this->validatorSchema['imagen_delete'] = new sfValidatorPass();

 $this->widgetSchema->setLabels(array(
          'imagen'    => 'Imágen',
              'descripcion' => 'Descripción',
              'direccion' => 'Dirección',
          'telefono' => 'Teléfono'
        ));
     $this->widgetSchema->setHelps(array(
          'imagen'    => 'Se recomienda resolución máxima de 150x150',
        ));



  }


}
