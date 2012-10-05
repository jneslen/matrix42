<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public extends Controller_Site {

	public $template = 'public';

	protected $_section = 'public';
	protected $_controller;
	protected $_method;

	public function before()
	{
		$this->_title = "Matrix42 Solutions";

		$this->_banner = View::factory('banner');

		$this->_banner->image = 'sub-banner-woman.jpg';
		$this->_banner->title = 'holistic workplace';
		$this->_banner->subtitle = "The solution that solves your IT needs.";
		$this->_banner->top = 20;
		$this->_banner->left = 700;
		$this->_banner->title_width = 500;
		$this->_banner->title_color = '#333333';

		//$this->_lead_form = $this->lead_form(true);

		/*
		$this->_controller = $this->request->param('mycontroller') == null ? 'index' : $this->request->param('mycontroller');
		$this->_method = $this->request->param('method') == null ? 'index' : $this->request->param('method');
		*/

		//$this->_controller = $this->request->controller();
		$this->_controller = $this->request->param('mycontroller') == null ? 'index' : $this->request->param('mycontroller');
		$this->_method = $this->request->param('method') == null ? 'index' : $this->request->param('method');

		parent::before();
	}

	/**
	 * This method is a default catch all method for routing DB content to the correct URL request. It uses the default route as defined
	 * in config/routes.php
	 * @throws HTTP_Exception_404
	 * @returns a specific method
	 * @returns content as defined by the DB
	 */
	public function action_index()
	{
		$criteria = \Kacela::criteria()->equals('section', $this->_section)->equals('controller', $this->_controller)->equals('method', $this->_method);

		$menu = \Kacela::find_one('menu', $criteria);

		if($menu->id == null)
		{
			//if no db results for this menu item we need to route the request to the requested controller and method
			$method = 'action_'.$this->_method;
			$mycontroller_name = 'Controller_Public_'.ucfirst($this->_controller);

			if(!method_exists($mycontroller_name, $method))
			{
				throw new HTTP_Exception_404('The requested URL :uri was not found on this server.',
					array(':uri' => $this->request->uri()));
			}

			$mycontroller = new $mycontroller_name($this->request, $this->response);

			$mycontroller->{$method}();
			return;
		}

		//if this menu item has a campaign associated to it and no campaign cookie is present set the cookie
		if($menu->campaign_id)
		{
			if(!\Cookie::get('campaign_id'))
			{
				\Cookie::set('campaign_id', $menu->campaign_id);
			}
		}

		$this->_title = $menu->title != null ? $menu->title : $this->_title;
		$this->_page_title = $menu->pagetitle != null ? $menu->pagetitle : $this->_page_title;
		$banner = $menu->get_content('banner');
		if($banner->content != null)
		{
			$this->_banner = $banner->content;
		}
		else
		{
			$this->_banner->image = $menu->banner != null ? $menu->banner : $this->_banner->image;
			$this->_banner->title = $menu->banner_title != null ? $menu->banner_title : $this->_banner->title;
			$this->_banner->subtitle = $menu->banner_subtitle != null ? $menu->banner_subtitle : $this->_banner->subtitle;
			$this->_banner->top = $menu->banner_y != null ? $menu->banner_y : $this->_banner->top;
			$this->_banner->left = $menu->banner_x != null ? $menu->banner_x : $this->_banner->left;
			$this->_banner->title_width = $menu->title_width != null ? $menu->title_width : $this->_banner->title_width;
			$this->_banner->title_color = $menu->title_color != null ? $menu->title_color : $this->_banner->title_color;
		}

		$sidebar = $menu->get_content('sidebar');
		if($sidebar->content != null)
		{
			$this->_sidebar = $sidebar->markdown('content');
		}

		$this->_description = $menu->subtitle != null ? $menu->subtitle : $this->_description;
		$this->_keywords = $menu->keywords != null ? $menu->keywords : $this->_keywords;

		$main_content = $menu->replace_contents('main'); //get only the main content to be placed in the page.
		$this->_lead_form_render = $menu->default_lead_form;
		$this->_content = \View::factory('content')
			->bind('page_contents', $main_content);
	}

	public function lead_form($full = false)
	{
		$complete = false;
		$user = new \Darth\Model\Lead;
		$lead_form = $user->get_lead_form()
			->add('submit', 'submit', array('text' => __('Send Inquiry!')));

		$lead_form->campaign_id->set('value', $this->_campaign);

		if ($lead_form->load()->validate())
		{
			$complete = true;

			if($lead_form->campaign_id->val())
			{
				$this->_campaign = $lead_form->campaign_id->val();
			}

			$campaign = \Kacela::find_one('campaign', \Kacela::criteria()->equals('id', $this->_campaign));

			if($lead_form->download->val() == '1')
			{
				$this->_lead_download = $campaign->download_link;
			}
		}

		return \View::factory('lead_form', array('language' => true))
			->bind('form', $lead_form)
			->set('lead_download', $this->_lead_download)
			->set('complete', $complete)
			->set('full', $full);
	}

	public function side_lead_form()
	{
		$complete = false;
		$user = new \Darth\Model\Lead;
		$lead_form = $user->get_lead_form('sidelead')
			->add('submit', 'submit', array('text' => __('Send Inquiry!')));

		$lead_form->campaign_id->set('value', $this->_campaign);

		if ($lead_form->load()->validate())
		{
			$complete = true;
		}

		return \View::factory('sidebar_lead_form', array('language' => true))
			->bind('form', $lead_form)
			->set('complete', $complete);
	}

	public function side_support()
	{
		$this->_set_chat();

		return \View::factory('sidebar/support', array('language' => true))
			->set('chat', $this->_chat);
	}
}