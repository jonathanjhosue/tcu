
 <fieldset>
    <legend> Sitio al Azar </legend>

     <?php foreach($ultimos as $headline): ?>

                <?php echo link_to(image_tag('/uploads/logos/'.$headline->getImagen(),'alt_title=Logo  '.$headline->getNombre().'  width=130'), 'sitio/show?id='.$headline->getId()) ?>
     
                 <?php echo link_to($headline->getNombre(),'sitio/show?id='.$headline->getId()) ?>
                 <hr/>
     <?php endforeach ?>
     
 </fieldset>
