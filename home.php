<html>
<head>
<title>MyPrepBuddy</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script> -->
  <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cuprum&display=swap" rel="stylesheet">
  <style>

/*.carousel-inner > .item {
   height: 400px;
}*/
  .button {
  background-color: #4CAF50; /* Green */
  border: none;
  
  color: white;
  font-weight: bold;
  
  padding: 10px 25px 15px 25px;
  border-radius: 50%;
  height: 50px;
  margin-top: 5px;
  margin-bottom: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
}
.bq1 { padding-left: 16px; border-left: 5px solid #B32113; width: 50%; }
      .bq1 p { font-style: italic; font-size: 20px; line-height: 30px; color: #8c8785; }
p.after { font-family: Arial, Tahoma, sans-serif;  margin-left: 40px; font-weight: bold;color: #B32113 }
      p.after a { color: #6793d4; text-decoration: none;}
      p.after a:hover { text-decoration: underline; }
</style>
</head>
<body >
   <?php include_once("./navbar/navbar.php"); ?>

<div class="hero-v1">
      <div class="container">
        <div class="row ">
            <div class="col-sm-5 align-items-center">
             <h1 class="heading mb-3" style="font-family: 'Sansita Swashed', cursive;">  <?php  echo "Hi ".$_SESSION["username"]."!!"; ?>&nbsp; &nbsp;Welcome to MyPrepBuddy!  </h1>
              <p style="font-family: 'Cuprum', sans-serif;">Here, you can read the aptitude,technical questions for your interview and entrance exams preparation</p>
            </div>
            <div class="col-sm-7 align-items-center">
              <figure class="illustration">
                <img src="images/pic.jpg" alt="Image" class="img-fluid"  style="height: 300px;border-radius: 5%">
              </figure>
            </div>
          
        </div>
      </div>
    </div><br>
  <blockquote class="bq1" cite="http://www.hongkiat.com/blog/top-css-editors-reviewed/" style="margin-left: 20%">
        <p>However difficult life may seem, there is always something you can do, and succeed at. It matters that you don’t just give up.</p>
         <p class="after" style="margin-left: 20%;font-size: 17px"><b style="font-size: 20px">~</b>Stephen Hawking</p></div>

  </blockquote>
      <br>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="quants.php">
      <img class="d-block p-3 mw-100" src="images/img1.jpg" alt="First slide" style="margin:auto !important;object-fit: contain;">
    </div>
    <div class="carousel-item">
      <a href="reasoning.php">
      <img class="d-block p-3 mw-100" src="images/img2.jpg" alt="Second slide" style="margin:auto !important;">
    </div>
    <div class="carousel-item">
       <a href="verbal.php">
      <img class="d-block p-3 mw-100" src="images/img3.jpg" alt="Third slide" style="margin:auto !important;">
    </div>
     <div class="carousel-item">
       <a href="technical.php">
      <img class="d-block p-3 mw-100" src="images/img4.jpg" alt="Third slide" style="margin:auto !important;" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php include_once("./navbar/footer.php"); ?>
</body>
</html>