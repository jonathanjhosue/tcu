<script type="text/javascript">
<!--
$(document).ready(function(){
	
	// mensaje de exito, si clickean en la cruz se saca
	$('.success .close').click(function(){
		$(this).parent().fadeOut('slow', function(){
			$(this).remove();	
		});
	});
	
	// descomentar esto para activar el auto-quitado del mensaje en 6 segundos
	// si el usuario no lo a quitado
	setTimeout('$(".success .close").trigger("click")', 6000);

	/**
	 para un cuadro informativo que se le muestra al usuario
	 mientras el usuario no lo cierre se sigue mostrando
	 el usuario lo cierra cuando no desea verlo mas,
	 en este caso es necesario establecer esto mediante una accion
	 la cual la quitamos mediante una llamada ajax
	**/

	$('.info .close').click(function(){
		var id = $(this).parent().attr('id');
		$(this).parent().fadeOut('slow', function(){
			$.ajax({
				type:'POST',
				dataType:'html',
				url:'<?php echo url_for('direccion/deaccion') ?>/id/'+id
			});
			$(this).remove();
		});
	});
	
});
//-->
</script>

        <?php if ($sf_user->hasFlash('notice')): ?>
          <div class="success">
	    <img src="/iconos/close.png" class="close"/>
	    <ul>
	    <li><?php echo $sf_user->getFlash('notice')  ?></li>
	    </ul>
          </div>
        <?php endif; ?>
 
        <?php if ($sf_user->hasFlash('error')): ?>
          <div class="error">
	    <ul>
	    <li><?php echo $sf_user->getFlash('error')  ?></li>
	    </ul>
          </div>
        <?php endif; ?>

<?php if ($sf_user->hasFlash('success')): ?>
<div class="success">
<img src="/iconos/close.png" class="close"/>
<ul>
<li><?php echo  $sf_user->getFlash('success') ?></li>
</ul>
</div>
<?php endif; ?>
