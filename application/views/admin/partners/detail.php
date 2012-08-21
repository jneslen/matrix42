<div class="clear space"></div>
<div class="span8">
	<div class="padded">
		<h1 class="emphasis left"><?=$partner->company_name?></h1>
		<a href="/admin/leads/form/<?=$lead->id?>" data-toggle="modal" data-title="Edit <?=$lead->full_name?>" class="icon editdoc"></a>
		<a href="/admin/leads/download/<?=$lead->id?>" class="icon download"></a>
		<div class="clear"></div>
		<h6 class="left">inquired: <span class="emphasis"><?=\Format::date($lead->inquiry_date, 'human')?></span></h6>
		<?php if($lead->contact_date == null): ?>
		<a href="/admin/leads/contact/<?=$lead->id?>" class="icon checkmark right" rel="contact-date"></a>
		<?php endif; ?>
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
				<td>Campaign Association:</td>
				<td><?=$lead->campaign_id ? '['.$lead->campaign->campaign_code.'] '.ucfirst($lead->campaign->name) : '[100] General'?></td>
			</tr>
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
	</div><!-- padded -->
</div><!-- span8 -->
<div class="span16">
	<div class="padded margin-right">
		<h3 class="left">Notes</h3><a href="/admin/leads/note/add/<?=$lead->id?>" data-toggle="modal" data-title="Add Note" class="icon add"></a>
		<div class="clear"></div>
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>Info</th>
				<th>Note</th>
			</tr>
			</thead>
			<tbody>
			<?php foreach($lead->get_parent_notes() as $note): ?>
			<tr>
				<td>
					<h4>Author: <span class="emphasis"><?=$note->author->full_name?></span></h4>
					<h6><?=\Format::date($note->note_date, 'human')?></h6>
					<h6><?=ucfirst($note->type)?></h6>
					<a href="/admin/leads/note/<?=$lead->id?>/<?=$note->id?>" data-toggle="modal" data-title="Reply" class="icon reply"></a>
					<?php if($user->id == $note->author_id): ?>
					<a href="/admin/leads/note/edit/<?=$note->id?>" data-toggle="modal" data-title="Edit Note" class="icon editdoc"></a>
					<a href="/admin/cms/disable/note/<?=$note->id?>" class="icon trash" rel="disable"></a>
					<?php endif; ?>
				</td>
				<td>
					<div class="clear"></div>
					<div class="well">
						<p><?=$note->note?></p>
					</div>
					<?php if($note->sub_notes): ?>
					<table class="table table-striped table-condensed">
						<tbody>
							<?php foreach($note->sub_notes as $sub_note): ?>
						<tr>
							<td>
								<h4>Reply by: <span class="emphasis"><?=$sub_note->author->full_name?></span></h4>
								<h6><?=\Format::date($sub_note->note_date, 'human')?></h6>
								<?php if($user->id == $sub_note->author_id): ?>
								<a href="/admin/leads/note/edit/<?=$sub_note->id?>" data-toggle="modal" data-title="Edit Note" class="icon editdoc"></a>
								<a href="/admin/cms/disable/note/<?=$sub_note->id?>" class="icon trash" rel="disable"></a>
								<?php endif; ?>
							</td>
							<td><?=$sub_note->note?></td>
						</tr>
							<?php endforeach; ?>
						</tbody>
					</table>

					<?php endif; ?>
				</td>
			</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div><!-- padded -->
</div><!-- span16 -->
