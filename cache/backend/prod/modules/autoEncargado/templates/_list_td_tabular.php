<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($encargado->getId(), 'encargado_edit', $encargado) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_persona">
  <?php echo $encargado->getPersona() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_correo">
  <?php echo $encargado->getCorreo() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_horario">
  <?php echo $encargado->getHorario() ?>
</td>
