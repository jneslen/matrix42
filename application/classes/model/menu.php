<?php
namespace Darth\Model;

class Menu extends Model
{
	protected function _get_sub_menu()
	{
		return \Kacela::find_all('menu', \Kacela::criteria()->equals('parent_id',$this->id)->sort('order'));
	}
}