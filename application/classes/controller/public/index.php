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

		$customers = \Kacela::find_active('case_study', \Kacela::criteria()->equals('featured', '1')->limit(0,4));

		$partners = \Kacela::find_active('partner', \Kacela::criteria()->limit(0,4));

		$this->_titlebar = View::factory('home_middle')
			->set('customers', $customers)
			->set('partners', $partners);

		$this->_banner = View::factory('home_banner');

		$blogs = \Helper::array_to_object(\Feed::parse('http://blog.matrix42.com/feed', 3)); //TODO:need to setup the RSS feed to include some kind of thumbnail (either author thumbnail or a post thumb)
		$events = \Kacela::find_active('event', \Kacela::criteria()->limit(0,3)->sort('start_date', 'DESC'));
		$press_releases = \Kacela::find_active('press_release', \Kacela::criteria()->limit(0,3)->sort('release_date', 'ASC'));

		$feature = \Kacela::find_one('press_release', \Kacela::criteria()->equals('featured', '1')->sort('release_date', 'ASC')); //TODO: make this take the latest feature including events and possibly blog posts

		$this->_content = View::factory('home_page')
			->set('blogs', $blogs)
			->set('events', $events)
			->set('press_releases', $press_releases)
			->set('feature', $feature)
			->set('support', \View::factory('sidebar/support'));
	}
}