<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Cms extends Controller_Admin {

	public function before()
	{
		$this->_title = 'Content Management System';
		parent::before();
	}

	public function action_index()
	{
		$menus = Kacela::find_active('menu', \Kacela::criteria()->isnull('parent_id'));
		$this->_content = \View::factory('admin/tree')
			->set('menus', $menus);
	}

	public function action_form()
	{
		$menu = kacela::find('menu', $this->request->param('id'));

		$form = $menu->get_form();

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$menu->save($form);

		exit(json_encode(array('success' => true)));

	}

}