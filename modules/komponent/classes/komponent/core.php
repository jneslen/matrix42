<?php defined('SYSPATH') or die('No direct script access.');


class Komponent_Core {

	/**
	 * @param	string	$config	 see factory()
	 */
	public function __construct($config)
	{
		$this->config = Kohana::$config->load($config);

		if ($this->config['driver'] == 'database')
		{
			//$this->components = new \Darth\Model\Component();
			$components = \Kacela::find_active('component');
		}
		elseif($this->config['driver'] == 'file')
		{
			$this->components = array('components' => &$this->config['components']);
		}

	}

	/**
	 * @param	string	$config	the config file that contains the component array
	 * @return	Komponent
	 */
	public static function factory($config = 'component')
	{
		return new Komponent('komponent/'.$config);
	}

	/**
	 * @param object $items object ORM that contains main menu items
	 * @return array array that contains menu items from database
	 */
	private function get_from_database($components) {
		$temp = array();

		foreach ($items as $key => $item) {
			$temp[$key]['url'] = $item->url;
			$temp[$key]['title'] = $item->title;
			if ($item->classes) {
				$temp[$key]['classes'] = array($item->classes);
			}
			$subcategories = $item->sub_menu;
			if (count($subcategories) > 0)
				$temp[$key]['items'] = $this->get_from_database($subcategories);
		}

	}