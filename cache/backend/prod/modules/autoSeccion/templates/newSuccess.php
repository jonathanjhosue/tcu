<?php use_helper('I18N', 'Date') ?>
<?php include_partial('seccion/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Seccion', array(), 'messages') ?></h1>

  <?php include_partial('seccion/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('seccion/form_header', array('seccion' => $seccion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('seccion/form', array('seccion' => $seccion, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('seccion/form_footer', array('seccion' => $seccion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
