<?php

class Helper
{
	static public function directory_list($directory, $self_value = true)
	{
		$directory = DOCROOT.$directory;
		// create an array to hold directory list
		$results = array();

		// create a handler for the directory
		$handler = opendir($directory);

		// open directory and walk through the filenames
		while($file = readdir($handler))
		{
			// if file isn't this directory or its parent, add it to the results
			if($file != "." AND $file != "..")
			{
				//set key value pair to self otherwise leave as standard array key value
				if($self_value)
				{
					$results[$file] = $file;
				}
				else
				{
					$results[] = $file;
				}
			}

		}

		// tidy up: close the handler
		closedir($handler);

		// done!
		return $results;
	}

	static public function array_to_object(array $array)
	{
		foreach($array as $key => $value)
		{
			if(is_array($value))
			{
				$array[$key] = self::array_to_object($value);
			}
		}
		return (object)$array;
	}

	//This will return the language that needs to be displayed for the site.
	static public function language()
	{
		if(\Kohana::$environment === 'LIVE' OR \Kohana::$environment === 'RC')
		{
			$base_url = $_SERVER['HTTP_HOST'];
			//$base_url = 'bane';
		}
		elseif(\Kohana::$environment === 'DEV-DE')
		{
			$base_url = 'http://www.matrix42.de';
		}
		elseif(\Kohana::$environment === 'DEV-EU')
		{
			$base_url = 'http://www.matrix42.eu';
		}
		else
		{
			$base_url = 'http://www.matrix42.com';
		}

		preg_match("/.([a-z]{2,3})\/?$/", $base_url, $country_code);

		//set a default to country code if country_code is empty... this is a catch all in case we have an IP as a host
		if(empty($country_code))
		{
			$country_code[1] = 'com';
		}

		switch(strtolower($country_code[1]))
		{
			case 'de':
				$language = 'de';
				break;
			case 'uk':
				$language = 'gb';
				break;
			case 'eu':
				$language = 'en';
				break;
			case 'com':
			default:
				$language = 'en-us';
				break;
		}

		return $language;
	}

	static public function object_to_array($object)
	{
		$array = array();
		foreach($object as $key => $value)
		{
			$array[$key] = $value;
		}
		return $array;
	}

	static public function has_event($type = 'all')
	{
		if($type == 'all')
		{
			$events = \Kacela::find_active('event');
		}
		else
		{
			$events = \Kacela::find_active('event', \Kacela::criteria()->equals('type', $type));
		}

		if($events->count() > 0)
		{
			return true;
		}
		return false;
	}

	static public function user_country()
	{
		//return the cookie value if set
		if(\Cookie::get('user_country'))
		{
			return \Cookie::get('user_country');
		}

		$geoio = json_decode(\Request::factory(\Kohana::$config->load('geoio')->api)->execute()->body());

		if(is_array($geoio))
		{
			$geoio = array_pop($geoio);
		}

		//Set a cookie so that we don't have to keep querying the api
		\Cookie::set('user_country', strtolower($geoio[6]));

		return strtolower($geoio[6]);
	}
}