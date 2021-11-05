<?php
	session_start();
	
	//check user id
	if(!isset($_SESSION['useruid'])){
	$user = null;
	}else{
	$user = $_SESSION['useruid'] ;
	}

	
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

		<!-- CSS link -->
		<link rel="stylesheet" type="text/css" href="css/header.css">

		<!-- JQuery link -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Font Awsome API Token -->
		<script src="https://kit.fontawesome.com/38f261fa06.js" crossorigin="anonymous"></script>


	</head>
	<body>
		<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-lg-end">

		   <!-- Hotel logo -->
		  <a class="navbar-brand">
		    <img src="img/logo.png" alt="logo" class="hotel_logo">
		  </a>
		  
		  <!-- Navigation Links with bootstrap -->
		  <ul class="navbar-nav pr-4">
		    <li class="nav-item pr-2">
		      <a class="nav-link" href="<?php echo "homepage.php"?>">Homepage</a>
		    </li>
		    <li class="nav-item pr-2">
		      <a class="nav-link" href="<?php echo "about.php"?>">About Us</a>
		    </li>
		    <li class="nav-item pr-2">
		      <a class="nav-link" href="<?php echo "covid_19.php"?>">Covid-19 Support</a>
		    </li>
		    

		  <?php 
		  // check if session have variable inside,if not , remain default
			  if (isset($_SESSION['useruid'])) {

			   	echo "<li class='nav-item pr-2'>
		      <a class='nav-link' href='user_account.php'>Profile </a>
		    </li>";

		    	echo "<li class='nav-item pr-2'>
		      <a class='nav-link' href='include/logout.inc.php'>Log Out</a>
		    </li>";
			  
			}else{
				
					echo "<li class='nav-item pr-2'>
		      <a class='nav-link' href='login.php'>Log In</a>
		    </li>";

			     echo '<a href="signup.php"><button type="button" class="sp_btn">Sign Up</button></a>';

			}


		  ?>
			</ul>
		</nav>


		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>					