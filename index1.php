<?php

class Employee {
	public $name;
	public $age;
	public $salary;

	public function __construct(string $name, int $age, int $salary) {
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}
}

$ivan = new Employee('Иван', 25, 1000);

$vasya = new Employee('Вася', 26, 2000);

$salarySum = $ivan->salary + $vasya->salary;

echo $salarySum . "\n";

$ageSum = $ivan->age + $vasya->age;

echo $ageSum . "\n";