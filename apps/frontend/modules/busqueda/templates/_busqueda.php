    <form action="<?php echo url_for('busqueda/index'); ?>" method="post" name="formBusqueda" class="formBusqueda">
    <fieldset>
    <legend> Búsqueda</legend>
    <input id="palabras" name="palabras" tabindex="2" value="" title="palabras a buscar en Articulos" type="text" size="15" maxlength="35">
<input value="Buscar" id="submit" title="Buscar en Articulos" class="button bbuscar" tabindex="3" type="submit">
    </fieldset>
    </form>