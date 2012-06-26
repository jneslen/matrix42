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
							return '<span class="hidden">'.$o->id.'</span><span class="thumbnail"><img src="/assets/img/partners/'.$o->logo.'" alt="'.$o->company_name.'" /></span>';
						}
					),
					array
					(
						'header' => '',
						'value' => function($o)
						{
							return '<h4 class="emphasis">'.$o->company_name.'</h4><h5 class="italics">'.$o->description.'</h5>';
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
		return $this->action_index('reseller', true);
	}

	public function action_technology()
	{
		$partners = \Kacela::find_active('partner', \Kacela::criteria()->equals('type', 'technology'));

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
						return '<span class="hidden">'.$o->id.'</span><img src="/assets/img/partners/'.$o->logo.'" alt="'.$o->company_name.'" />';
					}
				),
				array
				(
					'header' => '',
					'value' => function($o)
					{
						return '<h4 class="emphasis">'.$o->company_name.'</h4><h5 class="italics">'.$o->description.'</h5>';
					}
				),
			)
		);

		$this->_content = View::factory('table')
			->set('table', $table);
	}

}