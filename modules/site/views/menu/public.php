<?php $count = 0; ?>
<ul id="nav" class="nav nav-pills">
	<?php foreach($menu['items'] as &$item): ?>
	<?php $count++; ?>
	<?php $classes = ''; ?>
	<?php if(isset($item['classes'])): ?>
		<?php $classes = ' '.join(' ', $item['classes']); ?>
		<?php endif; ?>
	<li class="<?=$classes?>" id="menu<?=$count?>">
		<?php $attributes = isset($item['items']) ? array('data-target' => 'dropdown', 'class' => 'dropdown-toggle') : null; ?>
		<?=HTML::anchor($item['url'], $item['title'], $attributes, null, false)?>
		<?php if(isset($item['items'])): ?>
		<?php $items = array('items' => &$item['items']); ?>
		<?=View::factory('menu/sub')->bind('menu', $items)->render()?>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
</ul>