<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Index extends Controller_Public {

	public function before()
	{
		$this->request->styles(array('home'));

		$this->_title ="IT Service &amp; Mobile Device Management | Matrix42";

		$this->_titlebar = View::factory('home_middle');

		$this->_banner = View::factory('home_banner');

		parent::before();
	}

	public function action_index()
	{
		$this->_content = View::factory('home_page');
	}

}