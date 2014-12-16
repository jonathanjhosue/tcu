<?php include_component('inicio','subSecciones',array('idSeccion' => 6)) ?>


<form action="<?php echo url_for('contacto/index') ?>" method="POST">
  <table>
    <?php echo $formulario ?>
    <tr>
      <td colspan="2">
        <input type="submit" class="bguardar" />
      </td>
    </tr>
  </table>
</form>