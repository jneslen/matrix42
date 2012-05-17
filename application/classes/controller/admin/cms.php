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
		$main_menus = \Kacela::find_active('menu', \Kacela::criteria()->isnull('parent_id')->equals('type', 'main'));
		$main_tree = \View::factory('admin/tree')
			->set('menus', $main_menus);

		$footer_menus = \Kacela::find_active('menu', \Kacela::criteria()->isnull('parent_id')->equals('type', 'footer'));
		$footer_tree = \View::factory('admin/tree')
			->set('menus', $footer_menus);

		$hidden_menus = \Kacela::find_active('menu', \Kacela::criteria()->isnull('parent_id')->equals('type', 'hidden'));
		$hidden_tree = \View::factory('admin/tree')
			->set('menus', $hidden_menus);

		$this->_content = \View::factory('admin/cms/cms')
			->set('main_tree', $main_tree)
			->set('footer_tree', $footer_tree)
			->set('hidden_tree', $hidden_tree);
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
			$form->type->set('driver', 'hidden')->set('value', 'submenu');
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

	public function action_detail()
	{
		$menu = $menu = \Kacela::find('menu', $this->request->param('id'));

		$this->_title = 'Menu: '.$menu->title;

		$this->_content = \View::factory('admin/cms/detail')
			->set('menu', $menu);
	}
}