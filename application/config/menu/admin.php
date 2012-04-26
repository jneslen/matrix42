<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'file', // you can use 'database' or 'file', database uses ORM driver
	'view' => 'menu/public', // the view file
	'current_class' => 'active', // the set_current() method uses this setting to mark the current menu item

	'items' => array
	(
		array
		(
			'url'		=> '/cms',
			'title'		=> __('CMS'),
		),
		array
		(
			'url'		=> '/events',
			'title'		=> __('Events')
		),
		array
		(
			'url'		=> '/press',
			'title'		=> __('Press')
		),
		array
		(
			'url'		=> '#menu4',
			'title'		=> __('Leads'),
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