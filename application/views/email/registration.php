<table style="border-width: 0px;" border="0" cellpadding="0" cellspacing="0" width="300">
	<thead>
	<tr>
		<th><?=__('Registant')?> <?=__('Detail')?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><strong><?=__('Full Name')?>:</strong></td>
		<td><?=$registrant->full_name?></td>
	</tr>
	<tr>
		<td><strong><?=__('Email')?>:</strong></td>
		<td><?=$registrant->email?></td>
	</tr>
	<tr>
		<td><strong><?=__('Phone Number')?>:</strong></td>
		<td><?=$registrant->get_phone()->number?></td>
	</tr>
	<tr>
		<td><strong><?=__('Business Name')?>:</strong></td>
		<td><?=$registrant->business_name?></td>
	</tr>
	<tr>
		<td><strong><?=__('Registration Date')?>:</strong></td>
		<td><?=\Format::date($registrant->registration_date, 'human')?></td>
	</tr>
	<tr>
		<td><strong>Event:</strong></td>
		<td><?=$event->title?></td>
	</tr>
	<tr>
		<td><strong>Event Date:</strong></td>
	<?php
		$date_format = $event->use_time ? 'human' : 'readable';
		$timezone = ($event->use_time AND $event->time_zone) ? ' ('.$event->time_zone.')' : '';
		$date = $event->end_date ? \Format::date($event->start_date, $date_format).'&nbsp;-&nbsp;'.\Format::date($event->end_date, $date_format).$timezone : \Format::date($event->start_date, $date_format).$timezone;
	?>
		<td><h5 class="italics"><?=$date?></h5></td>
	</tr>
	<?php if($registrant->participants): ?>
	<tr>
		<td><strong><?=__('Names of additional registrants')?></strong></td>
		<td><?=$registrant->participants?></td>
	</tr>
	<?php endif; ?>
	<tr>
		<td><strong><?=__('Inquiry')?>:</strong></td>
		<td><?=$registrant->get_note()->note?></td>
	</tr>
	</tbody>
</table>
<table style="border-width: 1px;" border="1" cellpadding="1" cellspacing="1" width="100%">
	<thead>
	<tr>
		<th colspan="3"><h3><?=__('Billing information')?></h3></th>
	</tr>
	<tr>
		<th><?=__('Business Address')?></th>
		<th><?=__('Number of registrants')?></th>
		<th><?=__('Price per seat')?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>
			<span><?=$registrant->business_name?></span><br />
			<span><?=$registrant->get_address()->formatted_address?></span>
		</td>
		<td valign="top"><?=$registrant->seats?></td>
		<td valign="top">@ <?=__('$')?> <?=money_format('%i', $event->fee)?></td>
	</tr>
	<tr>
		<td colspan="2"><strong style="color: #ff4c00;"><?=__('Your Estimated Cost')?>:</strong></td>
		<td><?=__('$')?> <?=money_format('%i', $registrant->price)?></td>
	</tr>
	</tbody>
</table>