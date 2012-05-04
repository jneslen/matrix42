<?php
Route::set
(
	'sections',
	'<directory>(/<controller>(/<action>(/<id>)))',
	array
	(
		'directory' => '(client|admin|api|crons)',
	)
)
	->defaults
(
	array
	(
		'controller' => 'index',
		'action'     => 'index',
	)
);
/*
Route::set
(
	'default',
	'(<mycontroller>(/<method>(/<id>)))'
)
	->defaults
(
	array
	(
		'controller' => 'public',
		'action'     => 'index',
	)
);
*/

Route::set
(
	'auth',
	'<action>',
	array
	(
		'action' => '(login|logout|reset_password)'
	)
)
	->defaults
(
	array
	(
		'action'     => 'login',
		'directory'  => 'public',
		'controller' => 'auth'
	)
);

Route::set
(
	'default',
	'(<controller>(/<method>(/<id>)))'
)
	->defaults
(
	array
	(
		'controller' => 'index',
		'action'     => 'index',
		'directory'  => 'public',
	)
);

