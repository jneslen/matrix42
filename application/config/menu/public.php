<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'file', // you can use 'database' or 'file', database uses ORM driver
	'view' => 'menu/public', // the view file
	'current_class' => 'current', // the set_current() method uses this setting to mark the current menu item

	'items' => array
	(
		array
		(
			'url'		=> '/',
			'title'		=> __('Home'),
		),
		array
		(
			'url'		=> '/start',
			'title'		=> __('Sign Up')
		),
	),

);