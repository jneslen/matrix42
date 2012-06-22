<table class="table">
	<?php foreach($partners as $partner): ?>
	<tr>
		<td><span class="thumbnail"><img src="/assets/img/partners/<?=$partner->logo?>" alt="<?=$partner->company_name?>" /></span></td>
		<td><h4 class="emphasis"><?=$partner->company_name?></h4><p><?=$partner->desription?></p></td>
	</tr>
	<?php endforeach; ?>
</table>