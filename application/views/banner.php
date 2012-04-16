<div id="banner" class="span16">
<?php if(isset($banner_content)): ?>
	<?=$banner_content?>
<?php else: ?>
	<div class="tag-content" style="top: <?=isset($top) ? $top : '20'?>px; left: <?=isset($left) ? $left : '700'?>px; width: <?=isset($width) ? $width : '500'?>px;">
	<?php if(isset($title)): ?>
		<h1><?=strtolower($title)?></h1>
	<?php endif; ?>
	<?php if(isset($subtitle)): ?>
		<h4 class="emphasis"><?=$subtitle?></h4>
	<?php endif; ?>
	</div>
	<img class="bg" src="/assets/img/banners/<?=$image?>" alt="" />
<?php endif; ?>
</div>