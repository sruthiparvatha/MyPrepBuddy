<html>
<head>
<title> APTITUDE </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css"> -->
  <link rel="stylesheet" href="css/pagination.css">
  <link rel="stylesheet" href="css/query_style.css">
<!--   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script> -->
 

</head>
<body>
   <?php include_once("./navbar/navbar.php"); ?>
    
 <div style='transform: scale(0.90); position: relative; top: 2px; background-color: rgba(177,156,217,0.4)'>
               <p style="background-color:green;color: white;padding-left: 20px">APTITUDE QUESTIONS</p><br>
               		<?php 
               			//Suppress warnings
               		    error_reporting(0);
               			include_once("./Database/constants.php");
               			include_once("./Database/db.php");

               			 $per_page_record = 5;  // Number of entries to show in a page.   
        				// Look for a GET variable page if not found default is 1.        
				        if (isset($_GET["page"])) {    
				            $page  = $_GET["page"];    
				        }    
				        else {    
				          $page=1;    
				        }    
				    
				        $start_from = ($page-1) * $per_page_record;     
				   

               			$db = new Database();
						$con = $db->connect();



						$result = $con->query("Select * from aptitude_table LIMIT $start_from, $per_page_record") or die($con->error);
			
							if($result->num_rows > 0){
							while ($row = $result->fetch_assoc()) {
								
				;
               				
               		?>
                    <div style="padding-left: 30px">
                      <h2><?php  
                      $allowTypes = array('jpg','png','jpeg','gif','pdf');
                      $targetFilePath = "images/ImgQuestions/". $row["Question"];
                      $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                      if(in_array($fileType, $allowTypes)){
                        echo "<img style='max-width:80%;height:auto;object-fit:contain;' src='images/ImgQuestions/".$row["Question"]."'>";
                      }else{
                       echo $row["Question"];} //echo $row["Answer"]; ?></h2><br>
                    
                      <form>
                        <label class="quecontainer"><?php echo $row["Option_1"] ?>
                            <input type="radio" name="choice" value="<?php echo $row['Option_1'] ?>"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer"><?php echo $row["Option_2"] ?>
                            <input type="radio" name="choice" value="<?php echo $row['Option_2'] ?>"/><br/>
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="quecontainer"><?php echo $row["Option_3"] ?>
                            <input type="radio" name="choice" value="<?php echo $row['Option_3'] ?>"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer"><?php echo $row["Option_4"] ?>
                            <input type="radio" name="choice" value="<?php echo $row['Option_4'] ?>"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submitBtn" type="button" onclick="validate(choice.value,'<?php echo $row["Answer"]; ?>','<?php echo $row["A_id"] ?>')">Submit</button>
                      </form>
                      <div id="<?php echo $row['A_id']?>"></div>
                      <hr/>
                  </div>

                  <?php 
                  		}
                  	}
                  ?>  
             
              <div align="center" class="pagination">    
		      <?php  
		        $query = "SELECT COUNT(*) FROM aptitude_table";     
		        $rs_result = mysqli_query($con, $query);     
		        $row = mysqli_fetch_row($rs_result);     
		        $total_records = $row[0];     
		          
		    echo "</br>";     
		        // Number of pages required.   
		        $total_pages = ceil($total_records / $per_page_record);     
		        $pagLink = "";       
		      
		        if($page>=2){   
		            echo "<a href='aptitude_query.php?page=".($page-1)."'>  Prev </a>";   
		        }       
		                   
		        for ($i=1; $i<=$total_pages; $i++) {   
		          if ($i == $page) {   
		              $pagLink .= "<a class=active href='aptitude_query.php?page="  
		                                                .$i."'>".$i." </a>";   
		          }               
		          else  {   
		              $pagLink .= "<a href='aptitude_query.php?page=".$i."'>   
		                                                ".$i." </a>";     
		          }   
		        };     
		        echo $pagLink;   
		  
		        if($page<$total_pages){   
		            echo "<a href='aptitude_query.php?page=".($page+1)."'>  Next </a>";   
		        }   
  
      			?>

     		 </div>

			   

			     </div>
			 
            <script>
            var validate = function(valore, rightanswer, form) {

            var formname = document.getElementById(form)
            console.log(valore.localeCompare(rightanswer));
            console.log(rightanswer);
            console.log(valore);
            
            if (valore.localeCompare(rightanswer)==0) {
                formname.innerHTML ="<div  style='background-color:lightgreen;'><h1>GREAT! You're right!! The answer, in fact, was: " + rightanswer + "</h1></div>";

            }
            else {

                formname.innerHTML ="<div style='background-color:#ffcccb'><h1>Sorry, you where wrong. The answer was: " + rightanswer + "</h1></div>";
            }
            };
            </script>
            
<?php include_once("./navbar/footer.php"); ?>
</body>
</html>