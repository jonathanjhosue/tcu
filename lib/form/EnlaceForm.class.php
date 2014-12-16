<?php

/**
 * Enlace form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class EnlaceForm extends BaseEnlaceForm
{
  public function configure()
  {

       $this->validatorSchema['imagen'] = new sfValidatorFile(array( 'required'   => false,'path' => sfConfig::get('sf_upload_dir').'/enlaces', 'mime_types' => 'web_images',));

     $this->widgetSchema['descripcion'] = new sfWidgetFormTextarea();
         //$this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable();
         $this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Imagen',
      'file_src'  => '/uploads/enlaces/'.$this->getObject()->getImagen(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew,
      'template'  => '<div>%file% <br />%input%<br />  %delete% borrar existente</div>',

      ));

      $this->validatorSchema['imagen_delete'] = new sfValidatorPass();
           
     $this->widgetSchema->setHelps(array(
          'imagen'    => 'Se recomienda resolución máxima de 128x128',
        ));
  }
}
