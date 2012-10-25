<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Events extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = "Matrix42 Events";
	}

	public function action_index($type = 'all')
	{
		if($type == 'all')
		{
			$events = \Kacela::find_active('event', \Kacela::criteria()->sort('start_date', 'ASC'));
		}
		else
		{
			$events = \Kacela::find_active('event', \Kacela::criteria()->equals('type', $type)->sort('start_date', 'ASC'));
		}

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
						'attr' => array('class' => 'logo-cell'),
						'value' => function($o)
						{
							$thumbnail = $o->thumbnail ? $o->thumbnail : $o->type.'-event.png';
							return '<span class="hidden">'.\Format::date($o->start_date, 'mysql').'</span><a href="/events/detail/'.$o->id.'" class="thumbnail" style="min-width:50px;min-height:50px;"><img src="/assets/img/thumbnails/events/'.$thumbnail.'" alt="Events Thumbnail" /></a>';
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
							return '<h4><a href="/events/detail/'.$o->id.'">'.$o->title.'</a></h4>'.$date.'<p>'.substr(strip_tags($o->markdown('description')), 0, 55).'...<a href="/events/detail/'.$o->id.'">more <span class="carrot">&gt;&gt;</span></a></p>';
						}
					),
				)
			);

		if($type == 'training')
		{
			$table->add(array
				(
					array
					(
						'header' => __('Price per seat'),
						'attr' => array('class' => 'nowrap'),
						'value' => function($o) { return __('$').' '.money_format('%i', $o->fee); }
					),
					array
					(
						'header' => __('Remaining seats'),
						'value' => function($o) { return $o->remaining_seats.' / '.$o->seats; }
					),
				)
			);
		}

		$table->add(array
			(
				array
				(
					'header' => __('Location'),
					'value' => function($o) { return $o->markdown('location'); }
				),
				array
				(
					'header' => '',
					'attr' => array('class' => 'nowrap'),
					'value' => function($o)
					{
						$button = '';
						if(!$o->internal_registration AND $o->link)
						{
							$button = '<a href="'.$o->link.'" target="_blank" class="btn btn-primary btn-mini">'.__('Register').'</a>';
						}
						elseif($o->internal_registration AND $o->remaining_seats > 0)
						{
							$button = '<a href="/events/registration/'.$o->id.'" class="btn btn-primary btn-mini">'.__('Register').'</a>';
						}
						return $button;
					}
				),
			)
		);

		$this->_content = View::factory('table')
			->set('table', $table);
	}

	public function action_conferences()
	{
		$this->_title = 'Matrix42 '.__('Conferences');
		$this->action_index('conference');
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

	public function action_foren()
	{
		$this->_title = 'Matrix42 Messen &amp; Foren';
		$this->action_index('conference');
	}

	public function action_partners()
	{
		$this->_title = 'Matrix42 Partner Events';
		$this->action_index('partner');
	}

	public function action_registration()
	{
		$complete = false;
		$event_id = $this->request->param('id');

		$event = \Kacela::find_one('event', \Kacela::criteria()->equals('id', $event_id));

		$this->_page_title = 'Registration for <span class="emphasis">'.$event->title.'</span>';
		$this->request->script('registration');

		$registrant = new Darth\Model\Registrant();

		$form = $registrant->get_registration_form();

		$form->event_id->set('value', $event_id);

		$form->address->remove(array('care_of'));
		$form->address->rules('address1', array(array('not_empty')));
		$form->address->rules('city', array(array('not_empty')));
		$form->address->rules('country_id', array(array('not_empty')));
		$form->address->rules('state_id', array(array('not_empty')));

		$form->add('submit', 'submit', array('text' => __('Register')));

		//include dynamic states
		$countries = \Kacela::find_active('country');
		$states_js = \View::factory('js/states.js')
			->set('countries', $countries);

		if ($form->load()->validate())
		{
			$complete = true;
		}

		$this->_content = \View::factory('events/registration')
			->set('states_js', $states_js)
			->set('event', $event)
			->set('form', $form)
			->set('complete', $complete);

	}

	public function action_schulungen()
	{
		$this->_title = 'Matrix42 Schulungen';
		$this->action_index('training');
	}

	public function action_trainings()
	{
		$this->_title = 'Matrix42 '.__('Trainings');
		$this->action_index('training');
	}

	public function action_webinars()
	{
		$this->_title = 'Matrix42 Webinars';
		$this->action_index('webinar');
	}
}