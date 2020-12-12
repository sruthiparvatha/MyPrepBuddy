
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <title>AdminLogin | Myprepbuddy</title>

        
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">

        <!--jQuery library--> 
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style >
            .inner-addon {
  position: relative;

}

/* style glyph */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align glyph */
.left-addon .glyphicon  { left:  0px;}


/* add padding  */
.left-addon input  { padding-left:  30px; }



        </style>
    </head>

    <body style="background:linear-gradient(#e66465, #9198e5);">
    <div class="navbar navbar-inverse navbar-fixed-top" id="header">
  
    <div class="container" >
      
        <div class="navbar-header" >

                <img src="images/logo1.jpg" style="float: left;height:  60px;border-radius: 15%;padding-top: 5px;padding-bottom: 10px">
             <a class="navbar-brand" href="home.php" style="color: white; font-family: 'Cookie', cursive; font-size: 40px; padding-left: 30px !important ; padding-top: 20px;">MyPrepBuddy</a>
        </div>
      </div></div>
        <div id="content" >
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row align-items-center"  style="margin-top: 90px;">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary"  style="border-color:#000000 ">
                            <div class="panel-heading" style="background-color: #B22222;border-color:#B22222 ">
                                <h4 style="text-align: center;font-size: 20pX"><b>Admin Panel Login</b></h4>
                            </div>
                            <div class="panel-body">
                              
                                <form action="admin_login_script.php" method="POST">
                                    <div class="form-group" style="height: 50px">
                                        <div class="inner-addon left-addon" style="font-size: 25px">
                                            <i class="glyphicon glyphicon-user" ></i><input type="email" class="form-control " style="height: 50px;padding-left: 50px"  name="e-mail" required = "true">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="inner-addon left-addon" style="font-size: 25px">
                                            <i class="glyphicon glyphicon-lock" ></i>
                                        <input type="password" class="form-control" style="height: 50px;padding-left: 50px" name="password" required = "true">
                                    </div></div>
                                  
                                   
                                
                            </div><div class="panel-footer" style="height: 80px">
                              <button type="submit" name="submit" class="btn btn-primary" style="background-color: #B22222;border-color:#B22222;height: 40px;width: 100px;font-size: 20px;margin-left: 135px;margin-top: 10px"><b>LOGIN</b></button><br></div></form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div></div>
    <?php include_once("./navbar/footer.php"); ?>
    </body>
</html>

