<div class="span16 large-space"></div>
<div class="span6">
	<img src="/assets/img/ipad-iphone-combo.jpg" alt="Matrix42 Mobile Device Management" />
</div>
<div class="span10">
		<div class="well margin-right">
			<div class="left">
				<h2 class="no-margin">Latest Matrix42 News: <?=$feature->title?></h2>
				<h4 class="no-margin"><?=substr($feature->subtitle, 0, 100)?>... <a href="/press/release/<?=$feature->id?>">more &gt;&gt;</a></h4>
			</div>
			<div class="clearfix"></div>
		</div><!-- well -->
		<div class="span6 dashed-right margin-clear">
			<div id="our-customers">
				<h2>Our Customers</h2>
				<p>This is a write up about how we help our customers. Phasellus condimentum consectetur tincidunt. Etiam ut facilisis sapien. Aenean euismod commodo cursus.</p>
				<div class="logo-container">
					<img class="customer-one" src="/assets/img/customers/<?=$customers[0]->logo?>" alt="<?=$customers[0]->company?>" />
					<img class="customer-two" src="/assets/img/customers/<?=$customers[1]->logo?>" alt="<?=$customers[1]->company?>" />
					<img class="customer-three" src="/assets/img/customers/<?=$customers[2]->logo?>" alt="<?=$customers[2]->company?>" />
					<img class="customer-four" src="/assets/img/customers/<?=$customers[3]->logo?>" alt="<?=$customers[3]->company?>" />
				</div><!-- logo-container -->
			</div><!-- our-customers -->
			<div id="making-waves">
				<h2>Making Waves</h2>
				<p>Our Service partners allow Matrix42 to provide our customers with the upmost hasellus condimentum consectetur tincidunt. Etiam ut facilisis sapien. Aenean euismod commodo cursus.</p>
				<div class="logo-container">
					<img class="partner-one" src="/assets/img/partners/<?=$partners[0]->company->logo?>" alt="<?=$partners[0]->company->name?>" />
					<img class="partner-two" src="/assets/img/partners/<?=$partners[1]->company->logo?>" alt="<?=$partners[1]->company->name?>" />
					<img class="partner-three" src="/assets/img/partners/<?=$partners[2]->company->logo?>" alt="<?=$partners[2]->company->name?>" />
					<img class="partner-four" src="/assets/img/partners/<?=$partners[3]->company->logo?>" alt="<?=$partners[3]->company->name?>" />
				</div><!-- logo-container -->
			</div><!-- making-waves -->
			<div id="success-stories">
				<h2>Success Stories</h2>
				<p class="quote"><span class="italics">&quot;Matrix42 gave me the tools I needed to manage my Technology department and make my job easy&quot;</span></p>
				<p class="right margin-right"><span class="bold">John Doe</span> IT Director, Company One</p>
				<div class="clear"></div>
			</div><!-- success-stories-->
		</div><!-- span6 -->
		<div class="span4 margin-clear margin-right padded">
			<h2>Latest Matrix42</h2>
			<div id="latest-container" class="well margin-right">
				<ul id="latest" class="nav nav-tabs" data-tabs="latest">
					<li class="active"><a href="#blog" data-toggle="tab">Blog</a></li>
					<li><a href="#events" data-toggle="tab">Events</a></li>
					<li><a href="#press" data-toggle="tab">Press</a></li>
				</ul><!-- nav-tabs -->
				<div class="tab-content">
					<div class="tab-pane active" id="blog">
						<ul class="listed">
						<?php foreach($blogs as $blog): ?>
							<li>
								<a href="<?=$blog->link?>" class="thumbnail left"><img src="/assets/img/thumbnails/blog/blog.png" alt="<?=$blog->title?>" /></a>
								<h4><a href="<?=$blog->link?>"><?=$blog->title?></a></h4>
								<p><?=substr(strip_tags($blog->description), 0, 40)?>...</p>
								<div class="clear"></div>
								<span class="italics"><?=\Format::date($blog->pubDate, 'human')?></span>
							</li>
						<?php endforeach; ?>
						</ul>
					</div><!-- blog -->
					<div class="tab-pane" id="events">
						<ul class="listed">
						<?php foreach($events as $event): ?>
							<li>
								<a href="/events/detail/<?=$event->id?>" class="thumbnail left"><img src="/assets/img/thumbnails/events/<?=$event->thumbnail ? $event->thumbnail : $event->type.'-event.png'?>" alt="<?=ucfirst($event->type)?> Event Thumbnail" /></a>
								<h4><a href="/events/detail/<?=$event->id?>"><?=substr($event->title, 0, 40)?></a></h4>
							<?php $date_format = $event->use_time ? 'human' : 'readable'; ?>
								<h5><?=$event->location ? $event->location : ''?></h5>
								<div class="clear"></div>
								<h5 class="italics"><?=\Format::date($event->start_date, $date_format)?><?=$event->end_date ? '&nbsp;-&nbsp;'.\Format::date($event->end_date, $date_format) : ''?></h5>
							</li>
						<?php endforeach; ?>
						</ul>
					</div><!-- events -->
					<div class="tab-pane" id="press">
						<ul class="listed">
						<?php foreach($press_releases as $release): ?>
							<li>
								<a href="/press/release/<?=$release->id?>" class="thumbnail left"><img src="/assets/img/thumbnails/press/<?=$release->thumbnail ? $release->thumbnail : 'press-release.png'?>" alt="Press Thumbnail" /></a>
								<h4><a href="/press/release/<?=$release->id?>"><?=substr($release->title, 0, 40)?></a></h4>
								<h5 class="italics"><?=\Format::date($release->release_date, 'readable')?></h5>
								<p><?=substr(strip_tags($release->content), 0, 40)?>...</p>
								<div class="clear"></div>
							</li>
						<?php endforeach; ?>
						</ul>
					</div><!-- press -->
				</div><!-- tab-content -->
			</div><!-- well -->
		</div><!-- span4 -->
</div><!-- span10 -->
<div class="span16">
	<?=$lead_form?>
</div><!-- span12 -->