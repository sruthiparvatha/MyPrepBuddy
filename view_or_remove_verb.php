
<?php
include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();
?>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> View/Remove Verbal Questions</title>

         <link rel="stylesheet" href="adminstyle.css" type="text/css"/>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style >
          .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add an active class to highlight the current page */

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}
        </style>
        
    </head><body>
<div class="topnav" id="myTopnav">
  <a href="admin.php" class="active" style="font-weight: bold;font-size: 20px">MyPrepBuddy</a>
   <a href="logout_script.php" class="btn btn-danger square-btn-adjust" style="float: right;margin-bottom: 10px;margin-top: 10px;margin-right: 10px">Logout</a> </div>
 
</div>
<div class="container-fluid" id="content">
            
            <div class="row decor_bg">
                <div class="col-md-10 col-md-offset-1">
<div class="table-responsive">
                    <table class="table table-striped" >
    
                        <!--show table only if there are items added in the cart-->
                        <?php
                        $query = "SELECT * FROM verbal_table";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $num = mysqli_num_rows($result);
                        if ($num == 0) {
                                    echo "No Questions Available";
                               }
                               ?>
                         <br><br>
                            <thead style="margin-top: 50px">
                                <tr>
                                    <th>Que_ID</th>
                                    <th>Question</th>
                                    <th>Option_1</th>
                                    <th>Option_2</th>
                                    <th>Option_3</th>
                                    <th>Option_4</th>
                                    <th>Answer</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

              <?php  while ($row = mysqli_fetch_array($result)) {
             
                                    
                                    
                    echo "<tr><td>" . " " . $row['V_id'] . "</td><td>" . $row['Question'] . "</td><td>  ".$row['Option_1']."</td><td>" . $row['Option_2'] . "</td><td>  ".$row['Option_3']."</td><td>  ".$row['Option_4']."</td><td>  ".$row['Answer']."</td><td><a href='verb-remove.php?id={$row['V_id']}' class='remove_item_link btn btn-block btn-danger'> <span class='glyphicon glyphicon-minus'></a></td><td><a href='verb_edit.php?id={$row['V_id']}' class='remove_item_link btn btn-block btn-success'> <span class='glyphicon glyphicon-pencil'></a></td></tr>";
                                        
                                    }
                                   
                             
                                 
                                ?>
                            </tbody>
                     
                       
                    </table>

             </div>
                </div>
            </div>
        </div>
        </body>
</html>