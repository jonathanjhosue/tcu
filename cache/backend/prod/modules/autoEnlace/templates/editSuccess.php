<?php use_helper('I18N', 'Date') ?>
<?php include_partial('enlace/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edición de "%%nombre%%"', array('%%nombre%%' => $enlace->getNombre()), 'messages') ?></h1>

  <?php include_partial('enlace/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('enlace/form_header', array('enlace' => $enlace, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('enlace/form', array('enlace' => $enlace, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('enlace/form_footer', array('enlace' => $enlace, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
