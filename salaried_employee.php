<?php


	class Salaried_Employee extends Employee


	{

		public function __construct($name, $designation, $duration){

			$this->name = $name;
			$this->designation = $designation;
			$this->duration = $duration;
		}



		public function calculateBaseSalary(){

			$totalPay = 0;

			return $totalPay = $this->_hourlyRate * $this->duration;



		} 



		

	}


?>