<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Losungen extends Controller_Public {

	public function before()
	{
		$this->_title = "Matrix42 Lösungen";

		$this->_banner = View::factory('banner');

		$this->_banner->image = 'sub-banner-woman.jpg';
		$this->_banner->title = 'Lösungen';
		$this->_banner->subtitle = "The solution that solves your IT needs.";

		parent::before();
	}

}