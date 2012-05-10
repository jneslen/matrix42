<?php
namespace Darth\Mapper;

class Event extends Mapper {

	public function find_active(\Gacela\Criteria $criteria = null)
	{
		$fields = $this->getFields();

		if(isset($fields['disabled']))
		{
			if(is_null($criteria))
			{
				$criteria = new \Gacela\Criteria;
			}

			$criteria->equals('disabled', 0);
			$criteria->greaterthan('start_date', \Format::date(time(), 'mysql')); //TODO: refine this to check if the event is still in progress by checking end date if it is available
		}

		return parent::find_all($criteria);
	}
}