<?php use_helper('I18N', 'Date') ?>
<?php include_partial('encargado/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Encargado', array(), 'messages') ?></h1>

  <?php include_partial('encargado/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('encargado/form_header', array('encargado' => $encargado, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('encargado/form', array('encargado' => $encargado, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('encargado/form_footer', array('encargado' => $encargado, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
