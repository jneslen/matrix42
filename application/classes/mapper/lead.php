<?php

namespace Darth\Mapper;

class Lead extends Mapper
{
	public function find_all(\Gacela\Criteria $criteria = null)
	{
		if(is_null($criteria))
		{
			$criteria = kacela::criteria();
		}

		$criteria->equals('role', 'lead');

		return parent::find_all($criteria);
	}

}
