<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Solutions extends Controller_Public {

	public function before()
	{
		$this->_title = "Matrix42 Solutions";

		$this->_banner = View::factory('banner');

		parent::before();
	}

	public function action_index()
	{
		$this->_content = 'test';
	}

}