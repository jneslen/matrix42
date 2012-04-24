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

	protected $_banner;

	protected $_titlebar;

	protected $_content;

	protected $_sidebar;

	protected $_section;

	//protected $_chat; //TODO: Add a chat client system dynamically

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
				'bootstrap.min',
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
				'style',
				'icons'
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

		$this->set_breadcrumb();

		if(!isset($this->_sidebar))
		{
			$default_sidebar = array(\View::factory('sidebar/success_stories'));
			$this->_sidebar = \Sidebar::factory($default_sidebar)->render();
		}

		$this->template->header = View::factory('header');
		$this->template->breadcrumb = View::factory('breadcrumb/breadcrumb');
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
			$role = explode('_', get_class($this));
			$role = strtolower(end($role));
			//exit(\Debug::vars($role));

			$this->template->header->user_menu = View::factory('/menu/user');

			$this->template->header->menu = Menu::factory($role)->set_current('/'.$this->request->controller());

			$this->template->breadcrumb->breadcrumb_content = $this->_breadcrumb;

			$this->template->banner = $this->_banner;

			$this->template->titlebar = $this->_titlebar ? $this->_titlebar : View::factory('titlebar')->set('title', $this->_title);

			$this->template->header->section = $this->_section;

			$this->template->sidebar = $this->_sidebar;

			$this->template->sidebar_loc = $this->sidebar_loc;

			$this->template->content = $this->_content;
		}

		parent::after();
	}

	public function set_breadcrumb($trail = null)
	{
		if(!isset($this->_breadcrumb))
		{
			if($trail === null)
			{
				$path_array = array();

				$home_link = $this->request->directory() == 'public' ? '/' : $this->request->directory();

				//Set Home path
				$path_array['Home'] = $home_link;

				//Set Controller path
				$controller_name = ucwords(preg_replace('/[_-]/', ' ', $this->request->controller()));
				$controller_link = '/'.$this->request->controller();
				$path_array[$controller_name] = $controller_link;

				//Set Method path
				$method_name = ucwords(preg_replace('/[_-]/', ' ', $this->request->method()));
				$method_link = $controller_link.'/'.$this->request->method();
				if($this->request->method() != 'index' AND $this->request->method() != 'GET')
				{
					$path_array[$method_name] = $method_link;
				}

				$this->_breadcrumb = \Breadcrumb::factory($path_array, $this->_page_title)->render();
			}
			else
			{
				$this->_breadcrumb = \Breadcrumb::factory($trail, $this->_page_title)->render();
			}
		}
	}
}