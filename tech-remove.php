<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();
if (isset($_GET['id']) ) {
    $id = $_GET["id"];
     $query = "DELETE FROM technical_table WHERE T_id='$id' ";
     mysqli_query($con, $query) or die($mysqli_error($con));
     
   echo "<script>
alert('Question deleted successfully');
window.location.href='view_or_remove_tech.php';
</script>";
  
  
}
?>