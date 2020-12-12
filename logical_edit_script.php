
<?php

include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();



$question = $_POST['question'];
$question = mysqli_real_escape_string($con, $question);
$option_1 = $_POST['option_1'];
$option_1 = mysqli_real_escape_string($con, $option_1);
$option_2 = $_POST['option_2'];
$option_2 = mysqli_real_escape_string($con, $option_2);
$option_3 = $_POST['option_3'];
$option_3 = mysqli_real_escape_string($con, $option_3);
$option_4 = $_POST['option_4'];
$option_4 = mysqli_real_escape_string($con, $option_4);
$answer = $_POST['answer'];
$answer = mysqli_real_escape_string($con, $answer);

$id=$_GET['id'];
$query = "UPDATE logical_table ".
			 "SET Question='".$question."'".
			 ",Option_1='".$option_1."'".
			 ",Option_2='".$option_2."'".
			 ",Option_3='".$option_3."'".
			 ",Option_4='".$option_4."'".
			 ",Answer='".$answer."'".
			 " WHERE L_id='".$id."';";

mysqli_query($con, $query)or die($mysqli_error($con));

header('location:view_or_remove_reas.php');
?>
