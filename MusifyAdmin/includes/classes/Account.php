<?php 
	class Account{
			private $con;
			private $errormsg;

		public function __construct($con){
			$this->con = $con;
			$this->errormsg = array();
		}

	
		public function login($un,$pw){
			
			$query = mysqli_query($this->con,"SELECT * FROM admin WHERE usrnm='$un' AND pswd='$pw'");

			if(mysqli_num_rows($query)==1){
				return true;
			}
			else{
				array_push($this->errormsg,Constants::$loginFailed);
				return false;
			}
		}

		public function getError($error){
			if(!in_array($error, $this->errormsg)){
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";
		}

	
	}
 ?>