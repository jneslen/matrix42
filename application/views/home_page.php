<div class="span16 space"></div>
<div class="span6">
	<img id="mdm-image" src="/assets/img/ipad-iphone-combo.jpg" alt="Matrix42 Mobile Device Management" />
</div>
<div class="span10">
		<div class="well margin-right">
			<div class="left">
				<h2 class="no-margin">Latest Matrix42 News: <?=$feature->title?></h2>
				<h4 class="no-margin"><?=substr($feature->subtitle, 0, 100)?>... <a href="/press/release/<?=$feature->id?>">more &gt;&gt;</a></h4>
			</div>
			<div class="clearfix"></div>
		</div><!-- well -->
	<div class="row">
		<div class="span6 dashed-right">
			<h2>Why Matrix42?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
			<div id="making-waves" class="padded-top-half">
				<h2>Making Waves</h2>
				<div class="logo-container">
					<img class="partner-one" src="/assets/img/partners/<?=$partners[0]->company->logo?>" alt="<?=$partners[0]->company->name?>" />
					<img class="partner-two" src="/assets/img/partners/<?=$partners[1]->company->logo?>" alt="<?=$partners[1]->company->name?>" />
					<img class="partner-three" src="/assets/img/partners/<?=$partners[2]->company->logo?>" alt="<?=$partners[2]->company->name?>" />
					<img class="partner-four" src="/assets/img/partners/<?=$partners[3]->company->logo?>" alt="<?=$partners[3]->company->name?>" />
				</div><!-- logo-container -->
			</div><!-- making-waves -->
			<h2>A little more about us</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
		</div><!-- span6 -->
		<div class="span4 padded">
			<h2>Latest Matrix42</h2>
			<div id="latest-container" class="well margin-right">
				<ul id="latest" class="nav nav-tabs" data-tabs="latest">
					<li class="active"><a href="#blog" data-toggle="tab">Blog</a></li>
				<?php if($events->count() > 0): ?>
					<li><a href="#events" data-toggle="tab">Events</a></li>
				<?php endif; ?>
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
			<?php if($events->count() > 0): ?>
					<div class="tab-pane" id="events">
						<div class="padded"><a href="/events">view all &gt;&gt;</a></div>
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
			<?php endif; ?>
					<div class="tab-pane" id="press">
						<div class="padded"><a href="/press">view all &gt;&gt;</a></div>
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
	</div><!-- row -->
</div><!-- span10 -->