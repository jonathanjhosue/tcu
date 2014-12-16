<table id="articulo">
<thead>
    <tr>
        <th colspan="2"><h2><?php echo $articulo->getNombre(); ?></h2></th>
    </tr>
    <tr>
          <td >Tags: <?php echo $articulo->getTags() ?></td>
         <td>Fecha: <?php echo $articulo->getCreatedAt() ?></td>
    </tr>
  </thead>
  <tfoot>
      <tr>
      <td>Publicado por: <?php echo $articulo->getPersona() ?></td>   <td>Fuente: <?php echo $articulo->getFuente() ?></td>
    </tr>
  </tfoot>
  <tbody>    

    <tr>
        <td colspan="2"><?php  echo $sf_data->getRaw('articulo')->getTexto()  ?></td>
    </tr>

  </tbody>
</table>

<hr />

<a href="<?php echo url_for('articulo/edit?id='.$articulo->getId()) ?>" class="beditar">Editar</a>
&nbsp;
<a href="<?php echo url_for('articulo/index') ?>" class="bir">Lista</a>
