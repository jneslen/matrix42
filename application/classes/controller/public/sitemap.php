<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Sitemap extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = "Matrix42 Sitemap";
	}

	public function action_index()
	{
		$main_menus = \Kacela::find_active('menu', \Kacela::criteria()->isnull('parent_id')->equals('type', 'main')->sort('order'));
		$this->_content = \View::factory('sitemap')
			->set('menus', $main_menus);
	}
}