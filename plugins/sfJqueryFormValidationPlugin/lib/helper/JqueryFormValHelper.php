<?php

  /* rules */
  function sfValidatorString_rules($obj)
  {
    $options = $obj->getOptions();
    $js = '';
    if($options['required'])
    {
      $js .= 'required: true, ';
    }
    if($options['max_length'])
    {
      $js .= 'maxlength: ' . $options['max_length'] . ', ';
    }
    if($options['min_length'])
    {
      $js .= 'minlength: ' . $options['min_length'] . ', ';
    }
    if(strlen($js) > 0)
    {
      $js = substr($js, 0, strlen($js) - 2);
    }
    return $js;
  }
  
  function sfValidatorEmail_rules($obj)
  {
    $options = $obj->getOptions();
    $js = '';
    $js .= 'email: true, ';
    if($options['required'])
    {
      $js .= 'required: true, ';
    }
    if(strlen($js) > 0)
    {
      $js = substr($js, 0, strlen($js) - 2);
    }
    return $js;
  }
  
  function sfValidatorDate_rules($obj)
  {
    $options = $obj->getOptions();
    $date_method = 'date';
    if(strlen(sfConfig::get('app_sf_jquery_form_validation_date_method')) > 0)
    {
      $date_method = sfConfig::get('app_sf_jquery_form_validation_date_method');
    }
    $js = '';
    $js .= $date_method . ': true, ';
    
    if($options['required'])
    {
      $js .= 'required: true, ';
    }
    if(strlen($js) > 0)
    {
      $js = substr($js, 0, strlen($js) - 2);
    }
    return $js;
  }
  
  /* messages */
  function sf_form_messages($obj)
  {
    $js = '';
    $options = $obj->getOptions();
    $messages = $obj->getMessages();
    $date_method = 'date';
    if(strlen(sfConfig::get('app_sf_jquery_form_validation_date_method')) > 0)
    {
      $date_method = sfConfig::get('app_sf_jquery_form_validation_date_method');
    }
    
    foreach($options as $key => $val)
    {

      $key = str_replace(
        array('date_format'), 
        array('bad_format'), $key);
        
      if($val && isset($messages[$key]))
      {
        if($messages[$key] == 'Required.')
        {
          $messages[$key] = 'This field is required.';
        }
        $keytext = str_replace(
          array('min_length', 'max_length', 'bad_format'), 
          array('minlength', 'maxlength', $date_method), $key);
        $js .= $keytext . ': \'' . $messages[$key] . '\', ';
      }
    }
    if(strlen($js) > 0)
    {
      $js = substr($js, 0, strlen($js) - 2);
    }
    return $js;
  }
  
  function sfValidatorSchemaCompare_process($obj, $name)
  {
    $options = $obj->getOptions();
    $messages = $obj->getMessages();
    if($options['operator'] == '==')
    {
      $js = '$("#' . $name . '_' . $options['right_field'] . '").rules("add", {
       equalTo: "#' . $name . '_' . $options['left_field'] . '",
       messages: {
         equalTo: "' . $messages['invalid'] . '"
       }
      });';
    }
    return $js;
  }
?>