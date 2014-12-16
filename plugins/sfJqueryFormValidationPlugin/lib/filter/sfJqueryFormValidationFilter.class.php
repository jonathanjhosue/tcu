<?php

class sfJqueryFormValidationFilter extends sfFilter
{
	public function execute($filterChain) 
  {
    $filterChain->execute();
    $action = $this->getContext()->getActionStack()->getLastEntry()->getActionInstance();
    foreach ($action->getVarHolder()->getAll() as $name => $value)
    {
      if ($value instanceof sfForm && (sfConfig::get('app_sf_jquery_form_validation_default') !== 'disabled' || in_array(get_class($value), sfConfig::get('app_sf_jquery_form_validation_forms'))))
      {
        $response = $this->getContext()->getResponse();
        $response->setContent(str_ireplace('</head>', '<script type="text/javascript" src="' . url_for('sfJqueryFormVal/' . get_class($value)) . '"></script></head>',$response->getContent()));
      }
    }
  }
}