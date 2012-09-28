<div id="home-middle" class="span16">
	<div class="row">
		<div class="span7 offset1">
			<div id="our-customers" class="padded-all">
				<h3 class="no-margin">Our Customers</h3>
				<div class="logo-container">
					<img class="customer-one" src="/assets/img/customers/<?=$customers[0]->logo?>" alt="<?=$customers[0]->company?>" />
					<img class="customer-two" src="/assets/img/customers/<?=$customers[1]->logo?>" alt="<?=$customers[1]->company?>" />
					<img class="customer-three" src="/assets/img/customers/<?=$customers[2]->logo?>" alt="<?=$customers[2]->company?>" />
					<img class="customer-four" src="/assets/img/customers/<?=$customers[3]->logo?>" alt="<?=$customers[3]->company?>" />
				</div><!-- logo-container -->
			</div><!-- our-customers -->
		</div><!-- span7 -->
		<div class="span7">
			<div id="making-waves" class="padded-all">
				<h3 class="no-margin">Making Waves:</h3>
				<div class="logo-container">
				<?php $count = 1; ?>
				<?php foreach($partners as $partner): ?>
					<?=$partner->link ? '<a href="'.$partner->link.'">' : ''?><img class="partner-<?=\Format::alpha_number($count, 0, null)?>" src="/assets/img/partners/<?=$partner->logo?>" border="0" alt="<?=$partner->company_name?>" /><?=$partner->link ? '</a>' : ''?>
				<?php $count++; ?>
				<?php endforeach; ?>
				</div><!-- logo-container -->
			</div><!-- making-waves -->
		</div><!-- span7 -->
	</div>
</div><!-- home-middle -->