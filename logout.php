<?php
include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();
                            
                             
                             
                      

if (!isset($_SESSION['email'])) {
    header('location:login.html');
}
session_destroy();
header('location: home.php');
?>