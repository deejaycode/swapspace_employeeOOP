<?php


	class Salaried_Commission_Employee extends Employee implements iPercentage

	{

		const PERC = 10;
		private $sales;

		public function __construct($name, $designation, $salary, $sales){

			$this->name = $name;
			$this->designation = $designation;
			$this->_type = "Salaried Commission Employee";
			$this->_salary = $salary;
			$this->sales = $sales;
			

		}


		public function salesPercentageCommission(){

			return $comm = $sales * (self::perc/100);
			 

			
			}

		

		public function calculateBaseSalary(){

						
			$salary = $salary + $comm;

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