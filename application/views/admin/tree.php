<div class="span16">
	<h3 class="emphasis">Menu Tree</h3>
	<a href="/admin/cms/form" data-toggle="modal" data-title="Add Menu" class="btn btn-info right margin-right">Add Menu</a>
	<div class="clear space"></div>

	<div id="menu-tree" class="jstree">
		<ul>
		<?php foreach($menus as $menu): ?>
			<li>
				<ins class="jstree-icon left">&#160;</ins>
				<div class="tree-title left"><a href="#"><?=$menu->title?></a></div><div class="tree-controls right"><a href="/admin/cms/form/0/<?=$menu->id?>" data-toggle="modal" data-original-title="Add" data-content="Add a sub menu" class="icon add hint"></a><a href="/admin/cms/form/<?=$menu->id?>" data-toggle="modal" data-title="Edit <?=$menu->title?> Menu" class="icon edit"></a><a href="/admin/cms/disable/<?=$menu->id?>" class="icon delete" rel="disable"></a></div>
				<div class="clear"></div>
			<?php if($menu->menus): ?>
				<?=\View::factory('admin/subtree')->set('submenus', $menu->menus)?>
			<?php endif; ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div><!-- menu-tree -->
</div><!-- span16 -->