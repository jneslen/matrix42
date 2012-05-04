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
			'url'		=> '/admin/cms',
			'title'		=> __('CMS'),
		),
		array
		(
			'url'		=> '/admin/events',
			'title'		=> __('Events')
		),
		array
		(
			'url'		=> '/admin/press',
			'title'		=> __('Press')
		),
		array
		(
			//'url'		=> '#menu4', //if a dropdown is present set the url to the id of this number menu
			'url'		=> '/admin/leads',
			'title'		=> __('Leads'),
			/*'classes'	=> array('dropdown'), //set as a dropdown menu
			'items'		=> array
			(
				array
				(
					'url'		=> '/test',
					'title'		=> __('Testing')
				)
			)*/
		),
		array
		(
			'url'		=> '/logout',
			'title'		=> __('Logout'),
		),
	),

);