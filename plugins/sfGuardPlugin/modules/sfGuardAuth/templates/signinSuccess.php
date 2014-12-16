
<div class="info" id="2">
<img src="/iconos/close.png" class="close"/>
<ul>
<li>La acción requiere de autentificación de usuario.</li>
<li>Ingrese usuario y contraseña</li>
</ul>
</div>


<p>

</p>
<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
<br/>
<fieldset>
 <legend> Acceso</legend>
 <table>
    <?php echo $form ?>

  </table>
  <input type="submit" class="button bingresar" value="Ingresar" />
</fieldset>

<br/>
</form>
