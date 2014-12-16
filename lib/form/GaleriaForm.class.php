<?php

/**
 * Galeria form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class GaleriaForm extends BaseGaleriaForm
{
  public function configure()
  {
        unset(
          $this['created_at'], $this['updated_at']
      );
       $this->widgetSchema['nombre'] = new sfWidgetFormInput(array(),array('size' => '40','maxlength'=>'50'));
          $this->widgetSchema['descripcion'] = new sfWidgetFormTextarea(array(),array('rows' => '5','cols' => '40',));

         // $this->widgetSchema['imagen']=  new sfWidgetFormInputSWFUpload();

$this->widgetSchema->setLabel('descripcion', 'Descripción');




/*
  // embed forms only when editing
  if (!$this->isNew()) {

    // embed all subcategory forms
    foreach ($this->getObject()->getFotos() as $foto) {

    // create a new subcategory form for the current subcategory model object
    $foto_form = new FotoForm($foto);
    $foto_form->vistaSimple();
    // embed the subcategory form in the main category form
    $this->embedForm('Foto'.$foto->getId(), $foto_form);

 $this->widgetSchema['Foto'.$foto->getId()]['imagen']->setAttribute('width', '150');

    // set a custom label for the embedded form
    $this->widgetSchema['Foto'.$foto->getId()]->setLabel('Foto: '.$foto->getId());



    // change the name widget to sfWidgetFormInputDelete
    $this->widgetSchema['foto'.$foto->getId()]['nombre'] = new sfWidgetFormInputDelete(array(
    'url' => 'galeria/deleteFoto',      // required
    'model_id' => $subcategory->getId(),        // required
    'confirm' => '¿Estás seguro de eliminar la foto?',                     // optional
    ));

  }

  // create a new subcategory form for a new subcategory model object
  $foto_form = new FotoForm();

  // embed the subcategory form in the main category form
  $this->embedForm('foto', $foto_form);

  // set a custom label for the embedded form
  $this->widgetSchema['foto']->setLabel('Nueva Foto');

  }
/*
      sfLoader::loadHelpers(array('jQuery','Asset','Tag','Url'));
   $index = 0;
   foreach ($this->getObject()->getFotos() as $foto){
    $this->embedForm('Foto'.++$index, new FotoForm($foto));
    $label = "Foto $index".jq_link_to_remote(image_tag('/sf/sf_admin/images/delete'), array(
      'url'     =>  'po/deleteItem?idd='.$foto->getId(),
      'success' =>  "jQuery('.sf_admin_form_field_item_pos$index').remove();",
      'confirm' => '¿Seguro de eliminar la foto?',
    ));
    $this->widgetSchema->setLabel('foto'.$index,$label);
  }
  $a=sfContext::getInstance()->getUser()->getAttribute('N1added'.$this->getObject()->getId());
  $more = $this->getObject()->isNew()?max(3,$a-$index):($a>($index+3)?$a-$index:3);
  for($i=0;$i<$more;$i++){
    $ip = new Foto();
    $ip->setGaleria($this->getObject());
    $this->embedForm('Foto'.++$index, new FotoForm($ip));
    $this->widgetSchema->setLabel('Foto'.$index,"Foto $index");
  }

  $label = "Item $index".jq_link_to_remote(image_tag('/sf/sf_admin/images/add'), array(
    'url'     =>  'Galeria/addItems?po='.$this->getObject()->getId().'&index='.$index,
    'update'  =>  'sf_fieldset_none',
    'position'=>  'bottom',
  ));
  $this->widgetSchema->setLabel('item_pos'.$index,$label);

  sfContext::getInstance()->getUser()->setAttribute('N1added'.$this->getObject()->getId(), $index);
  */

  }
}
