<html>
<head>
<title> REASONING </title>
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
               <p style="background-color:green;color: white;padding-left: 20px">REASONING QUESTIONS</p><br>

                    <div style="padding-left: 30px">
                      <h2>  
Here are some words translated from an artificial language.<br>
gorblflur means fan belt<br>
pixngorbl means ceiling fan<br>
arthtusl means tile roof<br>
Which word could mean "ceiling tile"?</h2><br>
                      <form>
                        <label class="quecontainer">gorbltusl
                            <input type="radio" name="choice" value="gorbltusl"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">flurgorbl
                            <input type="radio" name="choice" value="flurgorbl"/><br/>
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="quecontainer">arthflur
                            <input type="radio" name="choice" value="arthflur"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">pixnarth
                            <input type="radio" name="choice" value="pixnarth"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'pixnarth','ans1')">Submit</button>
                      </form>
                      <div id="ans1"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>Statements:<BR>

I. The prices of petrol and diesel in the domestic market have remained unchanged for the past few months.
<br>
II. The crude oil prices in the international market have gone up substantially in the last few months</h2><br>
                      <form>
                        <label class="quecontainer">Statement I is the cause and statement II is its effect
                            <input type="radio" name="choice" value="Statement I is the cause and statement II is its effect"/> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Statement II is the cause and statement I is its effect
                            <input type="radio" name="choice" value="Statement II is the cause and statement I is its effect"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Both the statements I and II are independent causes
                            <input type="radio" name="choice" value="Both the statements I and II are independent causes"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Both the statements I and II are effects of independent causes
                            <input type="radio" name="choice" value="Both the statements I and II are effects of independent causes"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'Both the statements I and II are effects of independent causes','ans2')">Submit</button>
                      </form>
                      <div id="ans2"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>Statements: The old order changed yielding place to new.<br>Conclusions:<br>

    I) Change is the law of nature.<BR>
    II) Discard old ideas because they are old.</h2><br>
                      <form>
                        <label class="quecontainer">Only conclusion I follows
                            <input type="radio" name="choice" value="Only conclusion I follows"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Only conclusion II follows
                            <input type="radio" name="choice" value="Only conclusion II follows"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Either I or II follows
                            <input type="radio" name="choice" value="Either I or II follows"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Neither I nor II follows
                            <input type="radio" name="choice" value="Neither I nor II follows"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'Only conclusion I follows','ans3')">Submit</button>
                      </form>
                      <div id="ans3"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>SCD, TEF, UGH, ____, WKL</h2><br>
                      <form id="d4">
                        <label class="quecontainer">CMN
                            <input type="radio" name="choice" value="CMN"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">UJI
                            <input type="radio" name="choice" value="UJI"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">VIJ
                            <input type="radio" name="choice" value="VIJ"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">IJT
                            <input type="radio" name="choice" value="IJT"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'VIJ','ans4')">Submit</button>
                      </form>
                      <div id="ans4"></div>
                      <hr/>
                  </div>


                   <div  style="padding-left: 30px">
                      <h2>Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next?</h2><br>
                      <form id="d5">
                        <label class="quecontainer">7
                            <input type="radio" name="choice" value="7"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">10
                            <input type="radio" name="choice" value="10"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">12
                            <input type="radio" name="choice" value="12"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">13
                            <input type="radio" name="choice" value="13"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'10','ans5')">Submit</button>
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