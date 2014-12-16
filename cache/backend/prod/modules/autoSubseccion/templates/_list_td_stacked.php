<td colspan="3">
  <?php echo __('%%id%% - %%nombre%% - %%seccion%%', array('%%id%%' => link_to($subseccion->getId(), 'subseccion_edit', $subseccion), '%%nombre%%' => link_to($subseccion->getNombre(), 'subseccion_edit', $subseccion), '%%seccion%%' => $subseccion->getSeccion()), 'messages') ?>
</td>
