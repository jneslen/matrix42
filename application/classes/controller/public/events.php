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
						'value' => function($o)
						{
							$thumbnail = $o->thumbnail ? $o->thumbnail : $o->type.'-event.png';
							return '<span class="hidden">'.\Format::date($o->start_date, 'mysql').'</span><a href="/events/detail/'.$o->id.'" class="thumbnail"><img src="/assets/img/thumbnails/events/'.$thumbnail.'" alt="'.ucfirst($o->type).' Event Thumbnail" /></a>';
						}
					),
					array
					(
						'header' => '',
						'value' => function($o)
						{
							$date_format = $o->use_time ? 'human' : 'readable';
							$timezone = ($o->use_time AND $o->time_zone) ? ' ('.$o->time_zone.')' : '';
							$date = $o->end_date ? '<h5 class="italics">'.\Format::date($o->start_date, $date_format).'&nbsp;-&nbsp;'.\Format::date($o->end_date, $date_format).$timezone.'</h5>' : '<h5 class="italics">'.\Format::date($o->start_date, $date_format).$timezone.'</h5>';
							return '<h4><a href="/events/detail/'.$o->id.'">'.$o->title.'</a></h4>'.$date.'<p>'.substr(strip_tags($o->description), 0, 255).'...<a href="/events/detail/'.$o->id.'">more <span class="carrot">&gt;&gt;</span></a></p>';
						}
					),
					array
					(
						'header' => '',
						'value' => function($o)
						{
							$location = '';
							if($o->type == 'webinar' AND $o->link)
							{
								$location = '<h5>'.__('Webinar').':</h5><a href="'.$o->link.'" target="_blank" class="btn btn-primary btn-mini">'.__('Register').'</a>';
							}
							elseif($o->location)
							{
								$location = '<h5>'.$o->location.'</h5>';
							}
							return $location;
						}
					),
				)
			);

		$this->_content = View::factory('table')
			->set('table', $table);
	}

	public function action_detail()
	{
		$this->_titlebar = false;
		$event_id = $this->request->param('id');

		$event = \Kacela::find_one('event', \Kacela::criteria()->equals('id', $event_id));

		$this->_title = $event->title;

		$this->_content = View::factory('events/detail', array('language' => true))
			->set('event', $event)
			->set('lead_form', parent::lead_form());

	}

}