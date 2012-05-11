<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Leads extends Controller_Admin {

	public function before()
	{
		$this->_title = 'Leads';
		parent::before();
	}

	public function action_index()
	{
		$leads = Kacela::find_active('lead', Kacela::criteria()->limit(0, 3000));

		$table = \Kable::factory()
			->setDataSource($leads, 'dom')
			->add
		(
			array
			(
				array
				(
					'header' => '',
					'value' => function($o)
					{
						return $o->downloaded == 0
							? '<img src="/assets/img/icons/new.png" class="left new-lead" alt="New" />'
							: '';
					}
				),
				array
				(
					'header' => 'Full Name',
					'value' => function($o) { return $o->full_name; }
				),
				array
				(
					'header' => 'Business Name',
					'value' => function($o) { return $o->business_name; }
				),
				array
				(
					'header' => 'Email',
					'value' => function($o) { return $o->email; }
				),
				array
				(
					'header' => 'Inquiry Date',
					'value' => function($o) { return \Format::date($o->inquiry_date, 'human'); }
				),
				array
				(
					'header' => 'Contacted Date',
					'value' => function($o) { return \Format::date($o->contact_date, 'human'); }
				),
				array
				(
					'value' => function($o) {
						$str = '<a href="/admin/leads/detail/'.$o->id.'">View</a>'
							. ' | '
							.'<a href="/admin/index/hijack/'.$o->id.'">Hijack</a>'
							. ' | '
							. '<a href="/admin/leads/form/'.$o->id.'">Edit</a>';

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
		$lead = kacela::find('lead', $this->request->param('id'));

		$form = $lead->get_form()
			->add('save', 'submit');

		$this->_content = View::factory('admin/form')
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}

		$lead->save($form);

		$this->request->redirect('/admin/leads/detail/'.$lead->id);

	}

	public function action_detail()
	{
		$lead = kacela::find('lead', $this->request->param('id'));

		$this->_content = View::factory('admin/leads/detail')
			->set('lead', $lead);
	}
}