<?php


	class Salaried_Commission_Employee extends Employee implements iPercentage

	{

		public function __construct($name, $designation, $duration){

			$this->name = $name;
			$this->designation = $designation;
			$this->duration = $duration;
			
			

		}



		public function salesPercentageCommission(){

			$result = (10/100) * $amountPaid;

			//$reward = $result + $amountPaid;

			return $reward;


		}

		public function calculateBaseSalary(){

			

			
		}


	}


?>