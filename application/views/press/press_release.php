<div class="padded-content">
<h4><?=\Format::date($release->release_date, 'readable')?></h4>
<?php if($release->subtitle): ?>
	<p class="italics"><?=$release->subtitle?></p>
<?php endif; ?>
	<?=$release->content?>
</div><!-- padded-content -->