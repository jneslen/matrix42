<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Customers extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = "Matrix42 Case Studies";
	}

	public function action_index()
	{
		$case_studies = \Kacela::find_active('case_study', \Kacela::criteria()->isnotnull('description')->sort('id', 'DESC'));

		$table = \Kable::factory()
			->setDataSource($case_studies, 'dom')
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
						return '<span class="hidden">'.$o->id.'</span><a href="/customers/case/'.$o->id.'" class="thumbnail" style="min-width:50px;min-height:50px;"><img src="/assets/img/customers/'.$o->logo.'" alt="'.$o->company.'" /></a>';
					}
				),
				array
				(
					'header' => '',
					'value' => function($o)
					{
						return '<h4><a href="/customers/case/'.$o->id.'">'.$o->company.'</a></h4><p>'.substr(strip_tags($o->description), 0, 255).'...<a href="/customers/case/'.$o->id.'">more <span class="carrot">&gt;&gt;</span></a></p>';
					}
				),
			)
		);

		$this->_content = View::factory('table')
			->set('table', $table)
			->set('sorting', false);
	}

	public function action_case()
	{
		$case_id = $this->request->param('id');

		$case = \Kacela::find_one('case_study', \Kacela::criteria()->equals('id', $case_id));

		$this->_title = $case->company;

		$this->_content = View::factory('customers/case')
			->set('case', $case)
			->set('lead_form', parent::lead_form());
	}
}