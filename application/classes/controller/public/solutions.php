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



	public function action_testing()
	{
		exit('tested and working');
	}

}