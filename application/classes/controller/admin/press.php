<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Press extends Controller_Admin {

	public function before()
	{
		$this->_title = 'Press';
		parent::before();
	}

	public function action_index()
	{
		$press = Kacela::find_active('press_release');

		$table = \Kable::factory()
			->setDataSource($press, 'dom')
			->attr('class', 'table table-bordered table-striped')
			->add
		(
			array
			(
				array
				(
					'header' => '',
					'value' => function($o) { $thumbnail = $o->thumbnail ? $o->thumbnail : 'press-release.png';
						return '<img src="/assets/img/thumbnails/press/'.$thumbnail.'" style="width:15px;height:15px;" />';
					}
				),
				array
				(
					'header' => 'Title',
					'value' => function($o) { return $o->title; }
				),
				array
				(
					'header' => 'Release Date',
					'value' => function($o) { return \Format::date($o->release_date, 'short'); }
				),
				array
				(
					'header' => 'Subtitle',
					'value' => function($o) { return substr($o->subtitle,0,50); }
				),
				array
				(
					'header' => 'Content',
					'value' => function($o) { return substr($o->content,0,50).'...'; }
				),
				array
				(
					'value' => function($o) {
						$str = '<a href="/admin/press/form/'.$o->id.'" data-toggle="modal" data-title="Edit '.$o->title.'" class="icon editdoc"></a>'
							.'<a href="/admin/cms/disable/press/'.$o->id.'" class="icon trash" rel="disable"></a>';

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
		$release = kacela::find('press_release', $this->request->param('id'));

		$form = $release->get_form();

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('scripts', array('admin'))
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$release->save($form);

		exit(json_encode(array('success' => true)));

	}
}