
<?php

include_once("Database/constants.php");
include_once("Database/db.php");
$db = new Database();
$con = $db->connect();

$radioVal = $_GET["id"];

if($radioVal == "text")
{
$result=mysqli_query($con,"SELECT V_id FROM verbal_table ORDER BY V_id DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);
$result=$row["V_id"];
$prev_id=(int)substr($result,1,4);
$prev_id=$prev_id+1;
$prev_id="V0".$prev_id;
  
$question = $_POST['question'];
$question = mysqli_real_escape_string($con, $question);

$option_1 = $_POST['option_1'];
$option_1 = mysqli_real_escape_string($con, $option_1);
$option_2 = $_POST['option_2'];
$option_2 = mysqli_real_escape_string($con, $option_2);
$option_3 = $_POST['option_3'];
$option_3 = mysqli_real_escape_string($con, $option_3);
$option_4 = $_POST['option_4'];
$option_4 = mysqli_real_escape_string($con, $option_4);
$answer = $_POST['answer'];
$answer = mysqli_real_escape_string($con, $answer);

$query = "Insert into verbal_table(V_id,Question,Option_1,Option_2,Option_3,Option_4,Answer) values ('$prev_id','$question','$option_1','$option_2','$option_3','$option_4','$answer')";

mysqli_query($con, $query)or die($mysqli_error($con));

}
else if ($radioVal == "image")
{
$result=mysqli_query($con,"SELECT V_id FROM verbal_table ORDER BY V_id DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);
$result=$row["V_id"];
$prev_id=(int)substr($result,1,4);
$prev_id=$prev_id+1;
$prev_id="V0".$prev_id;
    
$question=$_FILES["qn"]["name"];
move_uploaded_file($_FILES["qn"]['tmp_name'],"images/ImgQuestions/".$_FILES['qn']['name']);

$option_1 = $_POST['option_1'];
$option_1 = mysqli_real_escape_string($con, $option_1);
$option_2 = $_POST['option_2'];
$option_2 = mysqli_real_escape_string($con, $option_2);
$option_3 = $_POST['option_3'];
$option_3 = mysqli_real_escape_string($con, $option_3);
$option_4 = $_POST['option_4'];
$option_4 = mysqli_real_escape_string($con, $option_4);
$answer = $_POST['answer'];
$answer = mysqli_real_escape_string($con, $answer);

// $option_1=$_FILES["image"]["o1"];
// move_uploaded_file($_FILES["image"]['tmp_name'],"images/ImgQuestions/".$_FILES['image']['o1']);

// $option_2=$_FILES["image"]["o2"];
// move_uploaded_file($_FILES["image"]['tmp_name'],"images/ImgQuestions/".$_FILES['image']['o2']);

// $option_3=$_FILES["image"]["o3"];
// move_uploaded_file($_FILES["image"]['tmp_name'],"images/ImgQuestions/".$_FILES['image']['o3']);

// $option_4=$_FILES["image"]["o4"];
// move_uploaded_file($_FILES["image"]['tmp_name'],"images/ImgQuestions/".$_FILES['image']['o4']);

// $answer=$_FILES["image"]["ans"];
// move_uploaded_file($_FILES["image"]['tmp_name'],"images/ImgQuestions/".$_FILES['image']['ans']);

	$query = "Insert into verbal_table(V_id,Question,Option_1,Option_2,Option_3,Option_4,Answer) values ('$prev_id','$question','$option_1','$option_2','$option_3','$option_4','$answer')";

	mysqli_query($con, $query)or die($mysqli_error($con));
}
else if($radioVal== "mq"){

$user_file=$_FILES["file"]["name"];
move_uploaded_file($_FILES["file"]['tmp_name'],"images/ImgQuestions/".$_FILES['file']['name']);

$file = fopen("images/ImgQuestions/".$user_file,"r");
while(($line = fgetcsv($file)) !==false)
  {
   if (array(null) !== $line) { 
$result=mysqli_query($con,"SELECT V_id FROM verbal_table ORDER BY V_id DESC LIMIT 1");
$row = mysqli_fetch_assoc($result);
$result=$row["V_id"];
$prev_id=(int)substr($result,1,4);
$prev_id=$prev_id+1;
$prev_id="V0".$prev_id;

		  $ary=$line;

		   $query = "Insert into verbal_table(V_id,Question,Option_1,Option_2,Option_3,Option_4,Answer) values ('$prev_id','$ary[0]','$ary[1]','$ary[2]','$ary[3]','$ary[4]','$ary[5]')";

			mysqli_query($con, $query)or die($mysqli_error($con));
}
  }

fclose($file);
}

header('location:addverb.php');
?>
