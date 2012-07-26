<div class="span16 space"></div>
<div class="span4">
	<img id="mdm-image" src="/assets/img/ipad-iphone-combo.jpg" alt="Matrix42 Mobile Device Management" />
</div>
<div class="span12">
	<div class="row">
		<div id="home-explanation" class="span6 dashed-right">
			<div class="padded-all">
				<h3>Warum Matrix42?</h3>
				<p>Am dynamischen Arbeitsplatz von heute sind die Mitarbeiter an unterschiedlichen Standorten über mehrere Geräte und verschiedene Systeme miteinander verbunden. Dies führt zu mehr Komplexität und höheren Sicherheitsanforderungen an IT, oftmals begleitet von schmäleren Budgets. Cloud-basierte Services erleichtern Mitarbeitern den Einsatz ihrer eigenen Geräte, um Daten/Services aufzurufen und IT zu umgehen. Der herkömmliche Endpoint-orientierte Ansatz der Technologie-Anbieter reicht einfach nicht mehr aus. Unternehmen brauchen einen ganzheitlichen Ansatz, der beiden, den IT-Abteilungen und den Endanwendern, mehr Kontrolle überlässt.</p>
				<p>Matrix42 ist ein Pionier der Bereitstellung von Workplace Management-Lösungen und das einzige Unternehmen, das mobile, virtuelle und physische Umgebungen problemlos verwalten kann. IT-Administratoren können über eine einzige Management-Konsole für Zugriff, Sicherheit und Compliance sorgen. Anwender können Daten und Services überall und jederzeit abrufen und Geräte im Rahmen der Unternehmensrichtlinien über eine zentrale Stelle hinzufügen oder bestellen. Wesentlich ist, dass Matrix42 die Produktivität der Mitarbeiter, IT-Effizienz, Kosteneinsparungen und die Zufriedenheit der Anwender verbessert, was wiederum zur Profitabilität des Unternehmens beiträgt.</p>
				<p>Matrix42 Software verwaltet mehr als 6 Millionen Kunden und stellt seit 20 Jahren Workplace Management-Lösungen bereit. Schließen Sie sich den 2.500 Kunden weltweit an und übernehmen Sie noch heute die Kontrolle über Ihren Arbeitsplatz mit Matrix42.</p>
			</div><!-- padded-all -->
		</div><!-- span6 -->
		<div class="span6">
			<div class="padded-all">
				<div id="latest-container" class="well">
					<ul id="latest" class="nav nav-tabs" data-tabs="latest">
						<li class="active"><a href="#press" data-toggle="tab">Nachrichten</a></li>
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
									<a href="/press/release/<?=$release->id?>" class="thumbnail left"><img width="50" height="50" src="/assets/img/thumbnails/press/<?=$release->thumbnail ? $release->thumbnail : 'press-release.png'?>" alt="Presse Thumbnail" /></a>
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