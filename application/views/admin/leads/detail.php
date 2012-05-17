<div class="clear space"></div>
<div class="span8">
	<div class="padded">
		<h1 class="emphasis left"><?=$lead->full_name?></h1>
		<a href="/admin/leads/form/<?=$lead->id?>" data-toggle="modal" data-title="Edit <?=$lead->full_name?>" class="icon editdoc"></a>
		<div class="clear"></div>
		<h6 class="left">inquired: <span class="emphasis"><?=\Format::date($lead->inquiry_date, 'human')?></span></h6>
		<a href="/admin/leads/contact/<?=$lead->id?>" class="icon checkmark right" rel="contact-date"></a>
		<h6 class="right">contacted: <span id="contact-date" class="emphasis"><?=$lead->contact_date ? \Format::date($lead->inquiry_date, 'human') : 'not contacted'?></span></h6>
		<div class="clear"></div>
		<table class="table table-bordered table-striped">
			<tbody>
			<tr>
				<td>Email:</td>
				<td><?=$lead->email?></td>
			</tr>
			<tr>
				<td>Business name:</td>
				<td><?=$lead->business_name?></td>
			</tr>
			<tr>
				<td>Phone(s):</td>
				<td>
				<?php foreach($lead->phones as $phone): ?>
					<span class="left"><?=\Format::phone($phone->number)?>&nbsp;</span><h5 class="italics right">(<?=$phone->type?>)</h5>
					<div class="clear"></div>
				<?php endforeach; ?>
				</td>
			</tr>
			<?php foreach($lead->addresses as $address): ?>
			<tr>
				<td class="align-top"><?=ucfirst($address->type)?> Address:</td>
				<td><?=$address->formatted_address?></td>
			</tr>
			<?php endforeach; ?>
			<tr>
				<td>Inquiry IP:</td>
				<td><?=$lead->inquiry_ip?></td>
			</tr>
			<tr>
				<td class="align-top">Initial Inquiry:</td>
				<td>
					<div class="well"><?=$lead->get_note()->note?></div>
				</td>
			</tr>
			</tbody>
		</table>
		<h3 class="left">Notes</h3><a href="/admin/leads/note/<?=$lead->id?>" class="icon add"></a>
		<?php //TODO:Add notes section ?>
	</div><!-- padded -->
</div><!-- span8 -->
