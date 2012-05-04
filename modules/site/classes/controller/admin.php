<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends Controller_Site {

	public $template = 'public';

	protected $_section = 'admin';

	public function before()
	{
		$this->_breadcrumb = false;

		$this->_sidebar = false;

		parent::before();
	}

	protected function _kick_out()
	{
		if ( ! $this->_user instanceof \Darth\Model\Employee)
		{
			if ($this->_user->is_hijacked())
			{
				$this->_user->end_hijack();
				$this->_set_user();

				$this->_kick_out();
				return;
			}
			else
			{
				$this->_redirect_after_login();
			}

			$this->_redirect_after_login();
		}

	}
}