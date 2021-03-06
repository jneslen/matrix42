<div class="span16 space"></div>
<div class="span4">
	<img id="mdm-image" src="/assets/img/ipad-iphone-combo.jpg" alt="Matrix42 Mobile Device Management" />
</div>
<div class="span12">
	<div class="row">
		<div id="home-explanation" class="span6 dashed-right">
			<div class="padded-all">
				<h3>Why Matrix42?</h3>
				<p>Today&#39;s workplace is a dynamic environment with workers connected from multiple places using multiple devices and types of systems. This creates more complexity and greater demands for security from IT, often within tighter budgetary parameters. Cloud-based services make it easier for employees to use their own devices to access data and services and bypass IT. The same, end-point focused approach of technology providers just doesn&#39;t cut it anymore. Organizations need a holistic approach that empowers both IT departments and end users.</p>
				<p>Matrix42 is a pioneer in providing Workplace Management solutions and is the only company that can seamlessly manage mobile, virtual and physical environments. It is also the only company to offer all these services through a cloud-based platform. IT administrators can ensure access, security and compliance. Users can access data and services from anywhere at any time, and they can add their own devices and order services within company policies. Most importantly, Matrix42 improves employee productivity, IT efficiencies, cost savings and user satisfaction that all contribute to the profitability of the organization.</p>
			</div><!-- padded-all -->
		</div><!-- span6 -->
		<div class="span6">
			<div class="padded-all">
				<div id="latest-container" class="well">
					<ul id="latest" class="nav nav-tabs" data-tabs="latest">
						<li class="active"><a href="#press" data-toggle="tab">News</a></li>
						<?php if($events->count() > 0): ?>
						<li><a href="#events" data-toggle="tab">Events</a></li>
						<?php endif; ?>
						<li><a href="#blog" data-toggle="tab">Blog</a></li>
					</ul><!-- nav-tabs -->
					<div class="tab-content">
						<div class="tab-pane active" id="press">
							<div class="padded"><a href="/press">view all <span class="carrot">&gt;&gt;</span></a></div>
							<ul class="listed">
								<?php foreach($press_releases as $release): ?>
								<li>
									<a href="/press/release/<?=$release->id?>" class="thumbnail left"><img width="50" height="50" src="/assets/img/thumbnails/press/<?=$release->thumbnail ? $release->thumbnail : 'press-release.png'?>" alt="Press Thumbnail" /></a>
									<h4><a href="/press/release/<?=$release->id?>"><?=substr($release->title, 0, 40)?></a></h4>
									<h5 class="italics"><?=\Format::date($release->release_date, 'readable')?></h5>
									<h5><?=substr(strip_tags($release->content), 0, 40)?>...</h5>
									<div class="clear"></div>
								</li>
								<?php endforeach; ?>
							</ul>
						</div><!-- press -->
						<?php if($events->count() > 0): ?>
						<div class="tab-pane" id="events">
							<div class="padded"><a href="/events">view all <span class="carrot">&gt;&gt;</span></a></div>
							<ul class="listed">
								<?php foreach($events as $event): ?>
								<li>
									<a href="/events/detail/<?=$event->id?>" class="thumbnail left"><img src="/assets/img/thumbnails/events/<?=$event->thumbnail ? $event->thumbnail : $event->type.'-event.png'?>" alt="<?=ucfirst($event->type)?> Event Thumbnail" /></a>
									<h4><a href="/events/detail/<?=$event->id?>"><?=substr($event->title, 0, 40)?></a></h4>
									<?php $date_format = $event->use_time ? 'human' : 'readable'; ?>
									<h5><?=$event->location ? $event->location : ''?></h5>
									<h5 class="italics"><?=\Format::date($event->start_date, $date_format)?><?=$event->end_date ? '&nbsp;-&nbsp;'.\Format::date($event->end_date, $date_format) : ''?></h5>
									<div class="clear"></div>
								</li>
								<?php endforeach; ?>
							</ul>
						</div><!-- events -->
						<?php endif; ?>
						<div class="tab-pane" id="blog">
							<ul class="listed">
							<?php foreach($blogs as $blog): ?>
								<li>
									<a href="<?=$blog->link?>" class="thumbnail left"><img src="/assets/img/thumbnails/blog/blog.png" alt="<?=$blog->title?>" /></a>
									<h4><a href="<?=$blog->link?>"><?=$blog->title?></a></h4>
									<h5><?=substr(strip_tags($blog->description), 0, 40)?>...</h5>
									<span class="italics"><?=\Format::date($blog->pubDate, 'human')?></span>
									<div class="clear"></div>
								</li>
							<?php endforeach; ?>
							</ul>
						</div><!-- blog -->
					</div><!-- tab-content -->
				</div><!-- well -->
			</div><!-- padded-all -->
		</div><!-- span4 -->
	</div><!-- row -->
</div><!-- span10 -->
<div class="span16 space"></div>