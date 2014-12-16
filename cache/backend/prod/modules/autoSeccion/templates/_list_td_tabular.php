<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($seccion->getId(), 'seccion_edit', $seccion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo link_to($seccion->getNombre(), 'seccion_edit', $seccion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $seccion->getDescripcion() ?>
</td>
<td class="sf_admin_boolean sf_admin_list_td_es_activa">
  <?php echo get_partial('seccion/list_field_boolean', array('value' => $seccion->getEsActiva())) ?>
</td>
