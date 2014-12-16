<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContactoFormclass
 *
 * @author jonathan
 */
class ContactoForm extends sfForm{
    //put your code here


  public function configure()
  {
    $this->setWidgets(array(
      'nombre'    => new sfWidgetFormInput(array(),array('size' => '40','maxlength' => '50',)),
      'email'     => new sfWidgetFormInput(array(),array('size' => '40','maxlength' => '50',)),
      'mensaje'   => new sfWidgetFormTextarea(array(),array('rows' => '5','cols' => '50',)),
    ));

  $this->widgetSchema->setNameFormat('contacto[%s]');
$this->setValidators(array(
      'nombre'  => new sfValidatorString(array('required' => true)),
      'email'   => new sfValidatorEmail(array(),array('invalid' => 'La dirección de email no es válida.')),
      'mensaje' => new sfValidatorString(array('min_length' => 4,),
                  array('required' => 'Es obligatorio escribir un mensaje.','min_length' => 'El mensaje "%value%" es demasiado corto. Su longitud debe ser al menos de %min_length% caracteres.',
)),
    ));


     
   }

}
?>
