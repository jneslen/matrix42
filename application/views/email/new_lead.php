<table style="border-width: 0px;" border="0" cellpadding="0" cellspacing="0" width="100%">
	<thead>
	<tr>
		<th colspan="2"><h3>New Matrix42 <?=$lead->campaign->name?> Lead!</h3></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><strong><?=__('Source')?></strong></td>
		<td><?=$_SERVER['HTTP_HOST']?></td>
	</tr>
	<tr>
		<td><strong><?=__('Full Name')?>:</strong></td>
		<td><?=$lead->full_name?></td>
	</tr>
	<tr>
		<td><strong><?=__('Email')?>:</strong></td>
		<td><?=$lead->email?></td>
	</tr>
	<tr>
		<td><strong><?=__('Phone Number')?>:</strong></td>
		<td><?=$lead->get_phone()->number?></td>
	</tr>
	<tr>
		<td><strong><?=__('Inquiry')?> IP:</strong></td>
		<td><?=$lead->inquiry_ip?></td>
	</tr>
	<tr>
		<td><strong><?=__('Inquiry Date')?>:</strong></td>
		<td><?=\Format::date($lead->inquiry_date, 'human')?></td>
	</tr>
	<tr>
		<td><strong><?=__('Campaign')?> Code:</strong></td>
		<td><?=$lead->campaign->campaign_code?></td>
	</tr>
	<tr>
		<td><strong><?=__('Campaign')?>:</strong></td>
		<td><?=$lead->campaign->name?></td>
	</tr>
	<tr>
		<td><strong><?=__('Campaign')?> <?=__('Description')?>:</strong></td>
		<td><?=$lead->campaign->description?></td>
	</tr>
	<tr>
		<td><strong><?=__('Inquiry')?>:</strong></td>
		<td><?=$lead->get_note()->note?></td>
	</tr>
	</tbody>
</table>