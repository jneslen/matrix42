<div class="breadcrumb-level">
	<?php foreach ($links as $title => $href): $i++; ?>
	<?php if ($i > 1): ?>
		<span class="carrot left">&gt;</span>
		<?php endif; ?>
	<h3>
	<?php if($href === null): ?>
		<?=$title?>
	<?php else: ?>
		<a href="<?=$href?>"><?=$title?></a>
	<?php endif; ?>
	</h3>
	<?php endforeach; ?>
	<?php if($page_title): ?>
	<span class="carrot left">&gt;</span>
	<h3><?=$page_title?></h3>
	<?php endif; ?>
	<div class="clear"></div>
</div> <!-- breadcrumb-level -->