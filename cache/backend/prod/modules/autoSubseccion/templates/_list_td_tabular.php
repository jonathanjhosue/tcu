<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($subseccion->getId(), 'subseccion_edit', $subseccion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo link_to($subseccion->getNombre(), 'subseccion_edit', $subseccion) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_seccion">
  <?php echo $subseccion->getSeccion() ?>
</td>
