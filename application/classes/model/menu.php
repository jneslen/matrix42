<?php
namespace Darth\Model;

class Menu extends Model
{
	protected $_contents = array();

	protected function _get_sub_menu()
	{
		return \Kacela::find_all('menu', \Kacela::criteria()->equals('parent_id',$this->id)->sort('order'));
	}

	public function get_content($type = 'main')
	{
		foreach($this->contents as $content)
		{
			if($type == $content->type)
			{
				return $content;
			}
		}

		if(isset($this->_contents[$type]))
		{
			return $this->_contents[$type];
		}

		$this->_contents[$type] = new \Darth\Model\Content;

		$this->_contents[$type]->menu_id = $this->id;
		$this->_contents[$type]->type = $type;

		return $this->_contents[$type];
	}
}