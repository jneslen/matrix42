<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Site {

	public $template = 'public';

	public function before()
	{
		$this->_breadcrumb = false;

		$this->_sidebar = false;

		parent::before();
	}
}