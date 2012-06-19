<div id="feature" class="span16">
	<div class="row">
		<div class="span14">
			<div class="padded">
				<h5>Matrix42 News:</h5> <h6><?=$feature->title?></h6> <h7><span class="italics"><?=substr($feature->subtitle, 0, 100)?></span>... <a href="/press/release/<?=$feature->id?>">more &gt;&gt;</a></h7>
			</div>
		</div>
		<div class="span2">
			<a href="#lead-form-anchor" class="btn btn-mini btn-inverse scroll"><span class="icon phone"></span> Request a Call!</a>
		</div>
	</div>
</div><!-- feature -->
<div class="span4">
	<img id="mdm-image" src="/assets/img/ipad-iphone-combo.jpg" alt="Matrix42 Mobile Device Management" />
</div>
<div class="span12">
	<div class="row">
		<div id="home-explanation" class="span6">
			<div class="padded-all">
				<h3>Why Matrix42?</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
				<h3>A little more about us</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non sapien a mauris	mattis congue. Ut a erat arcu. Duis semper laoreet convallis. Non sapien a mauris mattis congue. Ut a erat arcu. Duis semper</p>
			</div><!-- padded-all -->
		</div><!-- span6 -->
		<div class="span6 padded">
			<div id="latest-container" class="well margin-right">
				<ul id="latest" class="nav nav-tabs" data-tabs="latest">
					<li class="active"><a href="#press" data-toggle="tab">News</a></li>
					<li><a href="#blog" data-toggle="tab">Blog</a></li>
				<?php if($events->count() > 0): ?>
					<li><a href="#events" data-toggle="tab">Events</a></li>
				<?php endif; ?>
				</ul><!-- nav-tabs -->
				<div class="tab-content">
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
				</div><!-- tab-content -->
			</div><!-- well -->
		</div><!-- span4 -->
	</div><!-- row -->
</div><!-- span10 -->