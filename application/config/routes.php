<?php
Route::set
(
	'sections',
	'<directory>(/<controller>(/<action>(/<id>)))',
	array
	(
		'directory' => '(client|admin|api|crons)'
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

Route::set
(
	'signup',
	'sign_up'
)
->defaults
(
	array
	(
		'action' => 'index',
		'directory' => 'public',
		'controller' => 'start',
	)
);

Route::set
(
	'default',
	'(<controller>(/<action>(/<id>)))'
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
