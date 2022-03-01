<?php

require_once 'employee.class.php';
require_once 'employees.class.php';
require_once 'salesmanIterator.class.php';


function dumpWithForeach($iterator) {
	echo '<ul>';
	foreach ($iterator as $employee) {
		printf('<li>%s (%d, %s)</li>',
		$employee->getName(),
		$employee->getAge(),
		$employee->getJob());
	}
	echo '</ul>';
	echo '<hr>';
}

$employees = new Employees();
$employees->addEmployee(new Employee('住吉', 23, 'Engineer'));
$employees->addEmployee(new Employee('住吉2', 25, 'SALESMAN'));
$employees->addEmployee(new Employee('住吉3', 27, 'Engineer'));
$employees->addEmployee(new Employee('住吉4', 29, 'SALESMAN'));
$employees->addEmployee(new Employee('住吉5', 31, 'SALESMAN'));

$iterator = $employees->getIterator();

echo '<ul>';
while ($iterator->valid()) {
	$employee = $iterator->current();
	printf('<li>%s (%d, %s)</li>',
	$employee->getName(),
	$employee->getAge(),
	$employee->getJob());

	$iterator->next();
}

echo '</ul>';
echo '<hr>';

dumpWithForeach($iterator);

dumpWithForeach(new salesmanIterator($iterator));
