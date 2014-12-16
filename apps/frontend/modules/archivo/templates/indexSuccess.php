<?php include_component('inicio','subSecciones',array('idSeccion' => 3)) ?>
<h1> Archivos</h1>

<?php foreach ($archivo_list as $archivo): ?>
<div class="icono">
 <a href="<?php echo url_for('archivo/show?id='.$archivo->getId()) ?>?keepThis=true&height=250&width=550" class="thickbox">
             <?php echo image_tag('/uploads/logos/'.$archivo->getTipo()->getImagen(),'alt_title='.$archivo->getNombre()) ?>
              <p><?php echo $archivo->getNombre() ?></p>
 </a>

</div>
 <?php endforeach; ?>

<?php include_partial('inicio/indicePaginas', array('paginador' => $pager)) ?>

<div class="pagination_desc">
<p>
  <strong><?php echo $pager->getNbResults() ?></strong> archivos subidos

  <?php if ($pager->haveToPaginate()): ?>
    - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
  </p>
</div>

<hr/>
<p>  <a href="<?php echo url_for('archivo/new') ?>"  class="bnuevo1">Nuevo</a></p>

