
<div class="archivo">
<?php echo image_tag('/uploads/logos/'.$archivo->getTipo()->getImagen(),'alt_title='.$archivo->getNombre()) ?>
<h1>
    <?php echo $archivo->getNombre() ?>
</h1>
    <p>
     Subido por: <?php echo $archivo->getPersona() ?><br/>
          Fecha: <?php echo $archivo->getCreatedAt() ?> <br/>
          Tipo: <?php echo $archivo->getTipo() ?>  <br/>
          Descripción: <?php echo $archivo->getDescripcion() ?>  <br/>
        <br/>
</p>
<p>

    <a href="<?php echo url_for('/uploads/archivos/'. $archivo->getArchivo()) ?>" class="bdescargar">Descargar: <?php echo $archivo->getNombre() ?></a> </p>
</div>


<hr />

<a href="<?php echo url_for('archivo/edit?id='.$archivo->getId()) ?>"  class="beditar">Editar</a>
&nbsp;
<a href="<?php echo url_for('archivo/index') ?>"  class="bir">Lista</a>
