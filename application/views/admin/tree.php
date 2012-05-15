<div class="span16">
	<h3 class="emphasis">Menu Tree</h3>

	<div id="menu-tree" class="jstree">
		<ul>
		<?php foreach($menus as $menu): ?>
			<li>
				<ins class="jstree-icon left">&#160;</ins>
				<div class="tree-title left"><a href="#"><?=$menu->title?></a></div><div class="tree-controls right"><a href="/admin/cms/add_submenu/<?=$menu->id?>" data-toggle="modal" class="icon add"></a><a href="/admin/cms/form/<?=$menu->id?>" data-toggle="modal" class="icon edit"></a><a href="/admin/cms/disable/<?=$menu->id?>" data-toggle="modal" class="icon delete"></a></div>
				<div class="clear"></div>
			<?php if($menu->menus): ?>
				<?=\View::factory('admin/subtree')->set('submenus', $menu->menus)?>
			<?php endif; ?>
			</li>
		<?php endforeach; ?>
		</ul>
	</div><!-- menu-tree -->
</div><!-- span16 -->