<?php

/**
 * Foto form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class FotoForm extends BaseFotoForm
{
  public function configure()
  {
       unset(
          $this['created_at'], $this['updated_at']
      );

$this->validatorSchema['imagen'] = new sfValidatorFile(array(
'required'   => false,
'path' => sfConfig::get('sf_upload_dir').'/galerias',
'mime_types' => 'web_images',
'validated_file_class' => 'sfResizedFile',

      ));


        $this->widgetSchema['nombre'] =  new sfWidgetFormInput(array(),array('size' => '40','maxlength'=>'70'));

          $this->widgetSchema['descripcion'] = new sfWidgetFormTextarea(array(),array('rows' => '5','cols' => '40',));

      $this->widgetSchema['imagen'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Imagen',
      'file_src'  => '/uploads/galerias/'.$this->getObject()->getImagen(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew,
      'template'  => '<div>%file% <br />%input%<br />  %delete% borrar existente</div>',
      ),
  array('width' => '640',));

      $this->validatorSchema['imagen_delete'] = new sfValidatorPass();

       $this->widgetSchema->setLabels(array(
               'descripcion'  => 'Descripción',
              'imagen' => 'Imágen',
          'persona_id'    => 'Subida por',
              'galeria_id' => 'Galería'
        ));


    $this->widgetSchema['persona_id'] = new sfWidgetFormInputHidden();

     
     $this->widgetSchema->setHelps(array(
          'imagen'    => 'Se recomienda resolución máxima de 640x480',
        ));
   
  }


  public function vistaSimple(){
      $this->simple=true;
       unset(
          $this['nombre'], $this['descripcion'],$this['galeria_id'], $this['persona_id']
      );
  }
}
