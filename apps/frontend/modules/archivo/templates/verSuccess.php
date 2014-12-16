
<div class="foto">
<?php echo image_tag('/uploads/archivos/'.$archivo->getArchivo(),'alt_title='.$archivo->getNombre().' class=foto ')  ?>
<h1>
    <?php echo $archivo->getNombre() ?>
</h1>
    <p>
     Autor: <?php echo $archivo->getPersona() ?>  <br/>
     Descripción: <?php echo $archivo->getDescripcion() ?>  <br/>

</p>

</div>


<hr />

<a href="<?php echo url_for('archivo/edit?id='.$archivo->getId()) ?>" class="beditar">Editar</a>
&nbsp;
<a href="<?php echo url_for('galeria/index') ?>"  class="bir">Ver Galeria</a>
