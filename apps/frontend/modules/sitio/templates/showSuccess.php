<fieldset>
<legend> <?php echo $sitio->getNombre() ?></legend>
 <?php echo image_tag('/uploads/logos/'.$sitio->getImagen(),'alt_title=Logo  '.$sitio->getNombre().' width=150') ?>


<table>
  <tr>
       <tr>
      <th>Descripción:</th>
      <td><?php echo $sitio->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Dirección:</th>
      <td><?php echo $sitio->getDireccion() ?></td>
    </tr>
    <tr>
      <th>Web:</th>
      <td><a href="http://<?php echo $sitio->getWeb() ?>"><?php echo $sitio->getWeb() ?> </a></td>
    </tr>
    <tr>
      <th>Teléfono:</th>
      <td><?php echo $sitio->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Correo:</th>
      <td><a href="mailto:<?php echo $sitio->getCorreo() ?>"> <?php echo $sitio->getCorreo() ?></a></td>
    </tr>
  </tbody>
</table>

</fieldset>

<hr />

<a href="<?php echo url_for('sitio/edit?id='.$sitio->getId()) ?>" class="beditar">Editar</a>
&nbsp;
<a href="<?php echo url_for('sitio/index') ?>" class="bir">Lista</a>
