<?php
if(\Helper::language() === 'de')
{
	$schema = 'darth_de';
}
elseif(\Helper::language() === 'en')
{
	$schema = 'darth_eu';
}
else
{
	$schema = 'darth';
}

return array
(
	'kacela' => array
	(
		'password' => 'kamisasanuki',
		'user' => 'root',
		'schema' => $schema,
		'host' => '127.0.0.1',
		'cache' => false
	),
);