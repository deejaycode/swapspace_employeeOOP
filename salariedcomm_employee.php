<?php


	class Salaried_Commission_Employee extends Employee implements iPercentage

	{

		public function __construct($name, $designation, $duration){

			$this->name = $name;
			$this->designation = $designation;
			$this->duration = $duration;
			
			

		}


		public function salesPercentageCommission(){

			return $comm = ($sales * ($perc/100));
			 

			
			}

		

		public function calculateBaseSalary(){

			$totalPay = 0;
			
			$totalPay = ($this->_hourlyRate * $this->duration);

			return $totalPay;

			
		}


		public function getDetails(){

			echo "<ul>";
			echo "<li>Name : ".$this->getName()."</li>";
			echo "<li>Designation: "$this->getDesignation()."</li>";
			echo "<li>" "</li>";


		}


	}


?>