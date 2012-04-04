<?php
/**
 * @author jeffn
 * @date 11/1/11
 * @brief
 *
 */
defined('SYSPATH') OR die('No direct access allowed.');
?>
<ul class="dropdown-menu">
	<?php foreach($menu['items'] as &$item): ?>
	<?php $classes = ''; ?>
	<?php if(isset($item['classes'])): ?>
		<?php $classes = ' class="' . join(' ', $item['classes']) . '"'; ?>
		<?php endif; ?>
	<li<?=$classes?>>
		<?=HTML::anchor($item['url'], $item['title'], null, null, false)?>
		<?php if(isset($item['items'])): ?>
		<?php $items = array('items' => &$item['items']); ?>
		<?=View::factory('menu/sub')->bind('menu', $items)->render()?>
		<?php endif; ?>
	</li>
	<?php endforeach; ?>
</ul>