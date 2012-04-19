<?php
/**
 * @author Jeff Neslen
 * @date 4/19/12
 * @brief
 *
 */
defined('SYSPATH') OR die('No direct access allowed.');

$conf = Kohana::$config->load('local');

return array
(
	'namespaces' => array
	(
		'Darth' => APPPATH.'classes/',
		'Kacela' => MODPATH.'kacela/classes/kacela/'
	),
	'datasources' => array
	(
		'db' => array
		(
			'type' => 'database',
			'dbtype' => 'mysql',
			'schema' => $conf['kacela']['schema'],
			'host' => $conf['kacela']['host'],
			'user' => $conf['kacela']['user'],
			'password' => $conf['kacela']['password']
		)
	),
	'cache' => $conf['kacela']['cache']
);