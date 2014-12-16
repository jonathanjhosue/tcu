
 <fieldset>
    <legend> Imágenes </legend>

    
      <?php foreach($ultimos as $headline): ?>
          
         <?php echo link_to(image_tag('/uploads/galerias/thumbnail/'.$headline->getImagen(),'alt_title=Imágen  '.$headline->getNombre().' width=130'), 'foto/show?id='.$headline->getId()) ?>
     
         <?php echo link_to($headline->getNombre(),'foto/show?id='.$headline->getId()) ?>
     
<hr/>
      <?php endforeach ?>
    </fieldset>


