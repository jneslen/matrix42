<div id="home-middle" class="span16" xmlns="http://www.w3.org/1999/html">
	<div class="row">
		<div class="span6 offset1">
			<div id="our-customers" class="padded-top-half">
				<h3 class="no-margin">Our Customers</h3>
				<div class="logo-container">
					<img class="customer-one" src="/assets/img/customers/<?=$customers[0]->logo?>" alt="<?=$customers[0]->company?>" />
					<img class="customer-two" src="/assets/img/customers/<?=$customers[1]->logo?>" alt="<?=$customers[1]->company?>" />
					<img class="customer-three" src="/assets/img/customers/<?=$customers[2]->logo?>" alt="<?=$customers[2]->company?>" />
					<img class="customer-four" src="/assets/img/customers/<?=$customers[3]->logo?>" alt="<?=$customers[3]->company?>" />
				</div><!-- logo-container -->
			</div><!-- our-customers -->
		</div><!-- span6 -->
		<div class="span7 offset1">
			<div id="making-waves" class="padded-top-half">
				<h3 class="no-margin">Making Waves:</h3>
				<div class="logo-container">
				<?php $count = 1; ?>
				<?php foreach($partners as $partner): ?>
					<?=$partner->link ? '<a href="'.$partner->link.'">' : ''?><img class="partner-<?=\Format::alpha_number($count, 0, null)?>" src="/assets/img/partners/<?=$partner->logo?>" border="0" alt="<?=$partner->company_name?>" /><?=$partner->link ? '</a>' : ''?>
				<?php $count++; ?>
				<?php endforeach; ?>
				</div><!-- logo-container -->
			</div><!-- making-waves -->
		</div><!-- span6 -->
	</div>
</div><!-- home-middle -->
<?php /*
<div id="home-middle" class="span16">
	<div class="mitsume center">
		<div class="middle-container">
			<h3 class="left">Who We are</h3><a href="/"><span class="icon play right"></span></a>
			<div class="clear"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis.</p>
			<a href="/">Learn more &gt;&gt;</a>
		</div>
	</div>
	<div class="mitsume center">
		<div class="middle-container">
			<h3 class="left">What We do</h3><a href="/"><span class="icon play right"></span></a>
			<div class="clear"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis.</p>
			<a href="/">Learn more &gt;&gt;</a>
		</div>
	</div>
	<div class="mitsume center">
		<div class="middle-container">
			<h3 class="left">Why Matrix42</h3><a href="/"><span class="icon play right"></span></a>
			<div class="clear"></div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis.</p>
			<a href="/">Learn more &gt;&gt;</a>
		</div>
	</div>
</div>
 */
?>