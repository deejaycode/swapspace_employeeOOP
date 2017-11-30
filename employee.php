<?php


	
	abstract class Employee {


		protected $_name;
		protected $_designation;
		protected $_salary;
		protected $type;
		


		public function __construct( $name, $designation, $salary){
				
				/*$this->_type = $type;*/
				$this->_name = $name;
				$this->_designation = $designation;
				$this->_salary = $salary;
				

			}

		function getName(){

			return $this->_name;

		}

		function setName($name){

			$this->_name = $name;
		}


		function getDesignation(){

			return $this->_designation;

		}

		function setDesignation($designation){

			$this->_designation = $designation;
		}



		function getSalary(){

			return $this->_salary;
		}

		function setSalary($salary){

			$this->_salary = $salary;
		}

		function getType() {

				return $this->_type;
		} 
		
			//program to an interface not an implementation
		abstract public function calculateBaseSalary(); 





	}




?>