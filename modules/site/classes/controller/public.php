<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller_Site {

	public $template = 'public';

	protected $_section = 'public';
	protected $_controller;
	protected $_method;

	public function before()
	{
		$this->_controller = $this->request->controller();
		$this->_method = $this->request->method() != 'GET' ? $this->request->method : '';
		parent::before();
	}

}