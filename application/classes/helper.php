<?php

class Helper
{
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

	static public function object_to_array($object)
	{
		$array = array();
		foreach($object as $key => $value)
		{
			$array[$key] = $value;
		}
		return $array;
	}
}