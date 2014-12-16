 <fieldset>
    <legend> Enlaces de Interés </legend>
     <?php foreach($ultimos as $headline): ?>
         <a href="http://<?php echo $headline->getWeb()  ?>" >
          <?php echo image_tag('/uploads/enlaces/'.$headline->getImagen(),'alt_title=Enlace a  '.$headline->getNombre().'  width=130') ?>
          <?php echo $headline->getNombre() ?>
            </a>
            <hr/>
     <?php endforeach ?>
 </fieldset>