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
			<h2>Who we are</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
			<h2>What we do</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
			<h2>Why Matrix42?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
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
</div><!-- span10 -->
<div class="span16">
	<?=$lead_form?>
</div><!-- span12 -->