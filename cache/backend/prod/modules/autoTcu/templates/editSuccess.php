<?php use_helper('I18N', 'Date') ?>
<?php include_partial('tcu/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edición de TCU', array(), 'messages') ?></h1>

  <?php include_partial('tcu/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('tcu/form_header', array('tcu' => $tcu, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('tcu/form', array('tcu' => $tcu, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('tcu/form_footer', array('tcu' => $tcu, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>