<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Press extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = "IT Technology Press Releases";
	}

	public function action_index()
	{
		$press_releases = \Kacela::find_active('press_release', \Kacela::criteria()->sort('release_date', 'ASC'));

		$this->_content = View::factory('press/press')
			->set('press_releases', $press_releases);
	}

	public function action_release()
	{
		$release_id = $this->request->param('id');

		$release = \Kacela::find_one('press_release', \Kacela::criteria()->equals('id', $release_id));

		$this->_title = $release->title;

		$this->_content = View::factory('press/press_release')
			->set('release', $release)
			->set('lead_form', parent::lead_form());

	}

}