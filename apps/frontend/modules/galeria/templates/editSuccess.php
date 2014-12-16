<h1>Editar Galeria</h1>

<?php include_partial('form', array('form' => $form)) ?>


<h2>Fotos de la Galería</h2>
<div id="album" >
<table>
  <tbody>
      <tr style="background-color:transparent;">
      <td>
            <?php foreach ($foto_list as $foto): ?>
            <div class="icono">
             <a href="<?php echo url_for('foto/edit?id='.$foto->getId()) ?>">
             <?php echo image_tag('/uploads/galerias/thumbnail/'.$foto->getImagen()); ?>
             </a>
             <?php echo link_to('Borrar', 'foto/delete?id='.$foto->getId(), array('method' => 'delete', 'confirm' => '¿Estás seguro de eliminar la imágen?','class'=>'bborrar','style'=>'color:#000000;')) ?>
             </a>
            </div>
 <?php endforeach; ?>
      </td>
    </tr>
  </tbody>
</table>
</div>
