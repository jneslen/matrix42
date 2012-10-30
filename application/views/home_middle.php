<div id="home-middle" class="span16">
	<div class="row">
		<div class="span7 offset1">
			<div id="our-customers" class="padded-all">
				<h3 class="no-margin">Our Customers</h3>
				<div class="logo-container">
				<?php $count = 1; ?>
				<?php foreach($customers as $customer): ?>
					<img class="customer-<?=\Format::alpha_number($count, 0, null)?>" src="/assets/img/customers/<?=$customer->logo?>" border="0" alt="<?=$customer->company?>" />
				<?php $count++; ?>
				<?php endforeach; ?>
					<div class="clear"></div>
				</div><!-- logo-container -->
			</div><!-- our-customers -->
		</div><!-- span7 -->
		<div class="span8">
			<div id="making-waves" class="padded-all">
				<h3 class="no-margin">Making Waves:</h3>
				<div class="logo-container">
				<?php $count = 1; ?>
				<?php foreach($partners as $partner): ?>
					<?=$partner->link ? '<a href="'.$partner->link.'">' : ''?><img class="partner-<?=\Format::alpha_number($count, 0, null)?>" src="/assets/img/partners/<?=$partner->logo?>" border="0" alt="<?=$partner->company_name?>" width="100" /><?=$partner->link ? '</a>' : ''?>
				<?php $count++; ?>
				<?php endforeach; ?>
					<div class="clear"></div>
				</div><!-- logo-container -->
			</div><!-- making-waves -->
		</div><!-- span7 -->
	</div><!-- row -->
</div><!-- home-middle -->