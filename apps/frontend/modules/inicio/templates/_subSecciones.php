<ul class="tabs">
<?php $num=1 ?>
 <?php foreach ($subseccion_list as $subseccion): ?>
             <li><a href="#" id="tab_<?php echo $num ?>"  title="div<?php echo Funciones::slugify($subseccion->getNombre()) ?>"  class="tab <?php echo $num==1? 'active':'' ?>"><?php echo $subseccion->getNombre() ?></a></li>

  <?php $num++ ?>
  <?php endforeach;  ?>
</ul>
<?php $num=1 ?>
 <?php foreach ($sf_data->getRaw('subseccion_list') as $subseccion): ?>
 <div id="div<?php echo Funciones::slugify($subseccion->getNombre()) ?>"  class="div_contenido  <?php echo $num==1? 'active':'' ?>" >
   <?php      echo $subseccion->getTexto()  ?>
 </div>
  <?php $num++ ?>
  <?php endforeach;  ?>
