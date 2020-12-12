<?php

/**
*
*/
class Database
{
	private $con;

	public function connect(){
		include_once("constants.php");
		$this->con = new mysqli("localhost","root","","myprepbuddy_db");
		if ($this->con) {
			  // echo "Database connected";
			return $this->con;
		}
		return "DATABASE_CONNECTION_FAIL";
	}
}

$db = new Database();
 $db->connect();

?>
