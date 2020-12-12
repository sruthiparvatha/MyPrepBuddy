
<link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="css/query_style.css">
  <link rel="stylesheet" href="css/results.css">
  

  <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">


<?php  error_reporting(0);
    include_once("Database/constants.php");
    include_once("Database/db.php");
    $db = new Database();
    $con = $db->connect();

    
    

    ?>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6f42c1;">
  <img src="images/logo1.jpg" style="float: left;height:  60px;border-radius: 15%;padding-top: 5px;padding-bottom: 10px">
  <a class="navbar-brand" href="home.php" style="color: white; font-family: 'Cookie', cursive; font-size: 40px; padding-left: 30px !important ; padding-top: 20px;">MyPrepBuddy</a>
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <?php
    //Suppress warnings
  
     if(!isset($_SESSION["username"])){?>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="./admin_login.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" > Admin</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./quants.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" >Aptitude </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./reasoning.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" >Logical</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./verbal.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" >Verbal </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./technical.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" > Technical</a>
      </li>
    <?php } else{?>

     <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="./admin_login.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" > Admin</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="./aptitude_query.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" >Aptitude </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./logical_query.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" >Logical</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./verbal_query.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" >Verbal </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./technical_query.php" style=" font-size: 35px;color: white;font-weight: bold;padding: 16px;font-family: 'Comic Neue', cursive;" > Technical</a>
      </li>
     <?php } ?>
     <?php if(isset($_SESSION["username"])){?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;padding: 16px;font-size: 35px;font-family: 'Comic Neue', cursive;font-weight: bold;border: none;">
          Quiz
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="aptitude_quiz.php" style="font-size: 25px; font-family: 'Comic Neue', cursive;">Aptitude Quiz</a>
          <a class="dropdown-item" href="logical_quiz.php" style="font-size: 25px; font-family: 'Comic Neue', cursive;">Logical Quiz</a>
          <a class="dropdown-item" href="verbal_quiz.php" style="font-size: 25px; font-family: 'Comic Neue', cursive;">Verbal Quiz</a>
          <a class="dropdown-item" href="technical_quiz.php" style="font-size: 25px; font-family: 'Comic Neue', cursive;">Technical Quiz</a>
        <?php } ?>
        <?php if(!isset($_SESSION["username"])){?>
        <li class="nav-item"><button onclick="window.location.href='login.html';" class="loginBtn">Login</button></li>
        </div>
      </li>
     <?php } else{ ?>

          <li class="nav-item"><button onclick="window.location.href='logout.php';" class="loginBtn">Logout</button></li>
        </div>
      </li>
    <?php } ?>
    </ul>

  </div>
</nav>
