<table>
  <tbody>
    
    <tr>
      <th>Nombre:</th>
      <td><?php echo $galeria->getNombre() ?></td>
    </tr>
    <tr>
      <th>Descripción:</th>
      <td><?php echo $galeria->getDescripcion() ?></td>
    </tr>
        <tr style="background-color:transparent;">
      <td colspan="2" >
            <?php foreach ($foto_list as $foto): ?>
            <div class="icono">
             <a href="<?php echo url_for('foto/show?id='.$foto->getId()) ?>?keepThis=true&height=650&width=700" class="thickbox">
             <?php echo image_tag('/uploads/galerias/thumbnail/'.$foto->getImagen(),'alt_title='.$foto->getNombre()) ?>
             <p><?php echo substr($foto->getNombre(), 0, 37); ?></p>
 </a>

</div>
 <?php endforeach; ?>
      </td>
    </tr>

  </tbody>
</table>

<?php include_partial('inicio/indicePaginas', array('paginador' => $pager)) ?>

<div class="pagination_desc">
<p>
  <strong><?php echo $pager->getNbResults() ?></strong> Fotos subidas

  <?php if ($pager->haveToPaginate()): ?>
    - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
  </p>
</div>

<hr />

<a href="<?php echo url_for('foto/new') ?>?galeriaid=<?php echo $galeria->getId() ?>" class="bingresar">Nueva Imagen</a>
&nbsp;
<a href="<?php echo url_for('galeria/edit?id='.$galeria->getId()) ?>" class="beditar">Editar</a>
&nbsp;
<a href="<?php echo url_for('galeria/index') ?>" class="bir">Ir a Galerias</a>
