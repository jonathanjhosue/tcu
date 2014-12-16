<td colspan="4">
  <?php echo __('%%id%% - %%nombre%% - %%web%% - %%descripcion%%', array('%%id%%' => link_to($enlace->getId(), 'enlace_edit', $enlace), '%%nombre%%' => link_to($enlace->getNombre(), 'enlace_edit', $enlace), '%%web%%' => $enlace->getWeb(), '%%descripcion%%' => $enlace->getDescripcion()), 'messages') ?>
</td>
