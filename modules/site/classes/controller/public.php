<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller_Site {

	public $template = 'public';

	protected $_section = 'public';

	public function before()
	{
		parent::before();
	}

}