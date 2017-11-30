<?php


	class Commission_Employee extends Employee implements iPercentage

	{


			private $sales; // sales
			private $perc;


		public function __construct($name, $designation, $duration, $sales, $perc){

			$this->name = $name;
			$this->designation = $designation;
			/*$this->amountPaid = $amountPaid;*/
			$this->duration = $duration;
			$this->sales = $sales;
			$this->perc = $perc;

		}
	
		
		public function salesPercentageCommission(){

			return $comm = ($sales * ($perc/100));
			 

			
		}

		public function calculateBaseSalary(){

			$totalPay = 0;

			$totalPay = ($this->_hourlyRate * $this->duration) + $comm;

			return $totalPay;


		}

	}

?>