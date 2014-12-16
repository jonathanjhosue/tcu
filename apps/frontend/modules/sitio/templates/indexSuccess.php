<?php include_component('inicio','subSecciones',array('idSeccion' => 5)) ?>
<h1>Sitios</h1>



<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th colspan="2">Descripción</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($sitio_list as $sitio): ?>

    <tr>
      <td>

      <a href="<?php echo url_for('sitio/show?id='.$sitio->getId()) ?>"><?php echo $sitio->getNombre() ?>
      <br/>
       <?php echo image_tag('/uploads/logos/'.$sitio->getImagen(),'alt_title=Logo  '.$sitio->getNombre().' width=150') ?>
       </a>
       
      </td>
      <td colspan="2" >
      <?php echo $sitio->getDescripcion() ?>

      Dirección: <?php echo $sitio->getDireccion() ?> <br/>

      Web: <a href="http://<?php echo $sitio->getWeb() ?>"><?php echo $sitio->getWeb() ?> </a><br/>
      Telefono: <?php echo $sitio->getTelefono() ?> <br/>
      Correo:  <a href="mailto:<?php echo $sitio->getCorreo() ?>"> <?php echo $sitio->getCorreo() ?></a> <hr/>
      </td>
    </tr>

    <?php endforeach; ?>
  </tbody>
</table>

<?php include_partial('inicio/indicePaginas', array('paginador' => $pager)) ?>

<div class="pagination_desc">
<p>
  <strong><?php echo $pager->getNbResults() ?></strong> sitios publicados

  <?php if ($pager->haveToPaginate()): ?>
    - página <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
  <?php endif; ?>
  </p>
</div>

<hr/>
<p>
  <a href="<?php echo url_for('sitio/new') ?>" class="bnuevo1">Nuevo</a>
  </p>
