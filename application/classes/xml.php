<?php
/**
 * @author noahg
 * @date 4/22/11
 * @brief
 *
 */

defined('SYSPATH') OR die('No direct access allowed.');

class xml
{
	/**
	 * to_array() will convert the given XML text to an array in the XML structure.
	 * Link: http://www.bin-co.com/php/scripts/xml2array/
	 * Arguments : $contents - The XML text
	 *				$get_attributes - 1 or 0. If this is 1 the function will get the attributes as well as the tag values - this results in a different array structure in the return value.
	 *				$priority - Can be 'tag' or 'attribute'. This will change the way the resulting array sturcture. For 'tag', the tags are given more importance.
	 * Return: The parsed XML in an array form. Use print_r() to see the resulting array structure.
	 * Examples: $array =  xml2array(file_get_contents('feed.xml'));
	 *			  $array =  xml2array(file_get_contents('feed.xml', 1, 'attribute'));
	 */
	public static function to_array($obj, $level = 0)
	{
		$items = array();

		if(file_exists($obj))
		{
			$obj = simplexml_load_file($obj);
		}
		elseif(is_string($obj))
		{
			$obj = simplexml_load_string($obj);
		}

		if (!is_object($obj))
		{
			return $items;
		}

		$child = (array) $obj;

		if (sizeof($child) > 1) {
			foreach ($child as $aa => $bb) {
				if (is_array($bb)) {
					foreach ($bb as $ee => $ff) {
						if (!is_object($ff)) {
							$items[$aa][$ee] = $ff;
						} else
							if (get_class($ff) == 'SimpleXMLElement') {
								$items[$aa][$ee] = self::to_array($ff, $level + 1);
							}
					}
				} else
					if (!is_object($bb)) {
						$items[$aa] = $bb;
					} else
						if (get_class($bb) == 'SimpleXMLElement') {
							$items[$aa] = self::to_array($bb, $level + 1);
						}
			}
		} else
			if (sizeof($child) > 0) {
				foreach ($child as $aa => $bb) {
					if (!is_array($bb) && !is_object($bb)) {
						$items[$aa] = $bb;
					} else
						if (is_object($bb)) {
							$items[$aa] = self::to_array($bb, $level + 1);
						} else {
							foreach ($bb as $cc => $dd) {
								if (!is_object($dd)) {
									$items[$obj->getName()][$cc] = $dd;
								} else
									if (get_class($dd) == 'SimpleXMLElement') {
										$items[$obj->getName()][$cc] = self::to_array($dd, $level + 1);
									}
							}
						}
				}
			}

		return $items;
	}
}
