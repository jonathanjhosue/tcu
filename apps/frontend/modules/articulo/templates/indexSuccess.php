<?php include_component('inicio','subSecciones',array('idSeccion' => 2)) ?>

<h1>Articulos</h1>

<table id="lista">

  <tbody>
    <?php foreach ($articulo_list as $articulo): ?>
 
    <tr class="fila">
          <td>
          <a href="<?php echo url_for('articulo/show?id='.$articulo->getId()) ?>">
      <img src="../images/doc.png" width="64px"/>
      </a>
      </td>
      <td>
         <h2><a href="<?php echo url_for('articulo/show?id='.$articulo->getId()) ?>"><?php echo $articulo->getNombre() ?></a></h2>
         <p>         
         <?php echo $articulo->getDescripcion() ?>
         <br/><br/>
         Fecha  <?php echo $articulo->getCreatedAt() ?>&nbsp;&nbsp;&nbsp;
         Publicado por: <?php echo $articulo->getPersona() ?> &nbsp;&nbsp;&nbsp;
         Tags <?php echo $articulo->getTags() ?>
         </p>
         <hr/>
      </td>

    </tr>    
    
    <?php endforeach; ?>
  </tbody>
</table>

<?php include_partial('inicio/indicePaginas', array('paginador' => $pager)) ?>

<div class="pagination_desc">
<p>
  <strong><?php echo $pager->getNbResults() ?></strong> artículos publicados

  <?php if ($pager->haveToPaginate()): ?>
    - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
  </>
</div>
<hr/>
  <a href="<?php echo url_for('articulo/new') ?>"  class="bnuevo1">Nuevo</a>
