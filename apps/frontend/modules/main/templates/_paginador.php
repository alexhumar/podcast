<?php if ($pager->haveToPaginate()) { ?>

<div id="paginacion">
	<span class="page"><?php echo link_to('Primera', 'main/index?page='.$pager->getFirstPage(),'class="pager"') ?></span>
	<span class="page"><?php echo link_to('Anterior', 'main/index?page='.$pager->getPreviousPage(),'class="pager"' ) ?></span>
	<span class="page"><?php $links = $pager->getLinks(); foreach ($links as $page): ?>
	<?php echo ($page == $pager->getPage()) ? $page : link_to($page, 'main/index?page='.$page,'class="pager"') ;?>
	<?php if ($page != $pager->getCurrentMaxLink()): ?> <?php endif ?>
	<?php endforeach ?></span>
	<span class="page"><?php echo link_to('Siguiente', 'main/index?page='.$pager->getNextPage(),'class="pager"') ?></span>
	<span class="page"><?php echo link_to('Ultima', 'main/index?page='.$pager->getLastPage(),'class="pager"') ?></span>
</div>

<?php } ?>