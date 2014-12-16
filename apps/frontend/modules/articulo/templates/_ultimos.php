
 <fieldset>
    <legend> Ultimos Artículos </legend>

      <ul style="padding-left: 0px">
      
      <?php foreach($ultimos as $headline): ?>
        <li style="list-style:square inside url('/iconos/articulo.png');margin-bottom:5px;color:#ffffff;">
          <?php echo link_to($headline->getNombre(),'/articulo/show?id='.$headline->getId()) ?>
        </li>
      <?php endforeach ?>
      </ul>
    </fieldset>

