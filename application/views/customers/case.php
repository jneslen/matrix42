<div class="padded-content">
	<?php if($case->logo): ?>
	<img src="/assets/img/customers/<?=$case->logo?>" class="left" alt="<?=$case->company?>" />
	<div class="clear space"></div>
	<?php endif; ?>
	<?php if($case->video): ?>
	<?=$case->video?>
	<?php endif; ?>
	<?=$case->description?>
	<?php if($case->pdf): ?>
	<a href="/assets/uploads/<?=$case->pdf?>" class="btn btn-mini btn-icon" target="_blank"><span class="icon pdf"></span><?=__('download pdf')?></a>
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