<?php
namespace Darth\Model;

class Menu extends Model
{
	protected $_contents = array();

	public function get_content($type = 'main', $raw = false)
	{
		foreach($this->contents as $content)
		{
			if($type == $content->type)
			{
				if($raw)
				{
					return $content;
				}
				return \Komponent::factory()->replace($content);
			}
		}

		if(isset($this->_contents[$type]))
		{
			return $this->_contents[$type];
		}

		$this->_contents[$type] = new \Darth\Model\Content();

		$this->_contents[$type]->menu_id = $this->id;
		$this->_contents[$type]->type = $type;

		return $this->_contents[$type];
	}

	public function get_form($name = null)
	{
		$form = parent::get_form($name);

		$banner_list = \Helper::directory_list('/assets/img/banners');

		$form->remove(array
		(
			'role',
			'order',
			'disabled'
		));

		if($this->id == null && $this->parent_id == null)
		{
			$form->parent_id->set('driver', 'select')
				->set('label', 'Parent Menu')
				->set('options', $this->get_parent_menus());
		}
		elseif($this->id != null && $this->parent_id == null)
		{
			$form->parent_id->set('driver', 'hidden');
			$form->type->set('driver', 'hidden')->set('value', 'main');
		}
		else
		{
			$form->parent_id->set('driver', 'hidden');
			$form->type->set('driver', 'hidden')->set('value', 'submenu');
		}

		$form->url->set('label', 'URL <h7>(relative path i.e. &#047;controller&#047;method)</h7>');
		$form->classes->set('label', 'Html Classes <h7>(dropdown, minor, etc...)</h7>');
		$form->section->set('value', 'public')->set('driver', 'hidden');
		$form->controller->set('label', 'Controller <h7>(should reflect url controller)</h7>');
		$form->method->set('label', 'Method <h7>(should reflect url method)</h7>');
		$form->keywords->set('label', 'Keywords <h7>(comma seperated, words)</h7>');
		$form->banner->set('driver', 'select')->set('options', $banner_list);
		$form->add('content', 'textarea', array('value' => $this->get_content('main', true)->content));

		//TODO: readdir get all banner files available in the system to use in a select list for banner

		return $form;
	}

	public function get_parent_menus()
	{
		$menus = \Kacela::find_active('menu', \Kacela::criteria()->isnull('parent_id'));

		$menus_array = array();

		foreach($menus as $menu)
		{
			$menus_array[$menu->id] = $menu->title;
		}

		return $menus_array;
	}

	public function replace_contents()
	{
		foreach($this->contents as $content)
		{
			$this->_contents[] = \Komponent::factory()->replace($content);
		}

		return $this->_contents;
	}

	protected function _get_sub_menus()
	{
		return \Kacela::find_all('menu', \Kacela::criteria()->equals('parent_id',$this->id)->sort('order'));
	}
}