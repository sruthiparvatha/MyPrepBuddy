<html>
<head>
<title> APTITUDE </title>
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
               <p style="background-color:green;color: white;padding-left: 20px">APTITUDE QUESTIONS</p><br>

                    <div style="padding-left: 30px">
                      <h2>If the number 97215 * 6 is completely divisible by 11, then the smallest whole number in place of * will be:</h2><br>
                      <form>
                        <label class="quecontainer">3
                            <input type="radio" name="choice" value="3"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">2
                            <input type="radio" name="choice" value="2"/><br/>
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="quecontainer">1
                            <input type="radio" name="choice" value="1"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">None of These
                            <input type="radio" name="choice" value="None of These"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'3','ans1')">Submit</button>
                      </form>
                      <div id="ans1"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>A sum of money amounts to Rs. 9800 after 5 years and Rs. 12005 after 8 years at the same rate of simple interest. The rate of interest per annum is:</h2><br>
                      <form>
                        <label class="quecontainer">15%
                            <input type="radio" name="choice" value="15%"/> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">8%
                            <input type="radio" name="choice" value="8%"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">12%
                            <input type="radio" name="choice" value="12%"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">5%
                            <input type="radio" name="choice" value="5%"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'12%','ans2')">Submit</button>
                      </form>
                      <div id="ans2"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>A train passes a station platform in 36 seconds and a man standing on the platform in 20 seconds. If the speed of the train is 54 km/hr, what is the length of the platform?</h2><br>
                      <form>
                        <label class="quecontainer">120
                            <input type="radio" name="choice" value="120"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">240
                            <input type="radio" name="choice" value="240"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">300
                            <input type="radio" name="choice" value="300"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">None of These
                            <input type="radio" name="choice" value="None of These"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'240','ans3')">Submit</button>
                      </form>
                      <div id="ans3"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2> Three numbers which are co-prime to each other are such that the product of the first two is 551 and that of the last two is 1073. The sum of the three numbers is:</h2><br>
                      <form id="d4">
                        <label class="quecontainer">75
                            <input type="radio" name="choice" value="75"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">81
                            <input type="radio" name="choice" value="81"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">85
                            <input type="radio" name="choice" value="85"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">92
                            <input type="radio" name="choice" value="92"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'85','ans4')">Submit</button>
                      </form>
                      <div id="ans4"></div>
                      <hr/>
                  </div>


                   <div  style="padding-left: 30px">
                      <h2>  A boat running upstream takes 8 hours 48 minutes to cover a certain distance, while it takes 4 hours to cover the same distance running downstream. What is the ratio between the speed of the boat and speed of the water current respectively?</h2><br>
                      <form id="d5">
                        <label class="quecontainer">2:1
                            <input type="radio" name="choice" value="2:1"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">3:2
                            <input type="radio" name="choice" value="3:2"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">8:3
                            <input type="radio" name="choice" value="8:3"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">None of These
                            <input type="radio" name="choice" value="None of These"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'8:3','ans5')">Submit</button>
                      </form>
                      <div id="ans5"></div>
                      <hr/>
                  </div>
                
            </div>
            <script>
            var validate = function(valore, rightanswer, form) {

            var formname = document.getElementById(form)
            
            if (valore == rightanswer) {
                formname.innerHTML ="<div  style='background-color:lightgreen'><h1>GREAT! You're right!! The answer, in fact, was: " + rightanswer + "</h1></div>";
            }
            else {

                formname.innerHTML ="<div  style='background-color:#ffcccb'><h1>Sorry, you where wrong. The answer was: " + rightanswer + "</h1></div>";
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