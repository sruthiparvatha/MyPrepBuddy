<?php
include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">MyPrepBuddy</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="logout_script.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
          </li>
        <li><a href="admin.php"><i class="fa fa-dashboard fa-3x"></i>Dashboard</a></li>
          
                    <li  >
                        <a href="#"><i class="fa fa-square-o fa-3x"></i>Aptitude<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                         <li> 
                        <a  href="addapti.php">Add Aptitude questions</a>
                      </li>
                      <li>
                       <a  href="view_or_remove_apti.php">View or Delete Aptitude questions</a> </li></ul>
                    </li>
                     <li  >
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i>Reasoning<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                         <li> 
                        <a  href="addreas.php">Add Reasoning questions</a>
                      </li>
                      <li>
                       <a  href="view_or_remove_reas.php">View or Delete Reasoning questions</a> </li></ul>
                    </li>
                    <li  >
                        <a href="#"><i class="fa fa-edit fa-3x"></i>Verbal<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                         <li> 
                        <a  href="addverb.php">Add Verbal questions</a>
                      </li>
                      <li>
                       <a  href="view_or_remove_verb.php">View or Delete Verbal questions</a> </li></ul>
                    </li>
               <li  >
                        <a href="#"><i class="fa fa-desktop fa-3x"></i>Technical<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                         <li> 
                        <a  href="addtech.php">Add Technical questions</a>
                      </li>
                      <li>
                       <a  href="view_or_remove_tech.php">View or Delete Technical questions</a> </li></ul>
                    </li> 
                      
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome, Love to see you back. </h5>
                    </div>

                </div>              
                 <!-- /. ROW  -->
                  <hr />
                
<div class="bs-example">
    <div class="card col-6 " >
        <div class="row">
           
<!--  <div class="col-sm-10" > -->
                
            <!-- </div> -->
            <div class="col-md-2" style="max-width: 500px; margin:20px;background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));">
                <div class="card-body">
                  <img src="images/img1.jpg" style="height:100%;width: 100%;margin-top: 10px;" class="card-img-top h-100" alt="...">
                    <h4 class="card-title"><b>Aptitude</b></h4>
                    <p class="card-text">Total No.of questions:
                    <?php
                    $query = "Select * from aptitude_table";

                    $result=mysqli_query($con, $query)or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
                    echo $num;
                    ?>
                    </p>
                    <a href="view_or_remove_apti.php" class="btn btn-primary stretched-link" style="margin-bottom: 5px">View Questions</a>
                </div>
            </div>


            <div class="col-md-2" style="max-width: 500px; margin:20px;background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));">
                <div class="card-body">
                  <img src="images/img2.jpg" style="height:100%;width: 100%;margin-top: 10px;" class="card-img-top h-100" alt="...">
                    <h4 class="card-title"><b>Reasoning</b></h4>
                    <p class="card-text">Total No.of questions:
                    <?php
                    $query = "Select * from logical_table";

                    $result=mysqli_query($con, $query)or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
                    echo $num;
                    ?>
                    </p>
                    <a href="view_or_remove_reas.php" class="btn btn-primary stretched-link" style="margin-bottom: 5px">View Questions</a>
                </div>
            </div>


            <div class="col-md-2" style="max-width: 500px; margin:20px;background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));">
                <div class="card-body">
                  <img src="images/img3.jpg" style="height:100%;width: 100%;margin-top: 10px;" class="card-img-top h-100" alt="...">
                    <h4 class="card-title"><b>Verbal</b></h4>
                    <p class="card-text">Total No.of questions:
                    <?php
                    $query = "Select * from verbal_table";

                    $result=mysqli_query($con, $query)or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
                    echo $num;
                    ?>
                    </p>
                    <a href="view_or_remove_verb.php" class="btn btn-primary stretched-link" style="margin-bottom: 5px">View Questions</a>
                </div>
            </div>


            <div class="col-md-2" style="max-width: 500px; margin:20px;background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));">
                <div class="card-body">
                  <img src="images/img4.jpg" style="height:100%;width: 100%;margin-top: 10px;" class="card-img-top h-100" alt="...">
                    <h4 class="card-title"><b>Technical</b></h4>
                    <p class="card-text">Total No.of questions:
                    <?php
                    $query = "Select * from technical_table";

                    $result=mysqli_query($con, $query)or die($mysqli_error($con));
                    $num = mysqli_num_rows($result);
                    echo $num;
                    ?>
                    </p>
                    <a href="view_or_remove_tech.php" class="btn btn-primary stretched-link" style="margin-bottom: 5px">View Questions</a>
                </div>
            </div>


        </div>
    </div>
</div>
<hr/>
</div>
</div>
</div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
