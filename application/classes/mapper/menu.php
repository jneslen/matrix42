<?php

namespace Darth\Mapper;

class Menu extends Mapper {

	public function get_menu()
	{
		$query = "SELECT * FROM menus WHERE parent_id IS NULL";
		$result = $this->_source()->query($this->_resource, $query);

		return $result;
	}

	public function get_child_menu($parent_id = null)
	{
		if($parent_id === null)
		{
			$query = "SELECT * FROM menus WHERE parent_id IS NOT NULL";
		}
		else
		{
			$query = "SELECT * FROM menus WHERE parent_id ='".$parent_id."'";
		}

		$subcats = $this->_source()->query($this->_resource, $query);

		return $subcats;
	}

}