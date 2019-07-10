<?php

	class User {
		protected $name;
		protected $surname;
		protected $birthday;
		private $age;

		public function __construct(string $name, string $surname, $birthday){
			$this->name = $name;
			$this->surname = $surname;
			$this->birthday = $birthday;
			$this->age = $this->calculateAge($birthday);
		}

		public function getName() : string {
			return $this->name;
		}

		public function getSurname() : string {
			return $this->surname;
		}

		public function getBirthday() {
			return $this->birthday;
		}

		public function setBirthday() {
			$this->birthday = date('Y-m-d', $birthday);
		}

		public function getAge() {
			return $this->age . ' Лет';
		}

		private function calculateAge($birthday) {
			$array = explode('-', $birthday); 
			$y= $array[0]; 
			$m= $array[1]; 
			$d= $array[2]; 
			if($m > date('m') || $m == date('m') && $d > date('d')) 
			return (date('Y') - $y - 1); 
			else 
			return (date('Y') - $y);  
		}
	}

	class Employee extends User {
		public $salary;

		public function __construct($name, $surname, $birthday, $salary) {
			parent:: __construct($name, $surname, $birthday);
			$this->salary = $salary;
		}

		public function getSalary() {
			return $this->salary . '$';
		}
	}

	

	$user = new Employee('Misha', 'Hom', '2004-12-02', 1000);

	echo $user->getName() . ' ' . $user->getSurname() . ' ' . $user->getBirthday() . ' ' . $user->getAge() . ' ' . $user->getSalary() . "\n";