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
						'attr' => array('class' => 'logo-cell'),
						'value' => function($o)
						{
							return '<span class="hidden">'.$o->id.'</span><a href="/partners/detail/'.$o->id.'" class="block"><img src="/assets/img/partners/'.$o->logo.'" alt="'.$o->company_name.'" style="width:70px;" /></a>';
						}
					),
					array
					(
						'header' => __('Business Name'),
						'value' => function($o)
						{
							return '<h4 class="emphasis"><a href="/partners/detail/'.$o->id.'">'.$o->company_name.'</a></h4>';
						}
					),
					array
					(
						'header' => __('Location'),
						'attr' => array('class' => 'nowrap'),
						'value' => function($o)
						{
							$locations = '';
							$check_array = array();
							foreach($o->addresses as $address)
							{
								if(!in_array($address->country->name, $check_array))
								{
									$locations .= '<h6 class="secondary">'.$address->country->name.'</h6>';
								}
								array_push($check_array, $address->country->name);
							}
							//return '<h4>'.$o->get_phone()->formatted_phone.'</h4><h5><a href="mailto:'.$o->email.'">'.$o->email.'</a></h5>'.$o->get_address()->formatted_address;
							return $locations;
						}
					),
					array
					(
						'header' => 'Certified',
						'value' => function($o)
						{
							if($o->certified)
							{
								return '<span class="hidden">1</span><span class="icon certificate"></span>';
							}
							else
							{
								return '<span class="hidden">0</span>';
							}
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

	public function action_detail()
	{
		$partner_id = $this->request->param('id');

		$partner = \Kacela::find('partner', $partner_id);

		$this->_title = 'Matrix42 '.ucfirst($partner->type).' Partner';

		$this->_content = View::factory('partners/detail', array('language' => true))
			->set('partner', $partner)
			->set('lead_form', parent::lead_form());
	}

	public function resellers()
	{
		return $this->action_index('reseller', true);
	}

	public function action_technology()
	{
		$partners = \Kacela::find_active('partner', \Kacela::criteria()->equals('type', 'technology'));

		$this->_title = 'Matrix42 Technology Partners';

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
					'attr' => array('class' => 'logo-cell'),
					'value' => function($o)
					{
						return '<span class="hidden">'.$o->id.'</span><a href="/partners/detail/'.$o->id.'" class="block"><img src="/assets/img/partners/'.$o->logo.'" alt="'.$o->company_name.'" style="width:100px;" /></a>';
					}
				),
				array
				(
					'header' => '',
					'value' => function($o)
					{
						return '<h4 class="emphasis"><a href="/partners/detail/'.$o->id.'">'.$o->company_name.'</a></h4><h5 class="italics">'.substr(strip_tags($o->description), 0, 255).'</h5>';
					}
				),
			)
		);

		$this->_content = View::factory('table')
			->set('table', $table);
	}

}