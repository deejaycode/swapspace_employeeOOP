<?php


	class Salaried_Employee extends Employee


	{

		public function __construct($name, $designation, $salary){

			$this->_name = $name;
			$this->_designation = $designation;
			$this->_salary = $salary;
			$this->_type = "Salaried Employee";
		}



		public function calculateBaseSalary(){

			return $salary;


		} 

		public function getDetails(){

			echo "<ul>";
			echo "<li>Name : ".$this->getName()."</li>";
			echo "<li>Designation: ".$this->getDesignation()."</li>";
			echo "<li>Type: ".$this->getType()."</li>";
			echo "<li>Overtime: ".$this->getSalary()."</li>";			
			echo "</ul>";



		}



		

	}


?>