<div class="clear space"></div>
<div class="span8">
	<div class="padded">
		<h1 class="emphasis left"><?=$partner->company_name?></h1>
		<a href="/admin/partners/form/<?=$partner->id?>" data-toggle="modal" data-title="Edit <?=$partner->company_name?>" class="icon editdoc"></a>
		<div class="clear"></div>
		<img src="/assets/img/partners/<?=$partner->logo?>" alt="<?=$partner->company_name?>" />
		<div class="clear"></div>
		<table class="table table-bordered table-striped">
			<tbody>
			<tr>
				<td>Email:</td>
				<td><?=$partner->email?></td>
			</tr>
			<tr>
				<td>Contact Name:</td>
				<td><?=$partner->full_name?></td>
			</tr>
			<tr>
				<td>Phone(s):</td>
				<td>
					<?php foreach($partner->phones as $phone): ?>
					<span class="left"><?=\Format::phone($phone->number, $phone->format)?>&nbsp;</span><h5 class="italics right">(<?=$phone->type?>)</h5>
					<div class="clear"></div>
					<?php endforeach; ?>
				</td>
			</tr>
			<?php foreach($partner->addresses as $address): ?>
			<tr>
				<td class="align-top"><?=ucfirst($address->type)?> Address:</td>
				<td><?=$address->formatted_address?></td>
			</tr>
				<?php endforeach; ?>
			<tr>
				<td>Website:</td>
				<td><?=$partner->website?></td>
			</tr>
			<tr>
				<td>Certified:</td>
				<td><?=$partner->certified ? '<span class="icon certificate"></span>': 'None'?></td>
			</tr>
			<tr>
				<td class="align-top">Partner Type:</td>
				<td>
					<div class="well"><h3><?=ucfirst($partner->type)?></h3></div>
				</td>
			</tr>
			</tbody>
		</table>
	</div><!-- padded -->
</div><!-- span8 -->
<div class="span16">
	<div class="padded margin-right">
		<div class="well"><?=$partner->description?></div>
	</div><!-- padded -->
</div><!-- span16 -->
<div class="clear space"></div>
