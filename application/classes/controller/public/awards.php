<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Awards extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = "Matrix42 Awards";
	}

	public function action_index()
	{
		$awards = \Kacela::find_active('press_release', \Kacela::criteria()->equals('type', 'award')->sort('release_date', 'ASC'));

		$table = \Kable::factory()
			->setDataSource($awards, 'dom')
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
						$thumbnail = $o->thumbnail ? $o->thumbnail : 'award.png';
						return '<span class="hidden">'.\Format::date($o->release_date, 'mysql').'</span><a href="/awards/award/'.$o->id.'" class="thumbnail"><img src="/assets/img/thumbnails/press/'.$thumbnail.'" alt="Award Thumbnail" /></a>';
					}
				),
				array
				(
					'header' => '',
					'value' => function($o)
					{
						return '<h4><a href="/awards/award/'.$o->id.'">'.$o->title.'</a></h4><h5 class="italics">'.\Format::date($o->release_date, 'readable').'</h5><p>'.substr(strip_tags($o->content), 0, 255).'...<a href="/awards/award/'.$o->id.'">more <span class="carrot">&gt;&gt;</span></a></p>';
					}
				),
			)
		);

		$this->_content = View::factory('table')
			->set('table', $table);
	}

	public function action_award()
	{
		$award_id = $this->request->param('id');

		$award = \Kacela::find_one('press_release', \Kacela::criteria()->equals('id', $award_id));

		$this->_title = $award->title;

		$this->_content = View::factory('awards/award')
			->set('award', $award)
			->set('lead_form', parent::lead_form());

	}

}