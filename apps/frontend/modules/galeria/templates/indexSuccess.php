<?php include_component('inicio','subSecciones',array('idSeccion' => 4)) ?>
<h1>Galerias</h1>
<table>
  <tbody>

    <tr style="background-color:transparent;">
    <td>
     <?php foreach ($galeria_list as $galeria): ?>
    <div class="icono">
     <a href="<?php echo url_for('galeria/show?id='.$galeria->getId()) ?>">
                 <?php echo image_tag('/images/carpeta_imagen.png','alt_title='.$galeria->getNombre()) ?>
                  <p><?php echo $galeria->getNombre() ?></p>
     </a>

    </div>
     <?php endforeach; ?>
     </td></tr>
    </tbody>
</table>

 <br/>

<?php include_partial('inicio/indicePaginas', array('paginador' => $pager)) ?>

<div class="pagination_desc">
<p>
  <strong><?php echo $pager->getNbResults() ?></strong> galerías creadas

  <?php if ($pager->haveToPaginate()): ?>
    - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
  </p>
</div>

<hr/>

<p>  <a href="<?php echo url_for('galeria/new') ?>" class="bnuevo1">Nuevo</a></p>

