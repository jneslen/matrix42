<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Index extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->request->styles(array('home'));

		$this->_title = "IT Service &amp; Mobile Device Management | Matrix42";

		$this->_breadcrumb = false;

		$this->_sidebar = false;

		$this->_titlebar = View::factory('home_middle');

		$this->_banner = View::factory('home_banner');
	}

	public function action_index()
	{
		$events = \Kacela::find_active('event', \Kacela::criteria()->limit(0,5)->sort('start_date', 'DESC'));
		$press_releases = \Kacela::find_active('press_release', \Kacela::criteria()->limit(0,5)->sort('release_date', 'ASC'));
		$this->_content = View::factory('home_page')
			->set('events', $events)
			->set('press_releases', $press_releases)
			->set('lead_form', parent::lead_form(true))
			->set('support', \View::factory('sidebar/support'));
	}
}