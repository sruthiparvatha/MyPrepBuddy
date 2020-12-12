$(document).ready(function(){

	var DOMAIN = "http://localhost/WebDProject/project";

	$("#signUp_form").on("submit", function(){
		var status = false;
		var name = $("#username");
		var email = $("#email");
		var phno = $("#phno");
		var pass1 = $("#pswd1");
		var pass2 = $("#pswd2");
		
		//test1@gmail.com
		var e_patt = new RegExp(/^[a-z0-9_-]+(\.[a-z0-9_-]+)*@[a-z0-9_-]+(\.[a-z0-9_-]+)*(\.[a-z]{2,4})$/);
		if(name.val() == "" || name.val().length < 4 ){
			name.addClass("border-danger");
			$("#u_error").html("<span class='text-danger'>Please Enter a Valid Name, more than 4 char long.</span>");
			status = false;
		}else{
			name.removeClass("border-danger");
			$("#u_error").html("");
			status = true;
		}

		if(!e_patt.test(email.val())){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please enter Valid Email Address.</span>");
			status = false;
		}else{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status = true;
		}

		if(phno.val()=="" || phno.val().length < 10){
			phno.addClass("border-danger");
			$("#ph_error").html("<span class='text-danger'>Please enter Valid Phone Number, 10 digits long.</span>");
			status = false;
		}else{
			email.removeClass("border-danger");
			$("#ph_error").html("");
			status = true;
		}

		if(pass1.val() == "" || pass1.val().length < 8){
			pass1.addClass("border-danger");
			$("#p1_error").html("<span class='text-danger'>Please enter Valid password &gt 8 characters long.</span>");
			status = false;
		}else{
			pass1.removeClass("border-danger");
			$("#p1_error").html("");
			status = true;
		}
		if(pass2.val() == "" || pass2.val().length < 8){
			pass2.addClass("border-danger");
			$("#p2_error").html("<span class='text-danger'>Please enter Valid password &gt 8 characters long. </span>");
			status = false;
		}else{
			pass2.removeClass("border-danger");
			$("#p2_error").html("");
			status = true;
		}

		if ((pass1.val() == pass2.val()) && status == true) {
			//$(".overlay").show();
			$.ajax({
					url : DOMAIN+"/includes/process.php",
					method : "POST",
					data : $("#signUp_form").serialize(),
					success : function(data){
						if (data=="EMAIL_ALREADY_EXISTS") {
							//$(".overlay").hide();
							alert("It seems like this email is already registered.");
						}else if(data == "SOME_ERROR"){
							//$(".overlay").hide();
							alert("Something Went Wrong!!! Please Try again after some time.");
						}else{
							//$(".overlay").hide();
							window.location.href = encodeURI(DOMAIN+"/login.html?msg=You have registered successfully.");
							alert("Successful Registration");
						}
					}
				})
			} else{
				pass2.addClass("border-danger");
				$("#p2_error").html("<span class='text-danger'>Password not matched.</span>");
				status = false;

			}

		
		

	})

	$("#login_form").on("submit",function(){

		var email = $("#log_email");
		var pass = $("#log_password");
		var status = false;

		if(email.val()==""){
			email.addClass("border-danger");
			$("#e_error").html("<span class='text-danger'>Please enter Email Address</span>");
			status =false;
		} else{
			email.removeClass("border-danger");
			$("#e_error").html("");
			status =true;
		}

		if(pass.val()==""){
			pass.addClass("border-danger");
			$("#p_error").html("<span class='text-danger'>Please enter Password</span>");
			status =false;
		} else{
			pass.removeClass("border-danger");
			$("#p_error").html("");
			status =true;
		}
		if(status){
			$.ajax({
				url : DOMAIN+"/includes/process.php",
				method : "POST",
				data : $("#login_form").serialize(),
				success : function(data){

					if (data=="NOT_REGISTERD") {
						//$(".overlay").hide();
						email.addClass("border-danger");
						$("#e_error").html("<span class='text-danger'>It seems like you are not registered.</span>");

					}else if(data == "PASSWORD_NOT_MATCHED"){
						//$(".overlay").hide();
						pass.addClass("border-danger");
						$("#p_error").html("<span class='text-danger'>Please enter CORRECT Password</span>");
						status=false;
					}else{
						//$(".overlay").hide();

						console.log(data);
						window.location.href=DOMAIN+"/home.php";
					}
				}
			})
		}
	})
})
