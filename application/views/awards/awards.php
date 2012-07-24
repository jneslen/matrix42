<table class="table">
<?php foreach($awards as $award): ?>
	<?php $thumbnail = $award->thumbnail ? $award->thumbnail : 'award.png'; ?>
	<tr>
		<td><span class="thumbnail" style="min-width:100px;"><img src="/assets/img/thumbnails/press/<?=$thumbnail?>" alt="<?=$award->title?>" /></span></td>
		<td>
			<h4 class="emphasis"><?=$award->title?></h4><p><?=$award->content?></p>
		<?php if($award->link): ?>
			<a href="<?=$award->link?>" class="btn btn-mini" target="_blank"><?=__('read more')?></a>
		<?php endif; ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>