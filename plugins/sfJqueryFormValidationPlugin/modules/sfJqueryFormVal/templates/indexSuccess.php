<?php 
  use_helper('JqueryFormVal');
  $fields = $sf_data->getRaw('fields');
  $field_total = sizeof($fields);
  $counter = 1;
?>

jQuery(function($){
  
  $('#<?php echo $name . '_' . key($fields) ?>').parents('form').validate({
    rules: {
      <?php foreach($fields as $fieldname => $field): ?>
  
        '<?php echo $name ?>[<?php echo $fieldname ?>]': {
            <?php echo function_exists(get_class($field) . '_rules') ? call_user_func(get_class($field) . '_rules', $field) : '' ?>
        
        }<?php echo $counter < $field_total ? ',' : '' ?>
<?php $counter++ ?><?php endforeach ?>
    },<?php $counter = 1 ?>
    
    messages: {
      <?php foreach($fields as $fieldname => $field): ?>
        '<?php echo $name ?>[<?php echo $fieldname ?>]': {
        
            <?php echo sf_form_messages($field) ?>
        
        }<?php echo $counter < $field_total ? ',' : '' ?>
        
<?php $counter++ ?><?php endforeach; ?>
    },
    wrapper: 'ul class=error_list',
    errorElement: 'li',
    errorPlacement: function(error, element) 
    {
     if(element.parents('.radio_list').is('*') || element.parents('.checkbox_list').is('*'))
     {
       error.prependTo( element.parent().parent().parent() );
     }
     else
     {
       error.prependTo( element.parent() );
     }
   }
  
  });
  
  <?php if($post_validator = $form->getValidatorSchema()->getPostValidator()): ?>
      <?php echo function_exists(get_class($post_validator) . '_process') ? call_user_func(get_class($post_validator) . '_process', $post_validator, $name) : '' ?>
  <?php endif ?>

});
