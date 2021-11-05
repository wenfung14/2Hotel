<?php 
	
	include "include/functions.inc.php";
	include "include/db.country.php";
	include "head.php";

	$date1 = $_SESSION['userDateI']; 
	$date2 = $_SESSION['userDateO'];

	// a variable to hold price
	
	$hotelName = $_SESSION['hotelName']; // give string "Flamingo Hoel"
	$hotelState = $_SESSION['hotelState']; // give string "Penang"
	$hotelRoom = $_SESSION['hotelRoom']; // give path from row

	// check if another hotel is selected
	if(!isset($_SESSION['hotelRoom2'])){
		$hotelRoom2= null;
		$_SESSION['amount2'] =null;
	}else{
		$hotelRoom2 = $_SESSION['hotelRoom2'];
	}


	$hotelVacc = $_SESSION['hotelVacc']; // give 1 num
	$hotelImg = $_SESSION['hotelImg']; // roll from image
	$hotelLoc = $_SESSION['hotelloc']; // get the location hotel
	$_SESSIONp["totalAmount"]=0;
	$_SESSION['holdprice'] = 0;
	$_SESSION['holdprice2'] = 0;




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

		<!-- API for using icon Fontawsome -->
		<script src="https://kit.fontawesome.com/3d4e324e6f.js" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="css/css_payment.css">

	</head>


	<body>
		

		<?php

			//if the user check the submit button 
			if(isset($_POST['subPayment'])){
				// Flamingo 
				// take the number
				if(isset($_POST["flaDeluex"])){
					// save the amount of room selected on previous
					$_SESSION['amount'] = $_POST["flaDeluex"];
					// hold the price 
					$_SESSION['totalAmount'] = $_SESSION['amount'] *219;
				}

				if (isset($_POST['gurneyDelux'], $_POST['gurneyStandard'])){

					// Gurney
					// take the number
					if(isset($_POST["gurneyDelux"])){
						// save the amount of room selected on previous
						$_SESSION['amount'] = $_POST["gurneyDelux"];
						// hold the price 
						$_SESSION['holdprice'] = $_SESSION['amount'] *137;
					}

					// take the number if there is another room
					if(isset($_POST["gurneyStandard"])){
						// save the amount of room selected on previous
						$_SESSION['amount2'] = $_POST["gurneyStandard"];
						// hold the price 
						$_SESSION['holdprice2'] = $_SESSION['amount2'] *128;
					}


					$_SESSION['totalAmount'] = $_SESSION['holdprice'] + $_SESSION['holdprice2'];

				}






			}// the end of checking button

		?>


		<!-- The whole container  -->
		<div class="container mb-4 mt-4 rounded">
			<div class="row bg-dark" >
				<div class="col-12">
					<h3 class="m-3 text-white"> Progress of Booking Hotel :</h3>
					<!-- Boot Strap Pgoress Bar -->
					<!-- Outer container of progress bar -->
					<div class="progress mb-3" style="height:40px">

						 <!-- Inner container of progress bar -->
	   					 <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%;height:40px; font-size:25px;">
  							90% Until Booking Completion
	   					</div> <!-- end of innter container of progress bar  -->
  					</div><!-- end of outer container of progress bar -->
				</div>
			</div>








			<!-- Whole Entire Layout in this row -->
			<div class="row">
				
				<div class="col-4 bg-success p-3" ><!-- The Side Bar Configuration -->
					<div class="card mb-4" style="border: 5px solid #00539CFF; border-radius: 10px;">
					  <div class="card-header">
					   <strong> Your booking details:- </strong>
					  </div>
					  <div class="card-body"> <!--  Body is here -->

						<dl style="font-size:25px; font-weight: bold;">
						  <dt>Check-In Date:-</dt>
						  	<dd><?php echo $date1;?></dd>

						  <dt>Check-Out Date:-</dt>
						  	<dd><?php echo $date2;?></dd>

						  <dt>Total Days To Overnight</dt>
						  	<dd><?php echo findDay($date1,$date2)." Days"; ?></dd>
						</dl>
					    
					  </div>
					</div >

					<div class="card mb-4" style="border: 5px solid #00539CFF; border-radius: 10px;">
					  <div class="card-header">
					    <strong>Total Price Summary:-</strong>
					  </div>
					  <div class="card-body"> <!--  Body is here -->
					    

					    <!-- Total Price Summary -->
					    <p class="card-text" style="font-size:25px">
					    <?php 
					    echo $hotelRoom ."      X <span style='font-size: 30px; color: red;'>".$_SESSION['amount']."</span>";
					    echo "<br>";
					    if(isset($_SESSION['hotelRoom2'])){
					    	echo $hotelRoom2 ."      X <span style='font-size: 30px; color: red;'>".$_SESSION['amount2']."</span>";
					    }
					    ?>
						</p>

					    <h4>Price:- MYR <?php echo $_SESSION['totalAmount']?></h4>
					  </div>
					</div>

					<div class="card text-white bg-info mb-4"style="border: 5px solid #00539CFF; border-radius: 10px;">
					  <div class="card-header">
					    <strong>The Fine Print:-</strong>
					  </div>
					  <div class="card-body"> <!--  Body is here -->
					    
					    <p class="card-text">
					    	In response to the coronavirus (COVID-19), additional safety and sanitation measures are in effect at this property.
					    	<br><br>
							This property does not accommodate bachelor(ette) or similar parties.
							<br><br>
							A damage deposit of MYR 50 is required on arrival. This will be collected as a cash payment. You should be reimbursed on check-out. Your deposit will be refunded in full, in cash, subject to an inspection of the property.
					    </p>
					  </div>
					</div>

				</div><!--  The end of the side bar -->



				<!-- Main Container -->



				<!-- The main content -->
				<div class="col-8 bg-danger">

					<!-- Temporary Puting a card for showing  -->
					
					<div class="container-fluid bg-success mt-3" style="border: 5px solid black; border-radius: 10px; padding: 30px 30px;">
						<div class="row">
						 	<div class="col-4 bg-info">
						 		<img src="<?php echo $hotelImg; ?>" style="width:200px; height: 300px;">
						 	</div>
							

						 	<div class="col-8">
						 		<h4><b>Name:</b><br><?php echo $hotelName;?></h4>
						 		<h4><b>State:</b><br><?php echo $hotelState;?></h4>
						 		<h4><b>Location:</b><br><?php echo $hotelLoc;?></h4>
						 		<br>
						 		<h4><?php 
						 			if($hotelVacc == 0){
					  					echo '<div 
					  				}
					  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: red;">
					  				<h2>Hotel Not Full Vaccination</h2>
					  			</div>';} elseif($hotelVacc == 1){ // end of if and start else if
					  				echo '<div 
					  				}
					  			style="border: 2px solid #ffffff; border-radius: 10px;padding: 10px 50px; background-color: green;">
					  				<h2>Hotel Full Vaccination</h2>
					  			</div>';
					  			} // end of elseif
						 		?></h4>


						 		

						 	</div>
						 </div>
					</div> <!-- The end of the card -->
					









					<div class="bg-success m-4 pb-1 rounded">
						<h3 class="m-2">How Do You Want To PAY </h3>
						<!-- Container like Booking.com Here  -->
						<div ><!-- Inner Payment Container -->
							<div style="background-color: #4299c2;" class="m-2 rounded-2 pb-1">

							<form action="payment.php" method="post">	
								<div class="card m-2" style="width: 16rem; display: inline-block; ">
									<div class="form-check rounded">
									  <input class="form-check-input" type="radio" name="PaymentMethod" value="payCard" checked>
										  <div class="card-body">
										  	<i class="far fa-credit-card" style="font-size: 70px; padding-left: 40px;"></i>
										    <h6 class="card-title" style=" padding-left: 20px;">Credit/Debit Card:-</h6>
										  </div>
									</div>	
								</div>

								<div class="card m-2" style="width: 16rem; display: inline-block;">
									<div class="form-check">
									  <input class="form-check-input" disabled type="radio" name="PaymentMethod" value="payMoney"> <!-- onclick is here -->
										  <div class="card-body">
										  	<i class="fas fa-hand-holding-usd" style="font-size: 70px; padding-left: 40px;"></i>
										    <h6 class="card-title" style=" padding-left: 20px;">Payment in Counter</h6>
										  </div>
									</div>	
								</div>
							</form>

								<!-- Accepted Card Container  -->
								<div class="m-2 bg-light rounded">
									<!-- Display Card Accepted -->
									<h3 class="m-2">Credit Card Accepted</h3>
									<i class="fab fa-cc-visa m-2" style="font-size:60px;color:orangered;"></i>
									<i class="fab fa-cc-mastercard m-2" style="font-size:60px;color:orchid;"></i>
									<i class="fab fa-cc-paypal m-2" style="font-size:60px;color:darkblue;"></i>
								</div>

								<!-- continaer of using card -->
								<!-- this will change base on customer select  -->
								<div class="m-2 bg-light p-1 rounded-2" id="payChange1">
									
									<form method="post" class="m-3" action="#"> <!--  This will be taking the information to the page -->
									    <label for="fname"><strong>Cardholder's Name*</strong></label><br>
									    <input type="text" id="Cname" name="Cname" placeholder="As per IC" style="width: 50%; padding: 8px 15px;"><br><br>

									    <label for="lname"><strong>Card Number*</strong></label><br>
									    <input type="text" id="Cnum" name="Cnum" maxlength="16" placeholder="16 Digits Number" style="width: 50%; padding: 8px 15px;"><br><br>

									    <div style=" display: inline-block; width: 40%;">
										    <label for="email"><strong>Expiration Date*</strong></label><br>
										    <input type="month" id="expDate" name="expDate"><br>
										</div>

										<div style=" display: inline-block; width: 20%;">
										    <label for="birthday"><strong>CVC*</strong></label><br>
										    <input type="num" id="cvcNum" name="cvcNum"  size="4"><br>
									    </div>
									    <br><br>
									    <button class="btn btn-primary btn-lg active" type="submit" value="Submit">Book Now</button> <!-- Submit Button  -->
									</form>
								</div>

							</div>
						</div>
					</div> <!-- The end of paument column -->

				</div>
			</div>
		</div> <!-- End of container fluid -->

		<?php include "foot.php" ?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>