<?php


	class Hourly_Employee extends Employee	


	{
		
		private static $_expectedWorkHours = 40;
		private static $_hourlyRate = 50;
		private $duration;

		public function __construct($name, $designation, $duration/*, $overtime*/){

			$this->_name = $name;
			$this->_designation = $designation;
			$this->_type = "Hourly Employee";
			

		}
	
		public function calculateOvertime($duration){

			return ($duration - $this->_expectedWorkHours) * $this->_hourlyRate;

		}


		public function calculateBaseSalary() {

			$salary = 0;
			$overtime = 0;

			if($this->duration > $this->_expectedWorkHours){
				$overtime = $this->calculateOvertime($this->duration);
			}


			$salary = ($this->_hourlyRate * $this->duration) + $overtime;

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