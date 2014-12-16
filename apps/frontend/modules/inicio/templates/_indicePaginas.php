
<?php if (isset ($paginador) && $paginador->haveToPaginate() ): ?>
  <div class="pagination">

    <a href="?pagina=1">
      <img src="/iconos/primera.png" alt="Primera página" />
    </a>

    <a href="?pagina=<?php echo $paginador->getPreviousPage() ?>">
      <img src="/iconos/anterior.png" alt="Página anterior" title="Página anterior" />
    </a>

    <?php foreach ($paginador->getLinks() as $pagina): ?>
      <?php if ($pagina == $paginador->getPage()): ?>
        <strong style="font-size:150%;"> .:<?php  echo $pagina ?>:.</strong>
      <?php else: ?>
        <a href="?pagina=<?php echo $pagina ?>"><?php echo $pagina ?></a>
      <?php endif; ?>
    <?php endforeach; ?>

    <a href="?pagina=<?php echo $paginador->getNextPage() ?>">
      <img src="/iconos/siguiente.png" alt="Página siguiente" title="Página siguiente" />
    </a>

    <a href="?pagina=<?php echo $paginador->getLastPage() ?>">
      <img src="/iconos/ultima.png" alt="Última página" title="Última pagina" />
    </a>
  </div>
<?php endif; ?>