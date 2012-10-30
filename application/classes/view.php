<?php defined('SYSPATH') or die('No direct script access.');

class View extends Kohana_View
{
	public static function factory($file = NULL, array $data = NULL)
	{
		if($data['language'])
		{
			if(\Helper::user_country() == 'gb')
			{
				$language = 'gb';
			}
			else
			{
				$language = \Helper::language();
			}

			if(\Kohana::find_file('views/'.$language, $file))
			{
				$file = $language.'/'.$file;
			}
		}

		return new View($file, $data);
	}
}