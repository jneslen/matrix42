<?php $form->html(); ?>
<?=$states_js?>
<div class="row">
<?php if($event->remaining_seats <= 0 OR !$event->internal_registration): ?>
	<div class="span11">
		<div class="padded">
			<h3>Sorry this event is Full if you have questions please contact us in regards to future events or alternate dates at <a href="mailto:info@matrix42.com">info@matrix42.com</a>.</h3>
		</div><!-- padded -->
	</div><!-- span11 -->
<?php else: ?>
<?php if($complete): ?>
	<div class="span11">
		<div class="padded">
			<h1>Thank you!</h1>
			<h3>Your Registration has been received. You will receive a confirmation shortly.</h3>
		</div><!-- padded -->
	</div><!-- span11 -->
<?php else: ?>
<?php $date_format = $event->use_time ? 'human' : 'readable'; ?>
<?php $timezone = ($event->use_time AND $event->time_zone) ? ' ('.$event->time_zone.')' : ''; ?>
	<div class="span11">
		<div class="padded">
			<div class="squeezed-title">
				<h1 class="emphasis"><?=$event->title?></h1>
			<?php if($event->location): ?>
				<h3><?=$event->location?></h3>
			<?php endif; ?>
				<h4 class="italics"><?=\Format::date($event->start_date, $date_format)?><?=$event->end_date ? '&nbsp;-&nbsp;'.\Format::date($event->end_date, $date_format) : ''?><?=$timezone?></h4>
			<?php if($event->fee): ?>
				<h5 class="secondary"><?=__('Price per seat')?>: <?=__('$')?> <?=money_format('%i', $event->fee)?></h5>
			<?php endif; ?>
			</div>
		<?php if($event->subtitle): ?>
			<p class="italics"><?=$event->subtitle?></p>
		<?php endif; ?>
		<?php if($event->thumbnail): ?>
			<div class="thumbnail left" style="margin: 0 10px 10px 0;"><img src="/assets/img/thumbnails/events/<?=$event->thumbnail?>" alt="<?=$event->title?>" /></div>
		<?php endif; ?>
			<?=$event->description?>
			<hr />
		</div><!-- padded -->
	</div><!-- span11 -->
	<?=$form->view()->open()?>
	<?=$form->event_id->render()?>
	<div class="span5 contact-well dashed-right">
		<div class="padded">
			<span id="event-price" class="hidden"><?=$event->fee?></span>
			<span id="monetary" class="hidden"><?=__('$')?></span>
			<span id="remaining-seats" class="hidden"><?=$event->remaining_seats?></span>
			<h2>Registant</h2>
			<?=$form->name->render()?>
			<?=$form->company->render()?>
			<?=$form->email->render()?>
			<?=$form->number->render()?>
			<?=$form->seats->render()?>
			<h6>@ <?=__('$')?><?=money_format('%i', $event->fee)?> - <span class="secondary"><?=$event->remaining_seats?> available</span></h6>
			<?=$form->participants->render()?>
			<?=$form->message->render()?>
		</div><!-- padded -->
	</div><!-- span5 -->
	<div class="span6">
		<div class="padded">
			<?=$form->address->render()?>
			<?=$form->estimate->render()?>
			<?=$form->price->render()?>
			<?=$form->submit->render()?>
		</div><!-- padded -->
	</div><!-- span6 -->
	<?=$form->view()->close()?>
<?php endif; ?>
<?php endif; ?>
</div><!-- row -->