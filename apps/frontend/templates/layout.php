<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

 <head>
<?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
 
</head>
<body>

	<div id="banner">

         <img id="escudo" src="/images/escudo.gif">
              <img id="escudo" src="/images/letras.gif">
<img id="cintillo" src="/images/puntos.gif">
     
      
	</div>

 	<div id="Titulo">

     

  <img class="imgtitulo" src="/images/titulo.png">

 		<h1>Educaci&oacute;n para el Manejo de Desechos  en la Regi&oacute;n Occidental del Valle Central</h1>

<div id="Menu">
 <ul class="kwicks">
     <li id="kwick1"><?php echo link_to('Inicio', 'inicio/index') ?></li>
     <li id="kwick2"><?php echo link_to('Artículos', 'articulo/index') ?></li>
     <li id="kwick3"><?php echo link_to('Archivos', 'archivo/index') ?></li>
     <li id="kwick4"><?php echo link_to('Galería', 'galeria/index') ?></li>
     <li id="kwick5"><?php echo link_to('Sitio', 'sitio/index') ?></li>
     <li id="kwick6"><?php echo link_to('Contactos', 'contacto/index') ?></li>
 </ul>

                
	</div>

	</div>
    


<div id="left">

<div id="CajaIzq">
      <div id="CajaContenido">


<?php include_partial('inicio/logueo') ?>
<hr/>

<?php include_partial('busqueda/busqueda') ?>
<hr/>

      <!-- <?php include_component('sitio','azarSitio') ?> !-->

<hr/>

<?php include_component('inicio','azarEnlaces') ?>
        
      </div>
      <div id="CajaIzqInf"></div>
    </div>

</div>

<div id="right">   


    <div id="CajaDer">
      <div id="CajaContenido">

<?php include_partial('inicio/novedades') ?>
             </div>
      <div id="CajaDerInf"></div>
    </div>
</div>

<div id="content">
   
<?php include_component('inicio','tcu') ?>

 <div class="tabbed_area">


 </div>
 <?php include_partial('global/mensajes'); ?>

 
        <div class="content">
          <?php echo $sf_content ?>
        </div>
        <br/>

</div>

<div id="Pie">
<p>
<div id="copywright">© Derechos Reservados 2009. Resolución 1024x768.</div>

 <div id="baserefs">
     <a href="/">Inicio</a>
     <?php if ($sf_user->isSuperAdmin()): ?>
         | <a href="http://localhost:8080/backend_dev.php" > Administración</a>
    <?php endif; ?>

     | <a href="/mapa"> Mapa del Sitio</a> |  Diseño y desarrollo por <a href="mailto:jhozue@hotmail.com">Jonathan Sánchez U.</a> con <a href="http://www.symfony-project.org/"><img src="/images/symfony.gif" alt="symfony framework" /></a>
     
      </div>
      <br/>
</p>
</div>


</body></html>