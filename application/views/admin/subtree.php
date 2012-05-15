<ul>
<?php foreach($submenus as $submenu): ?>
	<li>
		<ins class="jstree-icon left">&nbsp;</ins>
		<div class="tree-title left"><a href="#" class="left"><?=$submenu->title?></a></div><div class="tree-controls right"><a href="#" class="icon edit"></a><a href="#" class="icon delete"></a></div><div class="clear"></div></li>
<?php endforeach; ?>
</ul>