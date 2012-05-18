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
			->attr('class', 'table table-bordered table-striped')
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
						$str = '<a href="/admin/events/form/'.$o->id.'" data-toggle="modal" data-title="Edit '.$o->title.'" class="icon editdoc"></a>'
							.'<a href="/admin/cms/disable/event/'.$o->id.'" class="icon trash" rel="disable"></a>';

						return $str;
					}
				)
			)
		);

		$this->_content = View::factory('admin/index')
			->set('table', $table);
	}

	public function action_disable()
	{
		parent::disable();
	}

	public function action_form()
	{
		$event = kacela::find('event', $this->request->param('id'));

		$form = $event->get_form();

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('scripts', array('admin'))
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$event->save($form);

		exit(json_encode(array('success' => true)));

	}
}