<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
      <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_javascripts() ?>
    <?php include_stylesheets() ?>

  </head>
  <body>
	<div id="banner">

         <img id="escudo" src="/images/escudo.gif">
              <img id="escudo" src="/images/letras.gif">
<img id="cintillo" src="/images/puntos.gif">


	</div>

      <div id="menu">
    <ul>
       <li><a href="<?php echo url_for('@tcu') ?>" target="_self" title="Tcu"><span>Tcu</span></a></li>
       <li><a href="<?php echo url_for('@persona') ?>" target="_self" title="Usuarios"><span>Personas</span></a></li>
       <li><a href="<?php echo url_for('@encargado') ?>" target="_self" title="Encargado"><span>Encargado</span></a></li>
       <li><a href="<?php echo url_for('@sf_guard_user') ?>" target="_self" title="Usuarios"><span>Usuarios</span></a></li>
       <li><a href="<?php echo url_for('@seccion') ?>" target="_self" title="Secciones"><span>Secciones</span></a></li>
       <li><a href="<?php echo url_for('@subseccion') ?>" target="_self" title="Subsecciones"><span>Subsecciones</span></a></li>
       <li><a href="<?php echo url_for('@enlace') ?>" target="_self" title="Enlaces"><span>Enlaces</span></a></li>      
    </ul>
   
      </div>
 
      <div id="content">
     
      <h1>
      Administración
      </h1>
        <?php echo $sf_content ?>
       <img id="derecha" src="/images/logo.png">
      </div>
 
      <div id="footer">

      <p>
       
      TCU Educación para el Manejo de Desechos en la Región Occidental del Valle Central
      </p>
      <hr/>
        <a href="/index.php" target="_self" title="Enlaces" class="button bir">Regresar al Sitio</a> &nbsp;&nbsp;

        <?php if ($sf_user->isAuthenticated()) echo link_to('Cerrar Sessión','@sf_guard_signout',array('class'=>'button bcerrar',)); ?>&nbsp;&nbsp;

         Desarrollado por <a href="mailto:jhozue@hotmail.com"> jhozue@hotmail.com </a>
      </div>

  
  </body>
</html>
