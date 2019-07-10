<?php

class Employee {
	private $name;
	private $age;
	private $salary;

	public function getName() : string {
		return $this->name;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function getAge() : int {
		return $this->age;
	}

	public function setAge(int $age) {
		$newAge = $this->age + $age; 
		if($this->isAgeCorrect($newAge)) { 
			$this->age = $age; 
		}
	}

	public function getSalary() {
		return $this->salary . '$';
	}

	public function setSalary(int $salary) {
		$this->salary = $salary;
	}



	private function isAgeCorrect($age) {
		return $age >= 1 and $age <= 100;
	}
}

$employee = new Employee();
$employee->setName('Misha');
$employee->setAge(14);
$employee->setAge(140);
$employee->setSalary(1000);

echo $employee->getName() . ' ' . $employee->getAge() . ' ' . $employee->getSalary() . "\n";






