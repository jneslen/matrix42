<ul id="nav" class="sf-menu">
	<?php foreach($menu['items'] as &$item): ?>
	<?php $classes = ''; ?>
	<?php if(isset($item['classes'])): ?>
		<?php $classes = ' '.join(' ', $item['classes']); ?>
		<?php endif; ?>
	<li class="<?=$classes?>">
		<?=HTML::anchor($item['url'], $item['title'], null, null, false)?>
		<?php if(isset($item['items'])): ?>
		<?php $items = array('items' => &$item['items']); ?>
		<?=View::factory('menu/sub')->bind('menu', $items)->render()?>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
</ul>