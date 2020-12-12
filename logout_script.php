<?php
include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();
                            
                             
                             
                      

if (!isset($_SESSION['email'])) {
    header('location: admin_login.php');
}
session_destroy();
header('location: admin_login.php');
?>