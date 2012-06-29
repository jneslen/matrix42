<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Public_Press extends Controller_Public {

	public function before()
	{
		parent::before();

		$this->_title = "Matrix42 Press Releases";
	}

	public function action_index($type = 'release')
	{
		$press_releases = \Kacela::find_active('press_release', \Kacela::criteria()->equals('type', $type)->sort('release_date', 'DESC'));

		$table = \Kable::factory()
			->setDataSource($press_releases, 'dom')
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
							$thumbnail = $o->thumbnail ? $o->thumbnail : 'press-release.png';
							if($o->type == 'award')
							{
								return '<span class="hidden">'.\Format::date($o->release_date, 'mysql').'</span><span class="thumbnail"><img src="/assets/img/thumbnails/press/'.$thumbnail.'" alt="Award Thumbnail" /></span>';
							}
							else
							{
								return '<span class="hidden">'.\Format::date($o->release_date, 'mysql').'</span><a href="/press/release/'.$o->id.'" class="thumbnail"><img src="/assets/img/thumbnails/press/'.$thumbnail.'" width="50" alt="Press Thumbnail" /></a>';
							}
						}
					),
					array
					(
						'header' => '',
						'value' => function($o)
						{
							if($o->type == 'award')
							{
								return '<h4 class="emphasis">'.$o->title.'</h4><p>'.$o->content.'</p>';
							}
							else
							{
								return '<h4><a href="/press/release/'.$o->id.'">'.$o->title.'</a></h4><h5 class="italics">'.\Format::date($o->release_date, 'readable').'</h5><p>'.substr(strip_tags($o->content), 0, 255).'...<a href="/press/release/'.$o->id.'">more &gt;&gt;</a></p>';
							}
						}
					),
				)
			);

			$this->_content = View::factory('table')
				->set('table', $table);
	}

	public function action_awards()
	{
		$this->action_index('award');
	}

	public function action_publications()
	{
		$this->action_index('publication');
	}

	public function awards()
	{
		$awards = \Kacela::find_active('press_release', \Kacela::criteria()->equals('type', 'award')->sort('release_date', 'DESC'));
		return \View::factory('awards/awards')
			->set('awards', $awards);
	}

	public function publications()
	{
		$publications = \Kacela::find_active('press_release', \Kacela::criteria()->equals('type', 'publication')->sort('release_date', 'DESC'));
		return \View::factory('awards/awards')
			->set('awards', $publications);
	}

	public function action_release()
	{
		$release_id = $this->request->param('id');

		$release = \Kacela::find_one('press_release', \Kacela::criteria()->equals('id', $release_id));

		$this->_title = $release->title;

		$this->_content = View::factory('press/press_release')
			->set('release', $release)
			->set('lead_form', parent::lead_form());

	}

}