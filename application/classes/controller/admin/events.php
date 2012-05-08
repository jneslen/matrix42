<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Events extends Controller_Admin {

	public function before()
	{
		$this->_title = 'Events';
		parent::before();
	}

	public function action_index()
	{
		$events = Kacela::find_active('event');

		$table = \Kable::factory()
			->setDataSource($events, 'dom')
			->add
		(
			array
			(
				array
				(
					'header' => '',
					'value' => function($o) { $thumbnail = $o->thumbnail ? $o->thumbnail : 'event.png';
						return '<img src="/assets/img/thumbnails/events/'.$thumbnail.'" style="width:15px;height:15px;" />';
					}
				),
				array
				(
					'header' => 'Title',
					'value' => function($o) { return $o->title; }
				),
				array
				(
					'header' => 'Location',
					'value' => function($o) { return $o->location; }
				),
				array
				(
					'header' => 'Description',
					'value' => function($o) { return substr($o->description,0,50).'...'; }
				),
				array
				(
					'header' => 'Start Date/Time',
					'value' => function($o) {
						$format = $o->use_time ? 'human' : 'short';
						return \Format::date($o->start_date, $format);
					}
				),
				array
				(
					'header' => 'End Date/Time',
					'value' => function($o) {
						$format = $o->use_time ? 'human' : 'short';
						return \Format::date($o->end_date, $format);
					}
				),
				array
				(
					'value' => function($o) {
						$str = '<a href="/admin/events/form/'.$o->id.'">Edit</a>'
							. ' | '
							. '<a href="/admin/events/disable/'.$o->id.'">Disable</a>';

						return $str;
					}
				)
			)
		);

		$this->_content = View::factory('admin/index')
			->set('table', $table);
	}

	public function action_form()
	{
		$event = kacela::find('event', $this->request->param('id'));

		$form = $event->get_form()
			->add('save', 'submit');

		$this->_content = View::factory('admin/form')
			->set('form', $form);

		echo \Debug::vars($form);
		echo \Debug::vars($form->type->val());
		if(!$form->load()->validate()) {
			return;
		}
		$event->save($form);

		$this->request->redirect('/admin/events/');

	}

	public function action_disable()
	{
		$release = kacela::find('event', $this->request->param('id'));
		$release->disabled = 1;
		$release->save();

		$this->request->redirect('/admin/events/');
	}
}