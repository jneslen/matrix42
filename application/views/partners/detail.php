<div class="padded-content">
	<h2 class="emphasis left"><?=$partner->company_name?></h2>
	<?php if($partner->logo): ?>
	<span class="icon certificate left"></span>
	<?php endif; ?>
	<div class="clear"></div>
	<?php if($partner->logo): ?>
	<div class="left" style="margin: 0 10px 10px 0;"><img src="/assets/img/partners/<?=$partner->logo?>" alt="<?=$partner->company_name?>" /></div>
	<?php endif; ?>
	<div class="left">
		<h3><a class="secondary" href="mailto:<?=$partner->email?>"><span class="icon email"></span><?=$partner->email?></a></h3>
		<?php if($partner->website): ?>
		<h3><a href="http://<?=$partner->website?>" target="_blank"><span class="icon home"></span><?=$partner->website?></a></h3>
		<?php endif; ?>
	</div>
	<div class="clear"></div>
	<?=$partner->markdown('description')?>
	<div class="clear"></div>
	<h3 class="secondary">Locations:</h3>
	<div class="row">
		<?php $count = 0; ?>
		<?php foreach($partner->addresses as $address): ?>
		<div class="span4 well<?=$count % 2 ? ' offset1' : ''?>">
			<div class="well-container">
				<div class="padded">
					<h4><?=$partner->company_name?><?=count($partner->addresses) > 1 ? ' ('.$address->city.')' : ''?></h4>
					<?=$address->formatted_address?>
					<h4><?=$address->related_phone?></h4>
					<?php if($partner->website): ?>
					<a href="http://<?=$partner->website?>" target="_blank" class="icon home left"></a>
					<?php endif; ?>
					<a href="mailto:<?=$partner->email?>" class="icon email left"></a>
					<div class="clear"></div>
				</div><!-- padded -->
			</div><!-- well-container -->
		</div><!-- well -->
		<?=$count % 2 ? '</div><div class="row">' : ''?>
		<?php $count++; ?>
		<?php endforeach; ?>
	</div><!-- row -->
</div><!-- padded-content -->
<div class="well padded">
	<div class="left">
		<h3 class="no-margin">Let Matrix42 empower you to be in control of your IT needs.</h3>
		<h4 class="no-margin">Get started with the perfect IT solution by inquiring below:</h4>
	</div>
	<div class="clearfix"></div>
</div><!-- well -->
<?=$lead_form?>