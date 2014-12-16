<?php

/**
 * Persona form.
 *
 * @package    tcu
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfPropelFormTemplate.php 10377 2008-07-21 07:10:32Z dwhittle $
 */
class PersonaForm extends BasePersonaForm
{
  public function configure()
  {

      unset(
	$this['created_at'], $this['updated_at']
      );

     $this->validatorSchema['correo'] = new sfValidatorEmail();

     $this->widgetSchema['datos'] = new sfWidgetFormTextarea(array(),array('rows' => '5','cols' => '40',));


/*
      // get Contact model object
	$user = $this->getObject()->getsfGuardUser();

	// contact object is null
	if (is_null($user)) {

		// create a new Contact object
		$user = new sfGuardUser();

		// set the copmany of the newly created object to the current company
		//$user->setProfile($this->getObject());

		// set the contact of the current company
		$this->getObject()->setsfGuardUser($user);

	}

  // create a new contact form
     $user_form = new sfGuardUserForm($user);

     // embed the contact form in the current company form
     $this->embedForm('user', $user_form);

     // remove the contact_id from the form
    unset($this['user_id']);
*/
  }
}
