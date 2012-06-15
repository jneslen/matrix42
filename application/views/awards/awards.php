<table class="table">
<?php foreach($awards as $award): ?>
	<?php $thumbnail = $award->thumbnail ? $award->thumbnail : 'award.png'; ?>
	<tr>
		<td><span class="thumbnail"><img src="/assets/img/thumbnails/press/<?=$thumbnail?>" alt="<?=$award->title?>" /></span></td>
		<td><h4 class="emphasis"><?=$award->title?></h4><p><?=$award->content?></p></td>
	</tr>
<?php endforeach; ?>
</table>