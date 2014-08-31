<?php

	class People {
		public $name;
		public $age;
		private $address;

		public function __construct($name, $age, $address) {
			$this->name = $name;
			$this->age = $age;
			$this->address = $address;
		}

		public function sayName() {
			echo $this->name;
		}

		public function sayAddress() {
			echo $this->address;
		}

	}

	$p = new People('gw', 20, 'jingzhou');
	$s = serialize($p);
	file_put_contents('object.txt', $s);
	$p2 = unserialize(file_get_contents('object.txt'));
	var_dump($p2);
	$p2->sayName();
?> 