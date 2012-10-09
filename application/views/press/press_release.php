<div class="padded-content">
<?php if($release->thumbnail): ?>
<img src="/assets/img/thumbnails/press/<?=$release->thumbnail?>" class="left" alt="<?=$release->title?>" />
<div class="clear"></div>
<?php endif; ?>
<h4 class="emphasis"><?=\Format::date($release->release_date, 'readable')?></h4>
<?php if($release->subtitle): ?>
<p class="italics"><?=$release->subtitle?></p>
<?php endif; ?>
<?=$release->markdown('content')?>
<?php if($release->link): ?>
<a href="<?=$release->link?>" class="btn btn-mini" target="_blank"><?=__('read more')?></a>
<?php endif; ?>
</div><!-- padded-content -->
<div class="space"></div>
<div class="well padded">
	<div class="left">
		<h3 class="no-margin">Let Matrix42 empower you to be in control of your IT needs.</h3>
		<h4 class="no-margin">Get started with the perfect IT solution by inquiring below:</h4>
	</div>
	<div class="clearfix"></div>
</div><!-- well -->
<?=$lead_form?>