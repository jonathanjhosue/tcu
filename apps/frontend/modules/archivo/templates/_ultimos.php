   
   
<div>
 <fieldset>
    <legend> Ultimos Archivos </legend>

      <ul style="padding-left: 0px">

      
      <?php foreach($noticias as $headline): ?>
        <li style="list-style:square inside url('/iconos/up.png');margin-bottom:5px;">
          <?php echo link_to($headline->getNombre(),'archivo/show?id='.$headline->getId()) ?>
        </li>
      <?php endforeach ?>
      </ul>
 </fieldset>

</div>
