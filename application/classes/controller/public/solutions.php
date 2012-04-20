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
		$criteria = \Kacela::criteria()->equals('section', $this->_section)->equals('controller', $this->_controller)->equals('method', $this->_method);
		//exit(\Debug::vars($criteria));
		$menu = \Kacela::find_one('menu', $criteria);

		$this->_content = \View::factory('content')
			->bind('page_contents', $menu->contents);
	}

}