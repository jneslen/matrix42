<div id="menu-tree" class="jstree">
	<ul>
	<?php foreach($menus as $menu): ?>
		<li>
			<ins class="jstree-icon left">&#160;</ins>
			<div class="tree-title left"><a href="/admin/cms/detail/<?=$menu->id?>" class="tree-link"><?=$menu->title?></a></div><div class="tree-controls right"><a href="/admin/cms/form/0/<?=$menu->id?>" data-toggle="modal" data-original-title="Add" data-content="Add a sub menu" class="icon add hint"></a><a href="/admin/cms/detail/<?=$menu->id?>" class="icon settings tree-link">&nbsp;</a><a href="/admin/cms/form/<?=$menu->id?>" data-toggle="modal" data-title="Edit <?=$menu->title?> Menu" class="icon editdoc"></a><a href="/admin/cms/disable/menu/<?=$menu->id?>" class="icon trash" rel="disable"></a></div>
			<div class="clear"></div>
		<?php if($menu->sub_menus): ?>
			<?=\View::factory('admin/subtree')->set('submenus', $menu->sub_menus)?>
		<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ul>
</div><!-- menu-tree -->