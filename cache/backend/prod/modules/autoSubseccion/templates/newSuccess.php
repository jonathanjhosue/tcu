<?php use_helper('I18N', 'Date') ?>
<?php include_partial('subseccion/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Nueva Sección', array(), 'messages') ?></h1>

  <?php include_partial('subseccion/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('subseccion/form_header', array('subseccion' => $subseccion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('subseccion/form', array('subseccion' => $subseccion, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('subseccion/form_footer', array('subseccion' => $subseccion, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
