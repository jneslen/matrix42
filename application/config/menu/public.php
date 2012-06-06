<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'database', // you can use 'database' or 'file', database uses ORM driver
	'view' => 'menu/public', // the view file
	'current_class' => 'active', // the set_current() method uses this setting to mark the current menu item

	'items' => array
	(
		array
		(
			'url'		=> '/solutions',
			'title'		=> __('Solutions'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/products',
			'title'		=> __('Products'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '/support',
			'title'		=> __('Support'),
			'type'		=> 'main',
		),
		array
		(
			'url'		=> '#menu4',
			'title'		=> __('About'),
			'type'		=> 'main',
			'classes'	=> array('dropdown'),
			'items'		=> array
			(
				array
				(
					'url'		=> '/test',
					'title'		=> __('Testing')
				)
			)
		),
	),

);