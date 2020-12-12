<html>
<head>
<title> VERBAL </title>
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
               <p style="background-color:green;color: white;padding-left: 20px">VERBAL QUESTIONS</p><br>

                    <div style="padding-left: 30px">
                      <h2>Correct the sentence: When it was feared that the serfs might go too far and gain their freedom from serfdom, the protestant leaders joined the princes <u>at crushing</u> them.</h2><br>
                      <form>
                        <label class="quecontainer">into crushing
                            <input type="radio" name="choice" value="into crushing"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">in crushing
                            <input type="radio" name="choice" value="in crushing"/><br/>
                            <span class="checkmark"></span>
                        </label>
                        
                        <label class="quecontainer">without crushing
                            <input type="radio" name="choice" value="without crushing"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">No improvement
                            <input type="radio" name="choice" value="No improvement"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'in crushing','ans1')">Submit</button>
                      </form>
                      <div id="ans1"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>Choose the correct spelling:</h2><br>
                      <form>
                        <label class="quecontainer">Ommineous
                            <input type="radio" name="choice" value="Ommineous"/> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Omineous
                            <input type="radio" name="choice" value="Omineous"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Ominous
                            <input type="radio" name="choice" value="Ominous"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Omenous
                            <input type="radio" name="choice" value="Omenous"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'Ominous','ans2')">Submit</button>
                      </form>
                      <div id="ans2"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2>What does the following idiom mean? <br> To catch a tartar</h2><br>
                      <form>
                        <label class="quecontainer">To catch a dangerous person
                            <input type="radio" name="choice" value="To catch a dangerous person"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">To meet with disaster
                            <input type="radio" name="choice" value="To meet with disaster"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">To deal with a person who is more than one's match
                            <input type="radio" name="choice" value="To deal with a person who is more than one's match"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">To trap wanted criminal with great difficulty
                            <input type="radio" name="choice" value="To trap wanted criminal with great difficulty"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'To catch a dangerous person','ans3')">Submit</button>
                      </form>
                      <div id="ans3"></div>
                      <hr/>
                  </div>

                   <div style="padding-left: 30px">
                      <h2> DIVA:OPERA</h2><br>
                      <form id="d4">
                        <label class="quecontainer">producer:theatre
                            <input type="radio" name="choice" value="producer:theatre"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">director:drama
                            <input type="radio" name="choice" value="director:drama"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">thespian:play
                            <input type="radio" name="choice" value="thespian:play"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">conductor:bus
                            <input type="radio" name="choice" value="conductor:bus"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'thespian:play','ans4')">Submit</button>
                      </form>
                      <div id="ans4"></div>
                      <hr/>
                  </div>


                   <div  style="padding-left: 30px">
                      <h2> Harold a professional man who had worked in an office for many years had a fearful dream. In it, he found himself in a land where small slug-like animals with slimy tentacles lived on people's bodies. The people tolerated the loathsome creatures because after many years they grew into elephants which then became the nation's system of transport, carrying everyone wherever he wanted to go. Harold suddenly realised that he himself was covered with these things, and he woke up screaming. In a vivid sequence of pictures this dream dramatised for Harold what he had never been able to put in to words; he saw himself as letting society feed on his body in his early years so that it would carry him when he retired. He later threw off the "security bug" and took up freelance work.<br><br>Which one of the following phrases best helps to bring out the precise meaning of 'loathsome creatures'?</h2><br>
                      <form id="d5">
                        <label class="quecontainer">Security bug and slimy tentacles
                            <input type="radio" name="choice" value="Security bug and slimy tentacles"/><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Fearful dream and slug-like animals
                            <input type="radio" name="choice" value="Fearful dream and slug-like animals"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">Slimy tentacles and slug-like animals
                            <input type="radio" name="choice" value="Slimy tentacles and slug-like animals"><br/>
                            <span class="checkmark"></span>
                        </label>

                        <label class="quecontainer">slug-like animals and security bug
                            <input type="radio" name="choice" value="slug-like animals and security bug"> <br/>
                            <span class="checkmark"></span>
                        </label>

                        <button class="submit" type="button" style=" font-size: 18px;" onclick="validate(choice.value,'Slimy tentacles and slug-like animals','ans5')">Submit</button>
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