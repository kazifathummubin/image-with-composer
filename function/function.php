<?php
	class student{
		public $hostname = "localhost";
		public $user = "root";
		public $password = "";
		public $database = "class46";
		public $connection;
		
		public function __construct(){
			$this->connection = new mysqli($this->hostname,$this->user,$this->password,$this->database);
			
			if(!$this->connection){
				echo "not connected";
			}
		}


		public function insert($insert_query){
			$return = $this->connection->query($insert_query);
			if($return){
				throw new exception;
			}
		}


		public function select($select_query){
			$return = $this->connection->query($select_query);
			if($return){
				return $return;
			}
		}
		
		
	}
	
	$student = new student;
?>