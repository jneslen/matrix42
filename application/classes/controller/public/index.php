<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Index extends Controller_Public {

	public function action_index()
	{
		if($this->request->param('mycontroller'))
		{
			parent::action_index();
			return;
		}

		$this->request->styles(array('home'));

		$this->_title = "IT Service &amp; Mobile Device Management | Matrix42";

		$this->_breadcrumb = false;

		$this->_sidebar = false;

		$customers = \Kacela::find_active('case_study', \Kacela::criteria()->equals('featured', '1')->limit(0,4)->sort('rand()'));

		$partners = \Kacela::find_active('partner', \Kacela::criteria()->limit(0,4)->equals('type', 'technology')->sort('order'));

		$this->_titlebar = View::factory('home_middle')
			->set('customers', $customers)
			->set('partners', $partners);

		$this->_banner = View::factory('home_banner', array('language' => true));

		$blogs = \Helper::array_to_object(\Feed::parse('http://blog.matrix42.com/feed', 3)); //TODO:need to setup the RSS feed to include some kind of thumbnail (either author thumbnail or a post thumb)
		$events = \Kacela::find_active('event', \Kacela::criteria()->limit(0,3)->sort('start_date', 'DESC'));
		$press_releases = \Kacela::find_active('press_release', \Kacela::criteria()->limit(0,3)->sort('release_date', 'DESC'));

		$this->_content = View::factory('home_page', array('language' => true))
			->set('blogs', $blogs)
			->set('events', $events)
			->set('press_releases', $press_releases)
			->set('support', \View::factory('sidebar/support', array('language' => true))->bind('chat', $this->_chat));
	}
}