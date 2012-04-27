<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'driver' => 'database', // you can use 'database' or 'file', database uses Kacela driver

	'components' => array
	(
		array
		(
			'type'		=> 'method', //type of component ('method','content','view','model')
			'name'		=> '%%leadform%%', //name to search for and replace
			'directory' => '', //directory location of the controller
			'controller' => 'public', //controller name
			'method' => 'lead_form' //method contained in the controller
		),
		array
		(
			'type'		=> 'content',
			'name'		=> '%%cooltext%%',
			'content' => 'Here is some replace content',
		),
		array
		(
			'type'		=> 'model',
			'name'		=> '%%userlist%%',
			'model' => 'user',
			'method' => 'get_user_list',
		),
		array
		(
			'type'		=> 'view',
			'name'		=> '%%supportlink%%',
			'directory' => 'public',
			'view' => 'support_link',
		),
	)
);