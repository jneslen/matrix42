<ul>
	<?php foreach($submenus as $submenu): ?>
	<li><a href="<?=$submenu->url?>"><?=$submenu->title?></a></li>
	<?php endforeach; ?>
</ul>