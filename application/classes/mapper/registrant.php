<?php

namespace Darth\Mapper;

class Registrant extends Mapper
{
	public function find_all(\Gacela\Criteria $criteria = null)
	{
		if(is_null($criteria))
		{
			$criteria = \Kacela::criteria();
		}

		$criteria->equals('role', 'registrant');

		return parent::find_all($criteria);
	}

	public function get_registrants(array $ids)
	{
		$query = $this->_source()->getQuery()
			->from(array('r' => 'registrants'), array('r.business_name, r.seats, r.participants, r.registration_date, u.*, a.address1, a.address2, a.city, a.state_id, a.province, a.postal, a.country_id, p.number, n.note'))
			->join(array('u' => 'users'), 'u.id = r.id')
			->join(array('e' => 'events'), 'e.id = r.event_id', array(), 'left')
			->join(array('a' => 'addresses'), 'a.user_id = r.id AND a.type = "business"', array(), 'left')
			->join(array('p' => 'phones'), 'p.user_id = r.id AND p.type = "primary"', array(), 'left')
			->join(array('n' => 'notes'), 'n.user_id = r.id AND n.type = "inquiry"', array(), 'left')
			->where('u.disabled = 0')
			->in('r.id', $ids)
			->orderby('r.id', 'DESC');

		return $this->_source()->query($this->_resource, $query);
	}

}
