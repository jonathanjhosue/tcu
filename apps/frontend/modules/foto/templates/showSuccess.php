
<div class="foto">
<?php echo image_tag('/uploads/galerias/'.$foto->getImagen(),'alt_title='.$foto->getNombre().' class=foto ')  ?>
<h1>
    <?php echo $foto->getNombre() ?>
</h1>
    <p>
     Subida por: <?php echo $foto->getPersona() ?>  <br/>
     Galería: <?php echo $foto->getGaleria() ?>  <br/>
     Descripción: <?php echo $foto->getDescripcion() ?>  <br/>


</p>

</div>


<hr />

<a href="<?php echo url_for('foto/edit?id='.$foto->getId()) ?>" class="beditar">Editar</a>
&nbsp;
<a href="<?php echo url_for('galeria/show?id='.$foto->getGaleriaId()) ?>" class="bir">Ver Galería</a>


