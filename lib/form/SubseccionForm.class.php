<?php

/**
 * Subseccion form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class SubseccionForm extends BaseSubseccionForm
{
  public function configure()
  {
      //$this->widgetSchema['texto'] = new sfWidgetFormTextarea(array(),array('rich=true size=50x30 tinymce_options=language:"es",theme_advanced_buttons2:"separator"',));
      /*
      $this->widgetSchema['texto'] =  new sfWidgetFormTextareaTinyMCE(
      array(
        'width'=>550,
        'height'=>350,
    'config'  =>  'theme_advanced_disable: "anchor,help"',
    //'options'  =>  'plugins: "table"',
    'theme'   =>  'advanced',
     
      ),
      array()
    );
       * *
       */
     $this->widgetSchema['texto'] = new sfWidgetFormFCKEditor(array(),array('width' => '550', 'height' => '400'));
      $js_path = sfConfig::get('sf_rich_text_js_dir') ? '/'.sfConfig::get('sf_rich_text_js_dir').'/fckconfig.js' : '/js/fckeditor/fckconfig.js';
    sfContext::getInstance()->getResponse()->addJavascript($js_path);
    /*
    $js_path = sfConfig::get('sf_rich_text_js_dir') ? '/'.sfConfig::get('sf_rich_text_js_dir').'/tiny_mce.js' : '/sf/tinymce/js/tiny_mce.js';
    sfContext::getInstance()->getResponse()->addJavascript($js_path);
     *
     */

  }
}
