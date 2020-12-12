<?php
include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();
?>
<html>
  <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> Add Aptitude Questions</title>

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

<div id="content">
            <div class="container-fluid decor_bg" id="login-panel" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >     

                            <div class="panel-heading" >
                                <h4>Add Aptitude Questions</h4>
                            </div>
                            <div class="panel-body">
                               
                               
        
           <input type="radio" onclick="javascript:text_img_mq_Check();" name="yesno"  value="text" id="textCheck" > Text 
          <input type="radio" onclick="javascript:text_img_mq_Check();" name="yesno" value="image" id="imageCheck"> Image
          <input type="radio" onclick="javascript:text_img_mq_Check();" name="yesno" value="mq" id="mqCheck"> Multiple<br>

        
        <div id="ifText" style="display: none;">
           <form  action="addaptiscript.php?id=text" method="post" enctype="multipart/form-data">
                      <div class="form-group"><!--restaurant_name-->
                                     <label for="question">Question:</label>
                                            <input type="text" class="form-control"   placeholder="Enter the Question" name="question" >
                                            
                                     </div>

                                 
                                      <div class="form-group"><!--restaurant_name-->
                                     <label for="option_1">Option_1</label>
                                            <input type="text" class="form-control"   placeholder="Enter Option_1" name="option_1" required>
                                     </div>
                                      <div class="form-group"><!--restaurant_name-->
                                     <label for="option_2">Option_2</label>
                                            <input type="text" class="form-control"   placeholder="Enter Option_2" name="option_2" required>
                                     </div>
                                      <div class="form-group"><!--restaurant_name-->
                                     <label for="option_3">Option_3</label>
                                            <input type="text" class="form-control"   placeholder="Enter Option_3" name="option_3" required>
                                     </div>
                                    
                                     <div class="form-group"><!--restaurant_name-->
                                     <label for="option_4">Option_4</label>
                                            <input type="text" class="form-control"   placeholder="Enter Option_4" name="option_4" required>
                                     </div>
                                      <div class="form-group"><!--restaurant_name-->
                                     <label for="answer">Answer</label>
                                            <input type="text" class="form-control"   placeholder="Enter Answer" name="answer" required>
                                     </div>
                                            <button type="submit" name="add" class="btn btn-primary" onclick="alert('Question is added successfully')">ADD Question</button>
                                    <br>
    </form>
                                    
            </div>                            

            <div id="ifImg" style="display: none;">
               <form  action="addaptiscript.php?id=image" method="post" enctype="multipart/form-data">
                  <div class="form-group"><!--restaurant_name-->
                        <label for="image">Ouestion:</label>
                            <input type="file"  name="qn" />
                  </div>
                  <div class="form-group">
                  <label for="option_1">Option_1</label>
                        <input type="text" class="form-control"   placeholder="Enter Option_1" name="option_1" required>
                 </div>
                  <div class="form-group"><!--restaurant_name-->
                 <label for="option_2">Option_2</label>
                        <input type="text" class="form-control"   placeholder="Enter Option_2" name="option_2" required>
                 </div>
                  <div class="form-group"><!--restaurant_name-->
                 <label for="option_3">Option_3</label>
                        <input type="text" class="form-control"   placeholder="Enter Option_3" name="option_3" required>
                 </div>
                
                 <div class="form-group"><!--restaurant_name-->
                 <label for="option_4">Option_4</label>
                        <input type="text" class="form-control"   placeholder="Enter Option_4" name="option_4" required>
                 </div>
                  <div class="form-group"><!--restaurant_name-->
                 <label for="answer">Answer</label>
                        <input type="text" class="form-control"   placeholder="Enter Answer" name="answer" required>
                 </div>
                        <button type="submit" name="add" class="btn btn-primary" onclick="alert('Question is added successfully')">ADD Question</button>
                                    <br>
    </form>
          </div>

            <div id="ifMq" style="display: none;">
               <form  action="addaptiscript.php?id=mq" method="post" enctype="multipart/form-data">
                             <div class="form-group"><!--restaurant_name-->
                                     <label for="image">Add CSV File:</label>
                                            <input type="file"  name="file" />
            </div>
                   <button type="submit" name="add" class="btn btn-primary" onclick="alert('Question is added successfully')">ADD Question</button>
                                    <br>
    </form>
          </div>
      


</div>
     <script type="text/javascript">
      
      function text_img_mq_Check() {
        if (document.getElementById('textCheck').checked) {
            document.getElementById('ifText').style.display = 'block';
            document.getElementById('ifImg').style.display = 'none';
            document.getElementById('ifMq').style.display = 'none';
        }
        else if (document.getElementById('imageCheck').checked) {
          document.getElementById('ifText').style.display = 'none';
            document.getElementById('ifImg').style.display = 'block';
            document.getElementById('ifMq').style.display = 'none';

        }
        else {
          document.getElementById('ifText').style.display = 'none';
            document.getElementById('ifImg').style.display= 'none';
          document.getElementById('ifMq').style.display = 'block';
        }

    }
     </script>
     </div>
    </div>
  </div>
  </div>
</div>
  </body>
 </html>