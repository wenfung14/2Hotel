<?php 
   require "include/db.country.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Sign Up</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/css_signup.css">
	</head>
	<body>
		<?php include "head.php"?>
		<!-- Container of whole login  -->
		
		<!-- Whole Sign Up container -->
		<div class="sign_whole_cont">

			<!-- Image resource  -->
			<img src="img/login_bg2.png" alt="Homepage Image" class="img_sign" width="100%" height="850px">
			
			<!-- Sign Up container -->
			<div class="sign_cont">

				<h2 class="ds_font1">Join Our Family Today!! </h2>

				<!-- Begining of form -->
				<form action="include/signup.inc.php" method="POST" >
					
					<!-- Begininf of Sign Up Item -->
					<ul class="sign_item">
						<li><!-- Full name -->		
							<label>Full name:</label><br>
							<input type="text" name="sign_up_name">		
						</li>

						<li><!-- Username -->		
								<label>Username:</label><br>
								<input type="text" name="sign_up_username" maxlength="11" placeholder=" Max 11 length">		
						</li> 

						<li><!-- E-mail --> 
								<label>E-mail:</label><br>
								<input type="text" name="sign_up_email" placeholder=".....@gmail.com">					
						</li> 

						<li><!-- Password -->						
								<label>Password:</label><br>
								<input type="password" name="sign_up_pwd">			
						</li> 

						<li><!-- Confirm Password -->						
								<label>Confirm Password:</label><br>
								<input type="password" name="sign_up_confirm_pwd">			
						</li> 

						<br>
						<li ><!-- Submit Buttom -->
							<button class="btn_signup_page" type="submit" name="submit"> Star Booking</button>
						</li>

					</ul> <!-- End of all Sign Up Iteam -->

				</form> <!-- End of form -->

			</div> <!-- End of Sign Up container -->

		</div><!-- The end of whole Sign Up container -->

		<!-- Throw error exception if user didn't input correct input -->
		<!-- The error will display on the URL as get method show it in link, insecure -->
		<?php
		if (isset($_GET["error"])){
			if($_GET["error"] == "emptyinput"){
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Please Fill up all requirement filed!")';  
				echo '</script>'; 
			}
			else if($_GET["error"] == "invalidid"){
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Choose a proper username!")';  
				echo '</script>'; 
			}
			else if($_GET["error"] == "invalidemail"){
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Type a valid email")';  
				echo '</script>'; 
			}
			else if($_GET["error"] == "passwordsdontmatch"){
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Password not matching")';  
				echo '</script>'; 
			}
			else if($_GET["error"] == "usernametaken"){
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Username or Mail taken, try other ")';  
				echo '</script>'; 
			}
			else if($_GET["error"] == "stmtfailed"){
				echo '<script type ="text/JavaScript">';  
				echo 'alert("Something went wrong, try again!")';  
				echo '</script>'; 
			}
			else if($_GET["error"] == "none"){
				echo '<script type ="text/JavaScript">';  
				echo 'alert("You have successfully signed up")';  
				echo '</script>';  
			}
		}

		?>
		
		<?php include "foot.php"?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>