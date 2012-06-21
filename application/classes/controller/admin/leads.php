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
					'header' => 'Campaign',
					'value' => function($o) {
						$campaign = $o->campaign_id ? '['.$o->campaign->campaign_code.'] '.ucfirst($o->campaign->name) : '[100] General';
						return $campaign;
					}
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

		$form = \Formo::form('leads');

		$this->_content = View::factory('admin/index')
			->set('form', $form)
			->set('table', $table);
	}

	public function action_contact()
	{
		$lead = kacela::find('lead', $this->request->param('id'));
		$lead->contact_date = time();
		$lead->save();

		return exit(json_encode(array('success' => true, 'contact_date' => \Format::date($lead->contact_date, 'human'))));
	}

	public function action_disable()
	{
		parent::disable();
	}

	public function action_form()
	{
		$lead = \Kacela::find('lead', $this->request->param('id'));

		$form = $lead->get_form();

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$lead->save($form);

		$phone = $lead->get_phone();
		$phone->save($form->phone);

		$address = $lead->get_address();
		$address->save($form->address);

		exit(json_encode(array('success' => true)));

	}

	public function action_detail()
	{
		$lead = \Kacela::find('lead', $this->request->param('id'));

		$this->_content = View::factory('admin/leads/detail')
			->set('user', $this->_user)
			->set('lead', $lead);
	}

	public function action_download()
	{
		if($this->request->param('id'))
		{
			$ids = array($this->request->param('id'));
		}
		else
		{
			$ids = $_POST['leads'];
		}

		if(count($ids) == 0)
		{
			throw new Kohana_Exception('No lead ID supplied for purchase');
		}

		$leads = \Kacela::load('lead')->get_leads($ids);

		$file = $this->_user->get_leads_file($leads);

		exit($file->output());
	}

	public function action_note()
	{
		$type = $this->request->param('id');

		switch($type)
		{
			case 'add':
				$note = \Kacela::find('note');
				$note->user_id = $this->request->param('parentid');
				break;
			case 'edit':
				$note = \Kacela::find('note', $this->request->param('parentid'));
				break;
			default:
				$note = \Kacela::find('note');
				$note->user_id = $this->request->param('id');
				$note->parent_id = $this->request->param('parentid');
				$note->type = 'response';
				break;
		}

		$note->author_id = $this->_user->id;

		$form = $note->get_form();

		if($note->type = 'response')
		{
			$form->type->set('driver', 'hidden');
		}

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$note->save($form);

		exit(json_encode(array('success' => true)));
	}
}