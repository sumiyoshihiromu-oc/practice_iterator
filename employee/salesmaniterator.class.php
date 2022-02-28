<?php

require_once 'employee.class.php';

class salesmanIterator extends FilterIterator {
	public function __construct(Iterator $iterator) {
		parent::__construct($iterator);
	}

	public function accept() {
		$employee = $this->current();
		return ($employee->getJob() === 'SALESMAN');
	}
}
