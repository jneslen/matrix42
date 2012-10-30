<div id="home-middle" class="span16">
	<div class="row">
		<div class="span7 offset2">
			<div id="our-customers" class="padded-all">
				<h3 class="no-margin">Analyst Endorsements</h3>
				<div class="logo-container">
				<?php $count = 1; ?>
				<?php foreach($analysts as $analyst): ?>
					<?=$analyst->link ? '<a href="'.$analyst->link.'">' : ''?><img class="analyst-<?=\Format::alpha_number($count, 0, null)?>" src="/assets/img/partners/<?=$analyst->logo?>" border="0" alt="<?=$analyst->company_name?>" /><?=$analyst->link ? '</a>' : ''?>
				<?php $count++; ?>
				<?php endforeach; ?>
					<div class="clear"></div>
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
					<div class="clear"></div>
				</div><!-- logo-container -->
			</div><!-- making-waves -->
		</div><!-- span7 -->
	</div><!-- row -->
</div><!-- home-middle -->