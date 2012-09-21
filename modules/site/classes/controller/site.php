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
	public $template = 'public';
	public $sidebar_loc = 'right';

	protected $_title = '';
	protected $_page_title = '';
	protected $_description = '';
	protected $_keywords = '';

	protected $_session;

	protected $_subrequest;

	protected $_user;

	protected $_breadcrumb;

	protected $_banner;

	protected $_titlebar;

	protected $_content;

	protected $_sidebar;

	protected $_section;

	protected $_campaign;

	protected $_modal;
	protected $_modal_type = 'form';
	protected $_modal_title = null;
	protected $_modal_content = null;
	protected $_modal_view;

	protected $_lead_form;
	protected $_lead_form_render = false;
	protected $_lead_download;

	protected $_chat;
	public $chat_url;
	public $chat_id;

	protected function _authenticate()
	{
		return true;
	}

	public function before()
	{
		parent::before();

		$this->_session = Session::instance();

		$this->_set_user();
		$this->_kick_out();
		$this->_set_chat();

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
				'plugins/jquery.pngfix',
				'bootstrap.min',
				'plugins/datatables',
				'site',
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
				'icons',
				'forms',
				'datatables',
			)
		);

		View::bind_global('title', $this->_title);
		View::bind_global('page_title', $this->_page_title);
		View::bind_global('user', $this->_user);

		$this->_campaign = \Cookie::get('campaign_id', '1');
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

		if($this->_modal)
		{
			$this->_modal_view = \View::factory('modal')
				->set('title', $this->_modal_title)
				->set('content', $this->_modal_content)
				->set('type', $this->_modal_type);
		}

		$this->template->header = View::factory('header');
		$this->template->breadcrumb = View::factory('breadcrumb/breadcrumb');
		$this->template->footer = View::factory('footer', array('language' => true));

		if ($this->request->is_ajax())
		{
			/*
			$response = array
			(
				'content' => $this->_content,
				'status' => $this->request->status(),
				'alert' => $this->request->alert()
			);

			exit(json_encode($response));
			*/
			$this->template = $this->_content;
		}
		else
		{
			$role = explode('_', get_parent_class($this));
			$role = strtolower(end($role));
			//exit(\Debug::vars($role));

			$this->template->description = $this->_description;

			$this->template->keywords = $this->_keywords;

			$this->template->head_analytics = \Analytics::factory('head');

			$this->template->foot_analytics = \Analytics::factory('foot');

			$this->template->header->user_menu = View::factory('/menu/user');

			$this->template->header->menu = Menu::factory($role)->set_current($this->_get_current());

			$this->template->breadcrumb->breadcrumb_content = $this->_breadcrumb;

			$this->template->banner = $this->_banner;

			$this->template->titlebar = $this->_titlebar !== null ? $this->_titlebar : View::factory('titlebar')->set('title', $this->_page_title);

			$this->template->header->section = $this->_section;

			$this->template->sidebar = $this->_sidebar;

			$this->template->sidebar_loc = $this->sidebar_loc;

			$this->template->content = $this->_content;

			$this->template->modal = $this->_modal_view;

			$this->template->lead_form = $this->_lead_form_render ? $this->_lead_form : null;

			$this->template->chat = $this->_chat;

		}

		parent::after();
	}

	protected function _get_current()
	{
		$string = '';

		if($this->request->directory() != 'public')
		{
			$string .= '/'.$this->request->directory();
		}

		$string .= '/'.$this->request->controller();

		return $string;
	}

	protected function _kick_out()
	{
		// By default, do nothing
		return;
	}

	protected function _redirect_after_login()
	{
		if ($this->_user instanceof \Darth\Model\Employee)
		{
			$this->request->redirect('admin/leads');
		}

		$this->request->redirect('login');
	}

	public function set_breadcrumb($trail = null)
	{
		if(!isset($this->_breadcrumb))
		{
			if($trail === null)
			{
				$path_array = array();

				//Controllers to exclude in the breadcrumb trail
				$exclude_controller_array = array
				(
					'auth'
				);
				//Methods to exclude in the breadcrumb trail
				$exclude_method_array = array
				(
					'index',
					'GET',
					'POST',
				);
				//exclude links
				$exclude_links_array = array
				(
					'solutions',
					'addons',
					'about',
					'losungen',
				);

				$home_link = $this->request->directory() == 'public' ? '/' : $this->request->directory();

				//Set Home path
				$path_array['Home'] = $home_link;

				//need method first to check if it is in excluded methods
				$method = $this->request->param('method') ? $this->request->param('method') : $this->request->method();

				//Set Controller path
				$controller = $this->request->param('mycontroller') ? $this->request->param('mycontroller') : $this->request->controller();
				$controller_name = __(ucwords(preg_replace('/[_-]/', ' ', $controller)));
				$controller_link = '/'.$controller;
				if(!in_array($controller, $exclude_controller_array) AND !in_array($method, $exclude_method_array))
				{
					$path_array[$controller_name] = in_array($controller, $exclude_links_array) ? null : $controller_link;
				}

				/* This may not be necessary since the page title tag identifies the page we are on.
				//Set Method path
				$method_name = ucwords(preg_replace('/[_-]/', ' ', $method));
				$method_link = $controller_link.'/'.$method;
				if(!in_array($method, $exclude_method_array))
				{
					$path_array[$method_name] = $method_link;
				}
				*/

				$this->_breadcrumb = \Breadcrumb::factory($path_array, $this->_title)->render();
			}
			else
			{
				$this->_breadcrumb = \Breadcrumb::factory($trail, $this->_title)->render();
			}
		}
	}

	protected function _set_chat()
	{
		//setup variables for bold chat to be added to the url string
		if(empty($this->_user))
		{
			$chat_vars = array
			(
				'vi' => 'Visitor',
				'url' => $this->request->uri()
			);
		}
		else
		{
			$chat_vars = array
			(
				'url' => $this->request->uri(),
				'ip' => '' //initial question to visitor - left blank, but I imagine we can use this in the future
			);
		}

		//set chat view
		$this->_chat =  \Boldchat::factory(array('vars' => $chat_vars));
	}

	protected function _set_user()
	{
		$user_id = $this->_session->get('user_id');

		$this->_user = $user_id
			? \Kacela::find('user', $user_id)
			: new \Darth\Model\User;
	}
}