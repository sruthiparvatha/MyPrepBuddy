<?php

/**
* 
*/
class Manage
{
	
	private $con;

	function __construct()
	{
		include_once("../Database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	//Pagination code for displaying a certain number of records in a single page 
	private function pagination($con,$table,$pno,$n){
		
		$pageno = $pno;
		$numberOfRecordsPerPage = $n;
		//$offset = ($pageno-1)*$numberOfRecordsPerPage;

		$query = $con->query("SELECT COUNT(*) FROM ".$table);
		$row = mysqli_fetch_array($query)[0];
		//$totalRecords = 100000;


		$last = ceil($row/$numberOfRecordsPerPage);

		$pagination = "<ul class='pagination'>";

		if ($last != 1) {
			if ($pageno > 1) {
				$previous = "";
				$previous = $pageno - 1;
				$pagination .= "<li class='page-item'><a class='page-link' pn='".$previous."' href='#' style='color:#333;'> Previous </a></li>";
			}
			for($i=$pageno - 5;$i< $pageno ;$i++){
				if ($i > 0) {
					$pagination .= "<li class='page-item'><a class='page-link' pn='".$i."' href='#'> ".$i." </a></li>";
				}
				
			}
			$pagination .= "<li class='page-item'><a class='page-link' pn='".$pageno."' href='#' style='color:#333;'> $pageno </a></li>";
			for ($i=$pageno + 1; $i <= $last; $i++) { 
				$pagination .= "<li class='page-item'><a class='page-link' pn='".$i."' href='#'> ".$i." </a></li>";
				if ($i > $pageno + 4) {
					break;
				}
			}
			if ($last > $pageno) {
				$next = $pageno + 1;
				$pagination .= "<li class='page-item'><a class='page-link' pn='".$next."' href='#' style='color:#333;'> Next </a></li></ul>";
			}
		}
	//LIMIT 0,10
		//LIMIT 20,10
		$limit = "LIMIT ".($pageno - 1) * $numberOfRecordsPerPage.",".$numberOfRecordsPerPage;

		return ["pagination"=>$pagination,"limit"=>$limit];
	}


	//Manage Records with Pagination meaning display, delete and edit records 
	public function manageRecordWithPagination($table,$pno){
		$a = $this->pagination($this->con,$table,$pno,5);
		if ($table == "aptitude_table") {
			$sql = "SELECT * FROM `aptitude_table`".$a["limit"];
		} else{

			$sql = "SELECT * FROM ".$table." ".$a["limit"];
		}
		$result = $this->con->query($sql) or die($this->con->error);
		$rows = array();
		if($result->num_rows > 0){
			while ($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}
		}
		return ["rows"=>$rows,"pagination"=>$a["pagination"]];

	} 


}


?>