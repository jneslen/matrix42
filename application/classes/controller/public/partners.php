<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Partners extends Controller_Public {

	public function before()
	{
		$this->_title = "Matrix42 Partners";

		$this->_banner = View::factory('banner');

		$this->_banner->image = 'sub-banner-woman.jpg';
		$this->_banner->title = 'holistic workplace';
		$this->_banner->subtitle = "The solution that solves your IT needs.";

		parent::before();
	}

	public function action_index()
	{
		$partners = \Kacela::find_active('partner');

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
					'value' => function($o)
					{
						return '<span class="hidden">'.$o->id.'</span><a href="/partners/partner/'.$o->id.'" class="thumbnail"><img src="/assets/img/partners/'.$o->logo.'" alt="'.$o->company_name.'" /></a>';
					}
				),
				array
				(
					'header' => '',
					'value' => function($o)
					{
						return '<h4><a href="/partners/partner/'.$o->id.'">'.$o->company_name.'</a></h4><h5 class="italics">'.$o->description.'</h5>';
					}
				),
			)
		);

		$this->_content = View::factory('table')
			->set('table', $table);
	}

	public function action_partner()
	{
		$partner_id = $this->request->param('id');

		$partner = \Kacela::find_one('partner', \Kacela::criteria()->equals('id', $partner_id));

		$this->_title = $partner->company_name;

		$this->_content = View::factory('partner/award')
			->set('partner', $partner)
			->set('lead_form', parent::lead_form());

	}

}