<div id="banner" class="span16">
<?php if(isset($banner_content)): ?>
	<?=$banner_content?>
<?php else: ?>
	<div class="tag-content<?=$welled ? ' welled' : ''?>" style="top: <?=$top?>px; left: <?=$left?>px; width: <?=$title_width?>px;">
	<?php if(isset($title)): ?>
		<h1 style="color: <?=$title_color?>;"><?=mb_strtolower($title)?></h1>
	<?php endif; ?>
	<?php if(isset($subtitle)): ?>
		<h4 class="emphasis"><?=$subtitle?></h4>
	<?php endif; ?>
	</div>
	<img class="bg" src="/assets/img/banners/<?=$image?>" alt="" />
<?php endif; ?>
</div>