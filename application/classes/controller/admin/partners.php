<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Partners extends Controller_Admin {

	public function before()
	{
		$this->_title = 'Partners';
		parent::before();
	}

	public function action_index()
	{
		$partners = Kacela::find_active('partner', Kacela::criteria()->limit(0, 3000));

		$table = \Kable::factory()
			->setDataSource($partners, 'dom')
			->attr('class', 'table table-bordered table-striped')
			->add
		(
			array
			(
				array
				(
					'header' => '',
					'value' => function($o) { return '<span class="hidden">'.$o->id.'</span><img src="/assets/img/partners/'.$o->logo.'" style="height:15px;" />'; }
				),
				array
				(
					'header' => 'Partner',
					'value' => function($o) { return $o->company_name; }
				),
				array
				(
					'header' => 'Type',
					'value' => function($o) { return ucfirst($o->type); }
				),
				array
				(
					'header' => 'Email',
					'value' => function($o) { return $o->email; }
				),
				array
				(
					'header' => 'Partner Date',
					'value' => function($o) { return \Format::date($o->registration_date, 'human'); }
				),
				array
				(
					'value' => function($o) {
						$str = '<a href="/admin/partners/detail/'.$o->id.'" class="icon folder"></a>'
							.'<a href="/admin/partners/form/'.$o->id.'" data-toggle="modal" data-title="Edit '.$o->company_name.'" class="icon editdoc"></a>'
							.'<a href="/admin/cms/disable/partner/'.$o->id.'" class="icon trash" rel="disable"></a>';

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
		$partner = \Kacela::find('partner', $this->request->param('id'));

		$form = $partner->get_form();

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$partner->save($form);

		$phone = $partner->get_phone();
		$phone->user_id = $partner->id;
		$phone->save($form->phone);

		$address = $partner->get_address();
		$address->user_id = $partner->id;
		$address->save($form->address);

		exit(json_encode(array('success' => true)));

	}
}