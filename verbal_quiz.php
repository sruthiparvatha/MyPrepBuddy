<html>
<head>
<title> QUIZ </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

  
 <?php include_once("./navbar/navbar.php"); ?>
  
    
 <div id="test_form" style='transform: scale(0.90); position: relative; top: 2px; background-color: rgba(177,156,217,0.4);'>
              <center><div id="timer"></div></center>
               <p style="background-color:green; color: white;padding-left: 20px">VERBAL QUIZ</p><br>



               		<?php 
               			//Suppress warnings
               		    error_reporting(0);
               			include_once("./Database/constants.php");
               			include_once("./Database/db.php");

               			 


               			$db = new Database();
						        $con = $db->connect();


            $quiz_query = "SELECT * FROM verbal_table ORDER BY RAND() LIMIT 20;";
						$result = $con->query($quiz_query) or die($con->error);
						$count=0;
							if($result->num_rows > 0){
							while ($row = $result->fetch_assoc()) {
								
							     $count+=1;
               				
               		?>
                    <div style="padding-left: 30px; " id="content_block" >
                      <h2><b><?php 
                            $allowTypes = array('jpg','png','jpeg','gif','pdf');
                            $targetFilePath = "images/ImgQuestions/". $row["Question"];
                            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                            if(in_array($fileType, $allowTypes)){
                              echo $count.")"."<img style='max-width:80%;height:auto;object-fit:contain;' src='images/ImgQuestions/".$row["Question"]."'>";
                            }else{
                             echo $count.")".$row["Question"];}  ?></b></h2><br>
                      <form>
                       <?php  $my_array = array($row['Option_1'],$row['Option_2'],$row['Option_3'],$row['Option_4']);
                                shuffle($my_array);
                              ?>
                        <label class="quecontainer"><?php echo $my_array[0] ?>
                            <input type="radio" name="choice" value="<?php echo $my_array[0] ?>"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer"><?php echo $my_array[1] ?>
                            <input type="radio" name="choice" value="<?php echo $my_array[1] ?>"/><br/>
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="quecontainer"><?php echo $my_array[2] ?>
                            <input type="radio" name="choice" value="<?php echo $my_array[2] ?>"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer"><?php echo $my_array[3] ?>
                            <input type="radio" name="choice" value="<?php echo $my_array[3] ?>"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="saveBtn" type="button" onclick="validate(choice.value,'<?php echo $row["Answer"]; ?>','<?php echo $row["V_id"] ?>')">Save</button>
                      </form>
                      
                      <hr/>
                  </div>

                  <?php 
                  		}
                  	}
                  ?>  

                  <center><button onclick="submitTest()" id="submit_test"> Submit Test</button></center>
            

			     </div>
			 
            <script>
            var rightAnswerCount=0;
            var unansweredCount=0;
            
            var validate = function(valore, rightanswer, form) {

            var formname = document.getElementById(form);

            
            if (valore.localeCompare(rightanswer)==0) {
                rightAnswerCount++;

            }
            if (valore.localeCompare("")==0) {
                unansweredCount++;

            }
            
            };
            var wrongAnswerCount=20-rightAnswerCount;

            function submitTest(){
              var form = document.getElementById("test_form");
              form.innerHTML="<div id=result_page align=center><h1>Test submitted successfully.</h1><br>Total Marks Obtained: "+rightAnswerCount+"/"+"20"+"<br>Unanswered Count: "+unansweredCount+"<br></div>";
            }



            var sec = 1800;
    
            var time = setInterval(myTimer,1000);

            function myTimer() {
                var timer = document.getElementById('timer');
                timer.innerHTML= "<div id=timer_count>"+Math.floor(sec/60)+" min " +(sec%60)+ " sec left"+"</div>";
                sec--;
                if (sec == -1) {
                    clearInterval(time);
                    submitTest();
                    alert("Time out!! :(");
                }
            }
            </script>
            
  <?php include_once("./navbar/footer.php"); ?>
</body>
</html>