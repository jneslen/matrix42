<div class="padded-content">
	<h4 class="emphasis"><?=\Format::date($award->release_date, 'readable')?></h4>
	<?php if($award->subtitle): ?>
	<p class="italics"><?=$award->subtitle?></p>
	<?php endif; ?>
	<?=$award->content?>
</div><!-- padded-content -->
<div class="well padded">
	<div class="left">
		<h3 class="no-margin">Let Matrix42 empower you to be in control of your IT needs.</h3>
		<h4 class="no-margin">Get started with the perfect IT solution by inquiring below:</h4>
	</div>
	<div class="clearfix"></div>
</div><!-- well -->
<?=$lead_form?>