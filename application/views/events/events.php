<ul class="listed">
	<?php foreach($events as $event): ?>
	<li>
		<a href="/events/detail/<?=$event->id?>" class="thumbnail left"><img src="/assets/img/thumbnails/events/<?=$event->thumbnail ? $event->thumbnail : $event->type.'-event.png'?>" alt="<?=ucfirst($event->type)?> Event Thumbnail" /></a>
		<h4><a href="/events/detail/<?=$event->id?>"><?=$event->title?></a></h4>
		<?php $date_format = $event->use_time ? 'human' : 'readable'; ?>
		<h5><?=$event->location ? $event->location : ''?></h5>
		<h5 class="italics"><?=\Format::date($event->start_date, $date_format)?><?=$event->end_date ? '&nbsp;-&nbsp;'.\Format::date($event->end_date, $date_format) : ''?></h5>
		<p><?=substr(strip_tags($event->description), 0, 255)?>...<a href="/events/detail/<?=$event->id?>">more &gt;&gt;</a></p>
		<div class="clear"></div>
	</li>
	<?php endforeach; ?>
</ul>