<html>
<head>
<title> TECHNICAL </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--   <link rel="stylesheet" href="css/style.css" type="text/css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/bootstrap.min.js"></script> -->
  <style>
     p{
        font-size: 40px;
    }
    .submit {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 12px;
}
/* The container */
.quecontainer {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.quecontainer input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.quecontainer:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.quecontainer input:checked ~ .checkmark {
  background-color: purple;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.quecontainer input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.quecontainer .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
}
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



</style>
</head>
<body>
   <?php include_once("./navbar/navbar.php"); ?>
    
 <div style='transform: scale(0.90); position: relative; top: 2px; background-color: rgba(177,156,217,0.4)'>
               <p style="background-color:green;color: white;padding-left: 20px">TECHNICAL QUESTIONS</p><br>

                    <div style="padding-left: 30px">
                      <h2>Process is :</h2><br>
                      <form>
                        <label class="quecontainer">program in High level language kept on disk
                            <input type="radio" name="choice" value="program in High level language kept on disk"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Contents of main memory
                            <input type="radio" name="choice" value="Contents of main memory"/><br/>
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="quecontainer">a job in secondary memory
                            <input type="radio" name="choice" value="a job in secondary memory"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">a program in execution
                            <input type="radio" name="choice" value="a program in execution"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'a program in execution','ans1')">Submit</button>
                      </form>
                      <div id="ans1"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>Which symbol will be used with grep command to match the pattern pat at the beginning of a line?</h2><br>
                      <form>
                        <label class="quecontainer">^pat
                            <input type="radio" name="choice" value="^pat"/> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">$pat
                            <input type="radio" name="choice" value="$pat"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">pat$
                            <input type="radio" name="choice" value="pat$"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">pat^
                            <input type="radio" name="choice" value="pat^"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'^pat','ans2')">Submit</button>
                      </form>
                      <div id="ans2"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2> Which will legally declare, construct, and initialize an array?</h2><br>
                      <form>
                        <label class="quecontainer">int [] myList = {"1", "2", "3"};
                            <input type="radio" name="choice" value="int [] myList = {"1", "2", "3"};"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">int [] myList = (5, 8, 2);
                            <input type="radio" name="choice" value="int [] myList = (5, 8, 2);"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">int myList [] [] = {4,9,7,0};
                            <input type="radio" name="choice" value="int myList [] [] = {4,9,7,0};"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">int myList [] = {4, 3, 7};
                            <input type="radio" name="choice" value="int myList [] = {4, 3, 7};"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'int myList [] = {4, 3, 7};','ans3')">Submit</button>
                      </form>
                      <div id="ans3"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>  
The keyword used to transfer control from a function back to the calling function is</h2><br>
                      <form id="d4">
                        <label class="quecontainer">switch
                            <input type="radio" name="choice" value="switch"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">goto
                            <input type="radio" name="choice" value="goto"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">return
                            <input type="radio" name="choice" value="return"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">go back
                            <input type="radio" name="choice" value="go back"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'return','ans4')">Submit</button>
                      </form>
                      <div id="ans4"></div>
                      <hr/>
                  </div>


                   <div  style="padding-left: 30px">
                      <h2>  
The DBMS acts as an interface between what two components of an enterprise-class database system?</h2><br>
                      <form id="d5">
                        <label class="quecontainer">Database application and the database
                            <input type="radio" name="choice" value="Database application and the database"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">The user and the database application
                            <input type="radio" name="choice" value="The user and the database application"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Database application and SQL
                            <input type="radio" name="choice" value="Database application and SQL"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">The user and the database application
                            <input type="radio" name="choice" value="The user and the database application"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'Database application and the database','ans5')">Submit</button>
                      </form>
                      <div id="ans5"></div>
                      <hr/>
                  </div>
                
            </div>
            <script>
            var validate = function(valore, rightanswer, form) {

            var formname = document.getElementById(form)
            
            if (valore == rightanswer) {
                formname.innerHTML ="<div style='background-color:lightgreen'><h1>GREAT! You're right!! The answer, in fact, was: " + rightanswer + "</h1></div>";
            }
            else {

                formname.innerHTML ="<div style='background-color:#ffcccb'><h1>Sorry, you where wrong. The answer was: " + rightanswer + "</h1></div>";
            }
            };
            </script>
            <div style="display: flex;justify-content: center; ">
              <img src="https://www.animatedimages.org/data/media/111/animated-arrow-image-0270.gif" border="0" alt="animated-arrow-image-0270" /></a>
             
              <button class="submit" type="button" style=" font-size: 18px;margin-left: 10px;" onclick="window.location.href='login.html';">Click here for more questions.</button>
          </div>

  <?php include_once("./navbar/footer.php"); ?>
</body>
</html>