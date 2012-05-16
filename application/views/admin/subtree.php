<ul>
<?php foreach($submenus as $submenu): ?>
	<li>
		<ins class="jstree-icon left">&nbsp;</ins>
		<div class="tree-title left"><a href="#" class="left"><?=$submenu->title?></a></div><div class="tree-controls right"><a href="/admin/cms/detail/<?=$submenu->id?>" class="icon settings"></a><a href="/admin/cms/form/<?=$submenu->id?>" data-toggle="modal" class="icon editdoc"></a><a href="/admin/cms/disable/<?=$submenu->id?>" class="icon trash" rel="disable"></a></div><div class="clear"></div></li>
<?php endforeach; ?>
</ul>