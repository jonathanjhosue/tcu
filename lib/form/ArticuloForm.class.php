<?php

/**
 * Articulo form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class ArticuloForm extends BaseArticuloForm
{
  public function configure()
  {

      unset(
          $this['created_at'], $this['updated_at']
      );

        $this->widgetSchema->setLabels(array(
              'descripcion' => 'Descripción',
        ));

        $this->widgetSchema['nombre'] = new sfWidgetFormInput(array(),array('size' => '40',));

          $this->widgetSchema['descripcion'] = new sfWidgetFormTextarea(array(),array('rows' => '5','cols' => '40',));

        // $this->widgetSchema['texto'] = new sfWidgetFormTextarea(array(),array('rich=true size=50x30 tinymce_options=language:"es",theme_advanced_buttons2:"separator"',));
         $this->widgetSchema['texto'] = new sfWidgetFormFCKEditor(array(),array('width' => '550', 'height' => '400'));
     /*
     $this->widgetSchema['texto'] =  new sfWidgetFormTextareaTinyMCE(
      array(
        'width'=>550,
        'height'=>350,
    'config'  =>  'file_browser_callback: "ajaxfilemanager"',
 
    //'tinymce_options' => 'file_browser_callback:"sfAssetsLibrary.fileBrowserCallBack"',
    //'options'  =>  'plugins: "table"',
    'theme'   =>  'advanced',

      ),
      array()
    );

    $js_path = sfConfig::get('sf_rich_text_js_dir') ? '/'.sfConfig::get('sf_rich_text_js_dir').'/tiny_mce.js' : '/sf/tinymce/js/tiny_mce.js';
    sfContext::getInstance()->getResponse()->addJavascript($js_path);

    */
   $js_path = sfConfig::get('sf_rich_text_js_dir') ? '/'.sfConfig::get('sf_rich_text_js_dir').'/fckconfig.js' : '/js/fckeditor/fckconfig.js';
    sfContext::getInstance()->getResponse()->addJavascript($js_path);
       //Accedemos a la instancia del usuario actual
  
    $this->widgetSchema['persona_id'] = new sfWidgetFormInputHidden();

    //Cambiamos el tipo del widget (elemento del formulario) a hidden
    //$this->widgetSchema['persona_id'] = new sfWidgetFormInputHidden();
    //$this->widgetSchema['fuente']->setDefault('$user->getGuardUser()->');
  }
}
