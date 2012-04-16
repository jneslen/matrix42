<div class="breadcrumb-level">
	<?php foreach ($links as $title => $href): $i++; ?>
	<?php if ($i > 1): ?>
		<span class="carrot left">&gt;</span>
		<?php endif; ?>
	<h4><a href="<?=$href?>"><?=$title?></a></h4>
	<?php endforeach; ?>
	<?php if($page_title): ?>
	<span class="carrot left">&gt;</span>
	<h4><?=$page_title?></h4>
	<?php endif; ?>
	<div class="clear"></div>
</div> <!-- breadcrumb-level -->