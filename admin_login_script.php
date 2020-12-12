<?php 
include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();
$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);


$query = "SELECT id, email FROM admin WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: admin_login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['admin_id'] = $row['id'];
  
  header('location: admin.php');
}    

?>