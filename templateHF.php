<?php 
   require "include/db.country.inc.php";
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
	</head>
	<body>
		<?php include "head.php"?>
		
						<!-- Below Here are the card which display all the hotel -->
							<!-- Fetch database and implement inside the card view  -->

							<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca;"> <!-- The whole entire card  -->
							  <div class="card-body">
							  	<!-- Use the row format -->
							  	<div class="row">
							  		<div class="col-3 bg-success">
							  			<img src="img/Hotel A - 100_/Malaysia/Flamingo Hotel Penang/flaHotel_album_delux_room3_resize.png" alt="Image place here" class="pt-3">
							  		</div>
							  		<div class="col-7 bg-dark text-white">
							  			<!-- Name Here -->
							  			<h3 class="card-text"> Scotland Villa Hotel</h3>
							  			<!-- Location Here -->
							  			<h4>Localtion :<br>18-18-02, Scotland Villa, Medan Lumba Kuda , 10450, Pulau Pinang</h4>
							  			<br>
							  			<h4>State :</h4>
							  			<!-- State Here -->
							  			<p>Georgtown</p>

							  			<!-- Vaccination Here -->
							  			<h4>Vaccination:-</h4> 
							  			<div 
							  			style="border: 2px solid #ffffff; border-radius: 10px;
							  					margin-right:300px; text-align: center;
							  					padding: 30px 0px; background-color: green;

							  			">
							  				<h2>Hotel Full Vaccination</h2>
							  			</div>

	
							  		</div>
							  		<div class="col-2 bg-danger ">
							  			<h2 style=" text-align: right;">Price :- </h2>
							  			<h2 style=" text-align: right;">MYR 120 </h2>
							  			<h5 style=" text-align: right;">*display information of how many people  </h5>
							  			<br><br><br><br> <!-- this can be delete if the layout is differnet  -->
							  			<h6 style=" text-align: right;">NOTE *Tax included in price </h6>
							  			
							  			<!-- Button here -->
							  			<a href="#" type="button" class="btn btn-primary btn-lg float-right">Check Room Availability </a>
							  		</div>
							  	</div> <!-- The end of card row  -->
							  </div> <!-- The end of card body -->
							</div> <!-- The end of card  -->


							<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca;"> <!-- The whole entire card  -->
							  <div class="card-body">
							  	<!-- Use the row format -->
							  	<div class="row">
							  		<div class="col-3 bg-success">
							  			<img src="https://via.placeholder.com/320.png?text=The+Image+Hold+Here" alt="Image place here" class="pt-3">
							  		</div>
							  		<div class="col-7 bg-dark text-white">
							  			<h3 class="card-text"> Scotland Villa Hotel</h3>
							  			<h4>Localtion :<br>18-18-02, Scotland Villa, Medan Lumba Kuda , 10450, Pulau Pinang</h4>
							  			<br>
							  			<h4>State :</h4>
							  			<p>Georgtown</p>
							  			<h4>Hotel Higlight :</h4> <!--  here information will need to retrieve from the databsae and implement inside  -->
							  			<div 
							  			style="border: 2px solid #ffffff; border-radius: 10px;
							  					margin-right:300px; text-align: center;
							  					padding: 30px 0px; background-color: red;

							  			">
							  				<h2>Hotel Not Vaccination</h2>
							  			</div>
	
							  		</div>
							  		<div class="col-2 bg-danger ">
							  			<h2 style=" text-align: right;">Price :- </h2>
							  			<h2 style=" text-align: right;">MYR 120 </h2>
							  			<h5 style=" text-align: right;">*display information of how many people  </h5>
							  			<br><br><br><br> <!-- this can be delete if the layout is differnet  -->
							  			<h6 style=" text-align: right;">NOTE *Tax included in price </h6>
							  			
							  			<!-- button here -->
							  			<a href="#" type="button" class="btn btn-primary btn-lg float-right">Check Room Availability </a>
							  		</div>
							  	</div> <!-- The end of card row  -->
							  </div> <!-- The end of card body -->
							</div> <!-- The end of card  -->


						
		<?php include "foot.php"?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>