<td colspan="4">
  <?php echo __('%%id%% - %%persona%% - %%correo%% - %%horario%%', array('%%id%%' => link_to($encargado->getId(), 'encargado_edit', $encargado), '%%persona%%' => $encargado->getPersona(), '%%correo%%' => $encargado->getCorreo(), '%%horario%%' => $encargado->getHorario()), 'messages') ?>
</td>
