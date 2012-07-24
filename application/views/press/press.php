<ul class="listed">
	<?php foreach($press_releases as $release): ?>
	<li>
		<a href="/press/release/<?=$release->id?>" class="thumbnail left"><img src="/assets/img/thumbnails/press/<?=$release->thumbnail ? $release->thumbnail : 'press-release.png'?>" alt="Press Thumbnail" /></a>
		<h4><a href="/press/release/<?=$release->id?>"><?=$release->title?></a></h4>
		<span class="italics"><?=\Format::date($release->release_date, 'readable')?></span>
		<p><?=substr(strip_tags($release->content), 0, 255)?>...<a href="/press/release/<?=$release->id?>">more <span class="carrot">&gt;&gt;</span></a></p>
		<div class="clear"></div>
	</li>
	<?php endforeach; ?>
</ul>