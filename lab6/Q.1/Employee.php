<?php 
	class Employee
	{
		public $name;
		public $address;
		public function __construct($name, $address)  //new way of using constructor
		{
			$this->name = $name;
			$this->address = $address;
		}
	}

    

?>
