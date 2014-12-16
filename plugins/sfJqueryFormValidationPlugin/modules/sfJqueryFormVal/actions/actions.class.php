<?php

class sfJqueryFormValActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    
    // get the name of the form object we are building the validation for
    $form = $request->getParameter('form');
    
    // make sure that the form class specified actually exists
    $this->forward404Unless(class_exists($form));
    
    // make sure the class name provided is actually a symfony form
    $this->forward404Unless(is_subclass_of($form, 'sfForm'));
    
    // instantiate an instance of the form
    $this->form = new $form;
    
    // put the form name into a variable for easier reading of code in view
    $this->name = $this->form->getName();
    
    // put the field objects into a variable
    $this->fields = $this->form->getValidatorSchema()->getFields();
    
    // remove the csrf token from the field list if it exists
    unset($this->fields['_csrf_token']);
  }
}
