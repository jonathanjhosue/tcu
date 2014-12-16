<h1>Foto List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Imagen</th>
      <th>Persona</th>
      <th>Galeria</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($foto_list as $foto): ?>
    <tr>
      <td><a href="<?php echo url_for('foto/show?id='.$foto->getId()) ?>"><?php echo $foto->getId() ?></a></td>
      <td><?php echo $foto->getNombre() ?></td>
      <td><?php echo $foto->getDescripcion() ?></td>
      <td><?php echo $foto->getImagen() ?></td>
      <td><?php echo $foto->getPersonaId() ?></td>
      <td><?php echo $foto->getGaleriaId() ?></td>
      <td><?php echo $foto->getCreatedAt() ?></td>
      <td><?php echo $foto->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('foto/new') ?>"  class="bnuevo1">Nueva</a>
