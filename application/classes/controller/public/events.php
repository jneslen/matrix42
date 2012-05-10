<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Events extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = "Matrix42 Events";
	}

	public function action_index()
	{
		$events = \Kacela::find_active('event', \Kacela::criteria()->sort('start_date', 'ASC'));

		$this->_content = View::factory('events/events')
			->set('events', $events);
	}

	public function action_detail()
	{
		$this->_titlebar = false;
		$event_id = $this->request->param('id');

		$event = \Kacela::find_one('event', \Kacela::criteria()->equals('id', $event_id));

		$this->_title = $event->title;

		$this->_content = View::factory('events/detail')
			->set('event', $event)
			->set('lead_form', parent::lead_form());

	}

}