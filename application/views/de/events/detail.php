<?php $date_format = $event->use_time ? 'human' : 'readable'; ?>
<?php $timezone = ($event->use_time AND $event->time_zone) ? ' ('.$event->time_zone.')' : ''; ?>
<div class="padded-content">
	<h1 class="emphasis"><?=$event->title?></h1>
<?php if($event->location): ?>
	<?=$event->html_location?>
<?php endif; ?>
	<h4 class="italics"><?=\Format::date($event->start_date, $date_format)?><?=$event->end_date ? '&nbsp;-&nbsp;'.\Format::date($event->end_date, $date_format) : ''?><?=$timezone?></h4>
<?php if($event->seats): ?>
	<h4>Remaining seats: <?=$event->remaining_seats?> / <?=$event->seats?></h4>
<?php endif; ?>
<?php if($event->fee): ?>
	<h5 class="secondary"><?=__('Price per seat')?>: <?=__('$')?> <?=money_format('%i', $event->fee)?></h5>
<?php endif; ?>
<?php if($event->link): ?>
	<h4>More info at: <a href="<?=$event->link?>" target="_blank"><?=$event->link?></a></h4>
<?php endif; ?>
<?php if($event->subtitle): ?>
	<p class="italics"><?=$event->subtitle?></p>
<?php endif; ?>
<?php if($event->thumbnail): ?>
	<div class="thumbnail left" style="margin: 0 10px 10px 0;"><img src="/assets/img/thumbnails/events/<?=$event->thumbnail?>" alt="<?=$event->title?>" /></div>
<?php endif; ?>
	<?=$event->html_description?>
<?php if($event->link): ?>
	<a href="<?=$event->link?>" class="btn btn-large btn-primary" target="_blank">Anmelden</a>
<?php endif; ?>
<?php if($event->internal_registration AND $event->remaining_seats > 0): ?>
	<a href="/events/registration/<?=$event->id?>" class="btn btn-large btn-primary">Anmelden</a>
<?php endif; ?>
	<div class="space"></div>
</div><!-- padded-content -->
<div class="well padded">
	<div class="left">
		<h3 class="no-margin">Lassen Sie Matrix42 befähigen, die Kontrolle über Ihre IT-Bedürfnisse zu sein.</h3>
		<h4 class="no-margin">Die perfekte IT-Lösung durch Anfrage unter Erste Schritte:</h4>
	</div>
	<div class="clearfix"></div>
</div><!-- well -->
<?=$lead_form?>