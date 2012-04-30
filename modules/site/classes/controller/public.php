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

		/*
		$this->_controller = $this->request->param('mycontroller') == null ? 'index' : $this->request->param('mycontroller');
		$this->_method = $this->request->param('method') == null ? 'index' : $this->request->param('method');
		*/

		$this->_controller = $this->request->controller();
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
			$mycontroller = 'Controller_Public_'.ucfirst($this->_controller);
			//exit(\Debug::vars($mycontroller));
			$controller = new $mycontroller($this->request, $this->response);
			//exit(\Debug::vars($controller));
			if(!method_exists($controller, $method))
			{
				throw new HTTP_Exception_404('The requested URL :uri was not found on this server.',
					array(':uri' => $this->request->uri()));
			}

			$controller->{$method}();
			return;
		}

		$this->_title = $menu->pagetitle != null ? $menu->pagetitle : $this->_title;
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
		}

		$main_content = $menu->replace_contents();
		$this->_content = \View::factory('content')
			->bind('page_contents', $main_content);
	}

	public function lead_form()
	{
		return 'hello';
	}
}