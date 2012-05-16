<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Cms extends Controller_Admin {

	public function before()
	{
		$this->_title = 'Content Management System';
		$this->_modal_title = 'Add/Edit';
		parent::before();
	}

	public function action_index()
	{
		$menus = \Kacela::find_active('menu', \Kacela::criteria()->isnull('parent_id'));
		$this->_content = \View::factory('admin/tree')
			->set('menus', $menus);
	}

	public function action_form()
	{
		$menu_id = ($this->request->param('id') == null OR $this->request->param('id') == 0) ? null : $this->request->param('id');
		$menu = \Kacela::find('menu', $menu_id);

		$form = $menu->get_form();

		if($this->request->param('parentid'))
		{
			$form->parent_id->set('driver', 'hidden');
			$form->parent_id->set('value', $this->request->param('parentid'));
		}

		$form->view()->attr('action', \Request::$current->url()); //needed for ajax submit

		$this->_content = \View::factory('admin/modal_form')
			->set('form', $form);

		if(!$form->load()->validate())
		{
			return;
		}
		$menu->save($form);

		//save the content data
		$content = $menu->get_content('main');
		$content->menu_id = $menu->id;
		$content->type = 'main';
		$content->content = $form->content->val();
		$content->save();

		exit(json_encode(array('success' => true)));

	}

	public function action_disable()
	{
		$menu = \Kacela::find('menu', $this->request->param('id'));
		$menu->disabled = 1;
		$menu->save();

		exit(json_encode(array('success' => true)));
	}
}