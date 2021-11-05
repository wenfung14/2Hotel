<?php 
   require "include/db.country.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/login.css">

	</head>
	<body>
		<?php include "head.php"?>
		<!-- Container of whole login  -->
		<div class="log_whole_cont">
			<!-- Background Image  -->
			<img src="img/login_bg2.png" alt="Homepage Image" class="img_login" width="100%" height="850px">
			
			<!-- Begining of whole login container -->
			<div class="login_item">
				<form action="include/login.inc.php" method="POST"> <!-- login form is in here -->

					<!-- Begining of loging item  -->
					<ul class="login_list">

						<h1>Book Your Dream Hotel With Us Today !!!</h1>
							<!-- E-mail require  -->
							<li>
								<label for="log_Name">E-mail</label><br>
								<input type="text" name="login_user_name">
							</li>

							<!-- Username Password -->
							<li>
								<label>Password </label><br>
								<input type="password" name="login_user_pwd">
							</li>

							<br>

							<li>
							<!-- Submit button -->
							<button type="submit" class="login_btn1" name="submit">Login In</button>
							</li>

					</ul><!-- End of login list -->
				</form>
					<p class="p_ds1">Don't have an account? <a href="<?php echo 'signup.php' ?>">Register Here</a></p>
			</div> <!-- End of login item -->

		</div><!-- End of Whole login container -->

		<?php include "foot.php"?>
		
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>