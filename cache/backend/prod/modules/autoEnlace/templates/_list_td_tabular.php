<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($enlace->getId(), 'enlace_edit', $enlace) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo link_to($enlace->getNombre(), 'enlace_edit', $enlace) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_web">
  <?php echo $enlace->getWeb() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_descripcion">
  <?php echo $enlace->getDescripcion() ?>
</td>
