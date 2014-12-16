<td colspan="4">
  <?php echo __('%%id%% - %%nombre%% - %%descripcion%% - %%es_activa%%', array('%%id%%' => link_to($seccion->getId(), 'seccion_edit', $seccion), '%%nombre%%' => link_to($seccion->getNombre(), 'seccion_edit', $seccion), '%%descripcion%%' => $seccion->getDescripcion(), '%%es_activa%%' => get_partial('seccion/list_field_boolean', array('value' => $seccion->getEsActiva()))), 'messages') ?>
</td>
