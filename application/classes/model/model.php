<?php
/**
 * @author Jeff Neslen
 * @date 4/19/12
 * @brief
 *
 */

namespace Darth\Model;

use Kacela\Model as M;

class Model extends M\Model
{
	public function filter_values(array $array)
	{
		$values = array();
		foreach ($array as $field => $value)
		{
			if (property_exists($this->_data, $field) || method_exists($this, '_set_'.$field)) {
				$values[$field] = $value;
			}
		}

		return $values;
	}

	public function get_form($name = null)
	{
		if(is_null($name)) {
			$name = get_class($this);
			$name = explode('\\', $name);
			$name = end($name);
		}

		$form = \Formo::form($name);

		$this->_formo_add_fields($form);
		$this->_formo_add_rules($form);

		return $form;
	}

	public function load_array(array $array)
	{
		foreach($array as $key => $val)
		{
			$this->$key = $val;
		}

		return $this;
	}

	public function save($data = null)
	{
		if($data instanceof \Formo_Form)
		{
			$data = $this->filter_values($data->as_array('value'));
		}

		return parent::save($data);
	}

	protected function _formo_add_rules(\Formo_Container $form)
	{
		foreach ($form->as_array() as $alias => $val) {

			if ($field = \Arr::get($this->_mapper->getFields(), $alias)) {
				$rules = array();

				if ($field->null === FALSE AND $field->type != 'bool') {
					// Add not_empty rule if it doesn't allow NULL
					$rules[] = array('not_empty');
				}

				if ($field->type == 'int') {
					$rules[] = array('digit');
				}

				if ($field->length) {
					$rules[] = array('max_length', array(':value', $field->length));
				}

				if ($field->type == 'enum') {
					$rules[] = array('in_array', array(':value', $field->values));
				}

				if ($field->type == 'date') {
					$rules[] = array('date');
				}

				if (!empty($rules)) {
					// Add rules if there are any
					$form->rules($alias, $rules);
				}
			}
		}
	}

	protected function _formo_add_fields(\Formo_Container $form)
	{
		foreach ($this->_fields as $field => $data)
		{
			if($data->primary === true && $data->sequenced === true)
			{
				continue;
			}

			switch ($data->type)
			{
				case 'enum':
					$keys = $data->values;
					array_walk($keys, function(&$k) { $k = ucfirst($k); });
					$form->add_group($field, 'select', array_combine($keys, $data->values), $this->$field);
					break;
				case 'bool':
					$form->add($field, 'bool', $this->$field);
					break;
				case 'date':
					$form->add($field, 'input', \Format::date($this->$field));
					$form->$field->view()->add_class('datepicker');
					break;
				default:
					$form->add($field, 'input', $this->$field);

					if($data->length <= 10) {
						$class = 'small';
					} elseif ($data->length <= 20) {
						$class = 'med';
					} else {
						$class = 'big';
					}

					$form->$field->view()->add_class($class);
					break;
			}

			$label = explode('_', $field);
			array_walk($label, function(&$word) { $word = ucfirst($word); });
			$form->$field->set('label', join(' ', $label));
		}

	}

	protected function _set($key, $val)
	{
		if(isset($this->_data->$key)) {
			$this->_originalData[$key] = $this->_data->$key;
		}

		$this->_changed[] = $key;

		$this->_data->$key = $this->_fields[$key]->transform($val, false);
	}
}
