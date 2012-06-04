<?php

namespace Darth\Mapper;

class Partner extends Mapper {

	public function find_all(\Gacela\Criteria $criteria = null)
	{
		if(is_null($criteria))
		{
			$criteria = \Kacela::criteria();
		}

		$criteria->equals('role', 'partner');

		return parent::find_all($criteria);
	}
}