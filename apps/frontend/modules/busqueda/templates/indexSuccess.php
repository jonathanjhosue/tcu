<h1>Resultados de búsqueda para "<?php echo $palabras; ?>"</h1>

<table >

  <tbody>
    <?php foreach ($resultados_list as $resultado): ?>
 
    <tr class="fila">
          <td>
          <a href="<?php echo url_for('articulo/show?id='.$resultado->getId()) ?>">
      <img src="../images/doc.png" width="64px"/>
      </a>
      </td>
      <td>
         <h2><a href="<?php echo url_for('articulo/show?id='.$resultado->getId()) ?>"><?php echo $resultado->getNombre() ?></a></h2>
         <p>         
         <?php echo $resultado->getDescripcion() ?>
         <br/>
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
  <strong><?php echo $pager->getNbResults() ?></strong> resultados encontrados

  <?php if ($pager->haveToPaginate()): ?>
    - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
  </>
</div>
<hr/>

