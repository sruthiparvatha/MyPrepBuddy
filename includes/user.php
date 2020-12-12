<?php

//This php program is used for adding new users to the database and for checking login credentials of existing users

class User{

private $con;

	function __construct()
	{
		include_once("../Database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	//User is already registered or not
	private function emailExists($email){
		$pre_stmt = $this->con->prepare("SELECT id FROM users WHERE email = ? ");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();
		if($result->num_rows > 0){
			return 1;
		}else{
			return 0;
		}
	}

	public function createUserAccount($username,$email,$password,$phno){

		if($this->emailExists($email)) {
			return "EMAIL_ALREADY_EXISTS";
		} else{

			$pass_hash=password_hash($password, PASSWORD_BCRYPT,["cost"=>8]);
			$date=date("Y-m-d");
			$pre_stmt = $this->con->prepare("INSERT INTO `users`(`username`, `email`, `password`, `phno`, `register_date`, `last_login`) VALUES (?,?,?,?,?,?)");
			$pre_stmt->bind_param("ssssss",$username,$email,$pass_hash,$phno,$date,$date);
			$result=$pre_stmt->execute() or die($this->con->error);
			if($result){
				return $this->con->insert_id;
			}else{
				return "SOME_ERROR";
			}
		}
	}

	public function userLogin($email,$password){
		$pre_stmt = $this->con->prepare("SELECT id,username,password,last_login FROM users WHERE email = ?");
		$pre_stmt->bind_param("s",$email);
		$pre_stmt->execute() or die($this->con->error);
		$result = $pre_stmt->get_result();

		if ($result->num_rows < 1) {
			return "NOT_REGISTERD";
		}else{
			$row = $result->fetch_assoc();
			if (password_verify($password,$row["password"])) {
				$_SESSION["userid"] = $row["id"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["last_login"] = $row["last_login"];
				session_start(); 
				//Here we are updating user last login time when he is performing login
				echo $row["username"];
				$last_login = date("Y-m-d h:m:s");
				$pre_stmt = $this->con->prepare("UPDATE users SET last_login = ? WHERE email = ?");
				$pre_stmt->bind_param("ss",$last_login,$email);
				$result = $pre_stmt->execute() or die($this->con->error);
				if ($result) {
					return 1;
				}else{
					return 0;
				}

			}else{
				return "PASSWORD_NOT_MATCHED";
			}
		}
	}


}
// $user = new User();
// echo $user->createUserAccount("test2","test2@gmail.com","12345678","1234567890");
// echo $user->userLogin("test2@gmail.com","12345678");
// echo $_SESSION["username"];
?>
