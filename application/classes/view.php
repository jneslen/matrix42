<?php defined('SYSPATH') or die('No direct script access.');

class View extends Kohana_View
{
	public static function factory($file = NULL, array $data = NULL)
	{
		if($data['language'] AND \Helper::language() === 'de')
		{
			$file = 'de/'.$file;
		}

		return new View($file, $data);
	}
}