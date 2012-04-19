<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Solutions extends Controller_Public {

	public function before()
	{
		$this->_title = "Matrix42 Solutions";

		$this->_banner = View::factory('banner');

		$this->_banner->image = 'sub-banner-woman.jpg';
		$this->_banner->title = 'holistic workplace';
		$this->_banner->subtitle = "The solution that solves your IT needs.";

		parent::before();
	}

	public function action_index()
	{
		$menu = \Kacela::find_active('menu', \Kacela::criteria()->isNull('parent_id')->sort('order'));
		//exit(\Debug::vars($menu));
		foreach($menu as $m)
		{
			//echo \Debug::vars($m->sub_menu);
		}
		//exit(\Debug::vars($menu));
		$this->_content = \View::factory('temporary');
	}

}