<?php


	class Commission_Employee extends Employee implements iPercentage

	{


			private $sales; // sales
			private $perc;


		public function __construct($name, $designation, $duration, $sales, $perc){

			$this->_name = $name;
			$this->_designation = $designation;
			$this->_type = "Commission Employee";
			$this->sales = $sales;
			$this->perc = $perc;

		}
	
		
		public function salesPercentageCommission(){

			return $comm = ($sales * ($perc/100));
			 

			
		}

		public function calculateBaseSalary(){

			$salary = 0;

			$salary= ($this->_hourlyRate * $this->duration) + $comm;

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