<ul class="list">
	<?php foreach($menus as $menu): ?>
	<li>
		<a href="<?=$menu->url?>"><?=$menu->title?></a>
		<?php if($menu->sub_menus): ?>
		<?=\View::factory('submap')->set('submenus', $menu->sub_menus)?>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
</ul>