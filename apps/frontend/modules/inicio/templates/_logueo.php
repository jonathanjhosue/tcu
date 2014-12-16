


    <?php if (!$sf_user->isAuthenticated()): ?>

<?php

$class = sfConfig::get('app_sf_guard_plugin_signin_form', 'sfGuardFormSignin');
$form = new $class();
$form->verComo('list');

?>


<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
 <fieldset>
 <legend> Acceso</legend>
 <table>
    <?php echo $form ?>
  </table>
  <input type="submit" value="Ingresar" class="button bingresar"/>
    </fieldset>
</form>

<?php else: ?>
<form action="<?php echo url_for('@sf_guard_signout') ?>" method="post" name="formLogin" class="formLogin">
    <fieldset>
    <legend> Usuario</legend>

<label> -:<?php echo $sf_user->getGuardUser()->getUsername(); ?>:-  </label>

 <?php if ($sf_user->isSuperAdmin()): ?>
     <br/> <a href="http://localhost:8080/backend_dev.php" class="button bingresar" > Ir a Administración</a>
       <?php endif; ?>
<br/><br/>
    <input value="Cerrar Sesión" id="submit" class="button bcerrar" tabindex="3" type="submit">
   

      </fieldset>
</form>
<?php endif; ?>