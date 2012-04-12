<div id="breadcrumb-bar">
	<div class="breadcrumb-level">
		<?php foreach ($links as $title => $href): $i++; ?>
		<?php if ($i > 1): ?>
		<span class="carrot">&gt;</span>
			<?php endif; ?>
		<a href="<?=$href?>"><?=$title?></a>
		<?php endforeach; ?>
		<?php if($page_title): ?>
		<span class="carrot">&gt;</span>
		<span><?=$page_title?></span>
		<?php endif; ?>
	</div> <!-- breadcrumb-level -->
</div> <!-- breadcrumb-bar -->