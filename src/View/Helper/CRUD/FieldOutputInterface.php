<?php
namespace CrudViews\View\Helper\CRUD;

/**
 * FieldOutputInterface sets the required methods for objects that can be Decorated
 *
 * @author dondrake
 */
interface FieldOutputInterface {
		
	public function output($field, $options = []);

}
