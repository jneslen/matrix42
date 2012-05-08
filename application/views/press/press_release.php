<div class="padded-content">
<h4><?=\Format::date($release->release_date, 'readable')?></h4>
<?php if($release->subtitle): ?>
	<p class="italics"><?=$release->subtitle?></p>
<?php endif; ?>
	<?=$release->content?>
</div><!-- padded-content -->
<div class="well padded">
	<div class="left">
		<h3 class="no-margin">Let Matrix42 empower you to be in control of your IT needs.</h3>
		<h4 class="no-margin">Get started with the perfect IT solution by inquiring below:</h4>
	</div>
	<div class="clearfix"></div>
</div><!-- well -->
<?=$lead_form?>