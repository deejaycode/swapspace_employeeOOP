<?php


	
	abstract class Employee {


		protected $name;
		protected $designation;
		//protected $amountPaid;
		protected $duration;
		protected static  $_hourlyRate = 50;

		function getName(){

			return $this->name;

		}

		function setName($name){

			$this->name = $name;
		}


		function getDesignation(){

			return $this->designation;

		}

		function setDesignation($designation){

			$this->designation = $designation;
		}



		function getDuration(){

			return $this->duration;
		}

		function setDuration($duration){

			$this->duration = $duration;
		}

		
			//program to an interface not an implementation
		abstract public function calculateBaseSalary(); 





	}




?>