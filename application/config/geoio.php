<?php
if(\Kohana::$environment === 'DEV')
{
	return array
	(
		//'api' => 'http://api.netimpact.com/qv1.php?key=MZXB3IiMemadszcX&qt=geoip&d=json&q=67.51.221.155', //US
		'api' => 'http://api.netimpact.com/qv1.php?key=MZXB3IiMemadszcX&qt=geoip&d=json&q=80.83.150.16', //GB
	);
}
elseif(\Kohana::$environment === 'DEV-DE')
{
	return array
	(
		'api' => 'http://api.netimpact.com/qv1.php?key=MZXB3IiMemadszcX&qt=geoip&d=json&q=62.27.6.63',
	);
}
else
{
	return array
	(
		'api' => 'http://api.netimpact.com/qv1.php?key=MZXB3IiMemadszcX&qt=geoip&d=json&q='.\Request::$client_ip,
	);
}