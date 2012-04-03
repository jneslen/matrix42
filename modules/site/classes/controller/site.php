<?php
/**
 * @author Nezzy
 * @date 3/12/2012
 * @brief
 *
 */

defined('SYSPATH') OR die('No direct access allowed.');

class Controller_Site extends Controller_Template
{
	public $template = 'site';
	public $sidebar_loc = 'right';

	protected $_title = '';
	protected $_page_title = '';

	protected $_session;

	protected $_subrequest;

	protected $_user;

	protected $_breadcrumb;

	protected $_content;

	protected $_sidebar;

	protected $_section;

	public function before()
	{
		parent::before();

		$this->_session = Session::instance();

		if ($this->request->is_initial() === false) {
			// Subrequests are marked internal
			$this->_subrequest = true;
		}

		// Javascript files
		$this->request->script('jquery');

		if(!$this->request->is_ajax())
		{
			$this->request->script('matrix');
		}

		$this->request->scripts
		(
			array
			(
				'jquery-ui',
				'bootstrap/bootstrap-dropdown',
				'site'
			)
		);

		// Stylesheets
		$this->request->styles
		(
			array
			(
				'vars',
				'jquery.ui',
				'style'
			)
		);

		View::bind_global('title', $this->_title);
		View::bind_global('page_title', $this->_page_title);
		View::bind_global('user', $this->_user);
	}

	public function after()
	{
		if (empty($this->_page_title))
		{
			$this->_page_title = $this->_title;
		}

		$this->template->header = View::factory('header');
		$this->template->breadcrumb = View::factory('breadcrumb');
		$this->template->footer = View::factory('footer');

		if ($this->request->is_ajax())
		{
			$response = array
			(
				'content' => $this->_content,
				'status' => $this->request->status(),
				'alert' => $this->request->alert()
			);

			exit(json_encode($response));
		}
		else
		{
			$role = explode('_', get_parent_class($this));
			$role = strtolower(end($role));

			$this->template->header->user_menu = View::factory('/menu/user');

			$this->template->header->menu = Menu::factory($role);

			$this->template->breadcrumb->breadcrumb_content = $this->_breadcrumb;

			$this->template->header->section = $this->_section;

			$this->template->sidebar = $this->_sidebar;

			$this->template->sidebar_loc = $this->sidebar_loc;

			$this->template->content = $this->_content;
		}

		parent::after();
	}
}