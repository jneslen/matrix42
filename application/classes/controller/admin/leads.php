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
			->attr('class', 'table table-bordered table-striped')
			->add
		(
			array
			(
				array
				(
					'header' => '<input type="checkbox" id="select-all" />',
					'attr' => array('class' => 'checkbox-cell'),
					'value' => function($o)
					{
						return '<input class="leads" type="checkbox" name="leads[]" value="'.$o->id.'" id="lead_'.$o->id.'" />';
					}
				),
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
						$str = '<a href="/admin/leads/detail/'.$o->id.'" class="icon folder"></a>'
							.'<a href="/admin/leads/form/'.$o->id.'" data-toggle="modal" data-title="Edit '.$o->full_name.'" class="icon editdoc"></a>'
							.'<a href="/admin/cms/disable/lead/'.$o->id.'" class="icon trash" rel="disable"></a>';

						return $str;
					}
				)
			)
		);

		$this->_content = View::factory('admin/index')
			->set('table', $table);
	}

	public function action_contact()
	{
		$lead = kacela::find('lead', $this->request->param('id'));
		$lead->contact_date = time();
		$lead->save();

		return exit(json_encode(array('success' => true, 'contact_date' => \Format::date($lead->contact_date, 'human'))));
	}

	public function action_form()
	{
		$lead = kacela::find('lead', $this->request->param('id'));

		$form = $lead->get_form();

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$lead->save($form);

		exit(json_encode(array('success' => true)));

	}

	public function action_detail()
	{
		$lead = kacela::find('lead', $this->request->param('id'));

		$this->_content = View::factory('admin/leads/detail')
			->set('lead', $lead);
	}
}