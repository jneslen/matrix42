<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Partners extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = 'Matrix42 Partners';

		$this->_banner->image = 'sub-banner-woman.jpg';
		$this->_banner->title = 'empowering you';
		$this->_banner->subtitle = 'Through our partners.';
	}

	public function action_index($type = 'reseller', $return_view = false)
	{
		$partners = \Kacela::find_active('partner', \Kacela::criteria()->equals('type', $type));

		$table = \Kable::factory()
			->setDataSource($partners, 'dom')
			->attr('class', 'table')
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
					array
					(
						'header' => '',
						'attr' => array('class' => 'nowrap'),
						'value' => function($o)
						{
							return '<h4>'.$o->get_phone()->formatted_phone.'</h4>'.$o->get_address()->formatted_address;
						}
					)
				)
			);

		if($return_view)
		{
			return \View::factory('table')
				->set('table', $table);
		}
		else
		{
			$this->_content = View::factory('table')
				->set('table', $table);
		}

	}

	public function resellers()
	{
		/*
		$partners = \Kacela::find_active('partner', \Kacela::criteria()->equals('type', 'reseller'));
		return \View::factory('partners/partners')
			->set('partners', $partners);
		*/
		return $this->action_index('reseller', true);
	}

	public function action_technology()
	{
		$this->action_index('technology');
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