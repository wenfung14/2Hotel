<?php
	/*database set here*/
	require "include/db.country.php";
	require "include/functions.inc.php";
	include "head.php";

	// retrive information from post and set into session (first time) 

	if(isset($_POST['search_des'])){
		$_SESSION['userDes'] = $_POST['search_des']	;
		//echo $_SESSION['userDes'];
		//echo "<br>";
	}
	
	if(isset($_POST['search_date_I'])){
		$_SESSION['userDateI'] = $_POST['search_date_I']	;
		//echo $_SESSION['userDateI'];
		//echo "<br>";
	}else{
		$_SESSION['userDateI']='';
	}

	if(isset($_POST['search_date_O'])){
		$_SESSION['userDateO'] = $_POST['search_date_O']	;
		//echo $_SESSION['userDateO'];
		//echo "<br>";
	}else{
		$_SESSION['userDateO']='';
	}

	if(isset($_POST['search_date_I'])){
		$_SESSION['numA'] = $_POST['search_adult']	;
		//echo $_SESSION['numA'];
		//echo "<br>";
	}else{
		$_SESSION['numA']='';
	}

	if(isset($_POST['search_date_I'])){
		$_SESSION['numC'] = $_POST['search_child']	;
		//echo $_SESSION['numC'];
		//echo "<br>";
	}


	// change variable if user search again 

	if(isset($_POST['destination'])){
		$_SESSION['userDes'] = $_POST['destination'];
		//echo $_SESSION['userDes'];
		//echo "<br>";
	}

	if(isset($_POST['date-in'])){
		$_SESSION['userDateI'] = $_POST['date-in']	;
		//echo $_SESSION['userDateI'];
		//echo "<br>";
	}

	if(isset($_POST['date-out'])){
		$_SESSION['userDateO'] = $_POST['date-out']	;
		//echo $_SESSION['userDateO'];
		//echo "<br>";
	}


	if(isset($_POST['in_saerch_adult'])){
		$_SESSION['numA'] = $_POST['in_saerch_adult']	;
		//echo $_SESSION['numA'];
		//echo "<br>";
	}

	if(isset($_POST['in_saerch_child'])){
		$_SESSION['numC'] = $_POST['in_saerch_child']	;
		//echo $_SESSION['numC'];
		//echo "<br>";
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
		<link rel="stylesheet" type="text/css" href="css/hotel_list.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>

	<body>
		<!-- Header file here -->
		


		<?php if(!isset($user)) {?>
			<div style="margin: 20px 320px;padding: 40px 0px; background-color: red; text-align: center; border: 5px solid #000000; border-radius: 10px; color:#ffffff">
				<i class="fas fa-exclamation-triangle" style="float: left; font-size:100px; margin:0px 0px 0px 50px ; color: yellow;" ></i>
				<h1>You are require to create an account before booking</h1>
				<p>* All of the booking button unable to be click </p>
			</div>
		<?php } ?>


		<!-- Whole Container contain  -->
		<div class="container-fluid" style="background-color: #f0f0f0;">

			<div class="row bg-dark border-top" >
				<div class="col-12 ">
					<h3 class="m-3 text-white"> Progress of Booking Hotel :</h3>
					<!-- Boot Strap Pgoress Bar -->
					<!-- Outer container of progress bar -->
					<div class="progress mb-3" style="height:40px">

						 <!-- Inner container of progress bar -->
	   					 <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="40"
  							aria-valuemin="0" aria-valuemax="100" style="width:40%;height:40px; font-size:25px;">
  							40% Until Booking Completion
	   					</div> <!-- end of innter container of progress bar  -->
  					</div><!-- end of outer container of progress bar -->

				</div>
			</div>




			<!-- Saerc Bar-->

			
			<div class="row">
				<div class="col-3 "> 

					<!-- Filter contain in here -->
					<!--  Side Filter feature here -->

					<div class="flex-column bg-white mt-4 p-4 mb-3" style="border: 5px solid #00539CFF; border-radius: 10px;">
						<!-- 
						Send form back to here if anything want to change 
						similar to the saerch function
						 -->
						<form action="hotel_list.php" method="POST"> 

							<!-- Bring back to here if user want to seach again -->
							<h4 class="ds_font2"> Search Again :-</h4>
							<div class="mb-3">
							  <label for="exampleFormControlInput1" class="form-label ds_font3">Destination:-</label>
							  <input type="text" class="form-control" name="destination" placeholder="Full Country Name">
							</div>
							<div class="mb-3">
							  <label for="exampleFormControlTextarea1" class="form-label">Date-In</label>
							  <input type="date" class="form-control" name="date-in" id="search_date_I">
							</div>
							<div class="mb-3">
							  <label for="exampleFormControlTextarea1" class="form-label">Date-Out</label>
							  <input type="date" class="form-control" name="date-out" id="search_date_I">
							</div>

							<div class="row">
								<div class="col-6">
									<div class="mb-3">
									  <label for="in_saerch_adult" class="form-label">Adult Amount:</label><br>
									  <input type="number" class="form-control" name="in_saerch_adult" id="in_saerch_adult" min="0">
									</div>
								</div>

								<div class="col-6">
									<div class="mb-3">
									  <label for="in_saerch_child" class="form-label">Child Amount:</label><br>
									  <input type="number" class="form-control" name="in_saerch_child" id="in_saerch_child" min="0">
									</div>
								</div>
							</div>

							<a href="<?php echo"hotel_list.php"?>"><button type="submit" name="submit2" class="inner_button"  >Search Hotel !!!</button></a>
						</form>
					</div>


					<!-- Prevent previous date to be select  -->

					<script type="text/javascript">

					// create date object 
					var date = new Date();

					// hold today date
					var tdate = date.getDate();

					/*hold today month 
					reason of implement "+ 1" is because getMonth function retrieve previous month
					*/
					var month = date.getMonth() + 1;

					/*when retrieve data, consloe log only return 1 string value instead of "01" value
					if less then 10, add "0" as string  *(2021/4/16) => (2021/04/16))
					same apply to month
					*/
					if(tdate < 10){
						tdate = '0' + tdate; 
					}

					if(month < 10){
						month = '0' + month;
					}

					// hold today year
					var year = date.getUTCFullYear();
					// initialize date value
					var minDate = year + "-" + month + "-" + tdate;

					// set attribute to both date
					// Date in
					document.getElementById("search_date_I").setAttribute('min', minDate);
					// Date out
					document.getElementById("search_date_O").setAttribute('min', minDate);	
					
					</script>
		

				

				<!-- Filter Contain begin  -->


					<!-- Submit the form button  -->
					
					<!-- Haven't set it yet -->
					<!-- <form method="POST" action="hotel_list.php"> -->

					<!-- <h1> Filter by :-</h1> -->
					<!-- <hr class="new5"> -->
					
					<!-- Submit Button here -->
					
					<!-- <button class="inner_button2" type="submit" name="filter">Filter Hotel</button> -->
					<!-- <button class="inner_button2" type="submit" name="refilter">Reset Filter</button> -->
					

					<!-- Health and Safety Measurement Container-->
					<div class="flex-column bg-white mt-4 p-4" style="border: 5px solid #00539CFF; border-radius: 10px;">
						<h3> Health And <br>Safety Measure:- </h3>							
							<ul class="list-group">
								<li class="list-group-item">
									<div class=" form-check">
									  <label class="form-check-label">

									    <input class="form-check-input" type="checkbox" name="cVacc"  id="check2" onclick="myFunction()">
									    Properties with additional health & safety measures
									  </label>
									  
									</div>
								</li>
							</ul>
							
					</div>

					<!-- </form> -->
 					
 					<script type="text/javascript">
					function myFunction() {
					  // Get the checkbox
					  var checkBox = document.getElementById("check2");
					  // Get the output text
					  var hotelL = document.getElementById("wholeHotel");
					  var vhotelL = document.getElementById("vaccHotel");

					  // If the checkbox is checked, display the output text
					  if (checkBox.checked == true){
					  	hotelL.style.display = "none";
					  	vhotelL.style.display = "block";
					  } else {
					    hotelL.style.display = "block";
					  	vhotelL.style.display = "none";
					  }
					}
 					</script>

				</div><!-- End of col 3-->
				<!-- End of Side Bar Filter function -->

				






				<!-- Main Container Content -->


				<!-- Wabpage Main Contain here -->
				<!-- if inner search again, then go blank -->
				<div class="col-9" style="background-color: #f0f0f0" >
					<div class="row mt-3">
						<div class="col-12" > <!-- This is the main column, don't touch this -->


							<div id="wholeHotel"> <!-- Make the element go disseaspear  -->

							<!-- Below Here are the card which display all the hotel -->
							<!-- Fetch database and implement inside the card view  -->

									
								<?php if (isset($_POST["submit1"])){ ?> <!-- PHP main Head -->
									<?php /*php head 1*/
										$home_des = $_POST['search_des'];
										$GLOBALS['hotelC'] = $home_des;
										$results = searchHotel($conn,$home_des);
										$resultsCheck = mysqli_num_rows($results);
										
										
										if(!$resultsCheck>0){

											echo '<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca; margin: 250px 250px; "> 
												  <div class="card-body">
												  	<h3 style="text-align: center; font-size: 80px; padding: 50px 0px;">None Hotel Have Been Saerch :(</h3>	
												  
												  </div> 
											</div>';

										}else{

										while($row=mysqli_fetch_assoc($results)){
									?><!-- end php head 1  -->
										<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca;" > 
											  <div class="card-body mb-1">
											  	
											  	<div class="row">
											  		<div class="col-3" style="background-color: #e0904a; border-radius: 5px;">
											  			<img src="<?php echo $row['hotel_Img']?>" width="320" height="310"  class="pt-3">
											  			
											  		</div>
											  		<div class="col-7 bg-dark text-white">

											  			<h3 class="card-text mt-1"> <?php echo $row['hotel_Name'];?></h3>
											  			<!-- Location Here -->
											  			<h4>Localtion :<br><?php echo $row['hotel_Address'];?></h4>
											  			<br>
											  			<h4>State :</h4>
											  			<?php echo "<h3>".$row['hotel_State']."</h3>";?>
											  			
											  			<h4>Vaccination:-</h4> 
											  			<?php /*php head 2*/
											  				if($row['hotel_Vacc'] == 0){
											  					echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: red;">
											  				<h2>Hotel Not Full Vaccination</h2>
											  			</div>';} elseif($row['hotel_Vacc'] == 1){
											  				echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: green;">
											  				<h2>Hotel Full Vaccination</h2>
											  			</div>';
											  			}
											  		?> <!-- end php head 2  -->

											  		</div>
											  		<div class="col-2 bg-danger text-white rounded ">
											  			<h2 style=" text-align: left;">Price :- </h2>
											  			<h2 style=" text-align: left;">RM <?php echo $row['hotel_Price'];?></h2>
											  			<ul style="font-size: 25px; list-style-type: none;">
											  				<li><?php echo $row["Facilities1"]?></li>
											  				<li><?php echo $row["Facilities2"]?></li>
											  				<li><?php echo $row["Facilities3"]?></li>
											  				<li><?php echo $row["Facilities4"]?></li>
											  				<li><?php echo $row["Facilities5"]?></li>
											  			</ul>
											  			<br><br><br><br> <!-- this can be delete if the layout is differnet  -->
											  			<h6 style=" text-align: left;">*Tax included in price </h6>
											  			
											  			<!-- Button here -->
											  			<a href="<?php 
											  				if(!isset($user)){
											  					echo "#";
											  			}else{
											  			echo $row['hotel_button']; 

											  			} ?>" type="button" class="btn btn-primary btn-lg float-right">Check Room Availability </a>
											  			
											  		</div>

											  	</div> 
											  </div> 
											</div>
										<?php }?> <!-- end while php  -->
									<?php }?> <!-- end else php-->

								<?php } elseif (isset($_POST["submit2"])) { ?> <!-- end if if and start elseif -->

									<?php 
										$home_des = $_POST['destination'];
										$GLOBALS['hotelC'] = $home_des;
										$results = searchHotel($conn,$home_des);	
										$resultsCheck = mysqli_num_rows($results);
										
										
										if(!$resultsCheck>0){

											echo '<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca; margin: 250px 250px; "> 
												  <div class="card-body">
												  	<h3 style="text-align: center; font-size: 80px; padding: 50px 0px;">None Hotel Have Been Saerch :(</h3>	
												  
												  </div> 
											</div>';

										}else{
										while($row=mysqli_fetch_assoc($results)){
									?>
										<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca;" > 
											  <div class="card-body mb-1">
											  	
											  	<div class="row">
											  		<div class="col-3" style="background-color: #e0904a; border-radius: 5px;">
											  			<img src="<?php echo $row['hotel_Img']?>" width="320" height="310"  class="pt-3">
											  			
											  		</div>
											  		<div class="col-7 bg-dark text-white">

											  			<h3 class="card-text mt-1"> <?php echo $row['hotel_Name'];?></h3>
											  			<!-- Location Here -->
											  			<h4>Localtion :<br><?php echo $row['hotel_Address'];?></h4>
											  			<br>
											  			<h4>State :</h4>
											  			<?php echo "<h3>".$row['hotel_State']."</h3>";?>
											  			
											  			<h4>Vaccination:-</h4> 
											  			<?php 
											  				if($row['hotel_Vacc'] == 0){
											  					echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: red;">
											  				<h2>Hotel Not Full Vaccination</h2>
											  			</div>';} elseif($row['hotel_Vacc'] == 1){
											  				echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: green;">
											  				<h2>Hotel Full Vaccination</h2>
											  			</div>';
											  			}
											  		?>

											  		</div>
											  		<div class="col-2 bg-danger text-white rounded ">
											  			<h2 style=" text-align: left;">Price :- </h2>
											  			<h2 style=" text-align: left;">RM <?php echo $row['hotel_Price'];?></h2>
											  			<ul style="font-size: 25px; list-style-type: none;">
											  				<li><?php echo $row["Facilities1"]?></li>
											  				<li><?php echo $row["Facilities2"]?></li>
											  				<li><?php echo $row["Facilities3"]?></li>
											  				<li><?php echo $row["Facilities4"]?></li>
											  				<li><?php echo $row["Facilities5"]?></li>
											  			</ul>
											  			<br><br><br><br> <!-- this can be delete if the layout is differnet  -->
											  			<h6 style=" text-align: left;">*Tax included in price </h6>
											  			
											  			<!-- Button here -->
											  			<a href="<?php 
											  				if(!isset($user)){
											  					echo "#";
											  			}else{
											  			echo $row['hotel_button']; 

											  			} ?>" type="button" class="btn btn-primary btn-lg float-right">Check Room Availability </a>
											  			
											  		</div>
											  	</div> 
											  </div> 
											</div>
										<?php }?>
									<?php }?>

								<?php } ?> <!-- End of elseif php -->

							</div> <!-- The end of disseapear column -->


							<!-- Perform any filter function  -->
							<!-- display unvaccinated hotel  -->
						
							<div id="vaccHotel" style="display: none;">
								<?php if (isset($_POST["submit1"])){ ?> <!-- PHP main Head -->
									<?php /*php head 1*/
										$home_des = $_POST['search_des'];
										$results = vaccHotel($conn,$home_des);
										$resultsCheck = mysqli_num_rows($results);
										
										
										
										
										if(!$resultsCheck>0){

											echo '<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca; margin: 250px 250px; "> 
												  <div class="card-body">
												  	<h3 style="text-align: center; font-size: 80px; padding: 50px 0px;">None Hotel Have Been Saerch :(</h3>	
												  
												  </div> 
											</div>';

										}else{

										while($row=mysqli_fetch_assoc($results)){
									?><!-- end php head 1  -->
										<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca;" > 
											  <div class="card-body mb-1">
											  	
											  	<div class="row">
											  		<div class="col-3" style="background-color: #e0904a; border-radius: 5px;">
											  			<img src="<?php echo $row['hotel_Img']?>" width="320" height="310"  class="pt-3">

											  		</div>
											  		<div class="col-7 bg-dark text-white">

											  			<h3 class="card-text mt-1"> <?php echo $row['hotel_Name'];?></h3>
											  			<!-- Location Here -->
											  			<h4>Localtion :<br><?php echo $row['hotel_Address'];?></h4>
											  			<br>
											  			<h4>State :</h4>
											  			<?php echo "<h3>".$row['hotel_State']."</h3>";?>
											  			
											  			<h4>Vaccination:-</h4> 
											  			<?php /*php head 2*/
											  				if($row['hotel_Vacc'] == 0){
											  					echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: red;">
											  				<h2>Hotel Not Full Vaccination</h2>
											  			</div>';} elseif($row['hotel_Vacc'] == 1){
											  				echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: green;">
											  				<h2>Hotel Full Vaccination</h2>
											  			</div>';
											  			}
											  		?> <!-- end php head 2  -->

											  		</div>
											  		<div class="col-2 bg-danger text-white rounded ">
											  			<h2 style=" text-align: left;">Price :- </h2>
											  			<h2 style=" text-align: left;">RM <?php echo $row['hotel_Price'];?></h2>
											  			<ul style="font-size: 25px; list-style-type: none;">
											  				<li><?php echo $row["Facilities1"]?></li>
											  				<li><?php echo $row["Facilities2"]?></li>
											  				<li><?php echo $row["Facilities3"]?></li>
											  				<li><?php echo $row["Facilities4"]?></li>
											  				<li><?php echo $row["Facilities5"]?></li>
											  			</ul>
											  			<br><br><br><br> <!-- this can be delete if the layout is differnet  -->
											  			<h6 style=" text-align: left;">*Tax included in price </h6>
											  			
											  			<!-- Button here -->
											  			<a href="<?php 
											  				if(!isset($user)){
											  					echo "#";
											  			}else{
											  			echo $row['hotel_button']; 

											  			} ?>" type="button" class="btn btn-primary btn-lg float-right">Check Room Availability </a>
											  			
											  		</div>

											  	</div> 
											  </div> 
											</div>
										<?php }?> <!-- end while php  -->
									<?php }?> <!-- end else php-->

								<?php } elseif (isset($_POST["submit2"])) { ?> <!-- end if if and start elseif -->

									<?php 
										$home_des = $_POST['destination'];
										$GLOBALS['hotelC'] = $home_des;
										$results = vaccHotel($conn,$home_des);	
										$resultsCheck = mysqli_num_rows($results);
										
										
										if(!$resultsCheck>0){

											echo '<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca; margin: 250px 250px; "> 
												  <div class="card-body">
												  	<h3 style="text-align: center; font-size: 80px; padding: 50px 0px;">None Hotel Have Been Saerch :(</h3>	
												  
												  </div> 
											</div>';

										}else{
										while($row=mysqli_fetch_assoc($results)){
									?>
										<div class="card mb-4 h-auto pl-1 pr-1" style="border: 5px solid #000000; border-radius: 10px; background-color: #cccaca;" > 
											  <div class="card-body mb-1">
											  	
											  	<div class="row">
											  		<div class="col-3" style="background-color: #e0904a; border-radius: 5px;">
											  			<img src="<?php echo $row['hotel_Img']?>" width="320" height="310"  class="pt-3">
											  			
											  		</div>
											  		<div class="col-7 bg-dark text-white">

											  			<h3 class="card-text mt-1"> <?php echo $row['hotel_Name'];?></h3>
											  			<!-- Location Here -->
											  			<h4>Localtion :<br><?php echo $row['hotel_Address'];?></h4>
											  			<br>
											  			<h4>State :</h4>
											  			<?php echo "<h3>".$row['hotel_State']."</h3>";?>
											  			
											  			<h4>Vaccination:-</h4> 
											  			<?php 
											  				if($row['hotel_Vacc'] == 0){
											  					echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: red;">
											  				<h2>Hotel Not Full Vaccination</h2>
											  			</div>';} elseif($row['hotel_Vacc'] == 1){
											  				echo '<div 
											  				}
											  			style="border: 2px solid #ffffff; border-radius: 10px;margin-right:300px; text-align: center;padding: 30px 0px; background-color: green;">
											  				<h2>Hotel Full Vaccination</h2>
											  			</div>';
											  			}
											  		?>

											  		</div>
											  		<div class="col-2 bg-danger text-white rounded ">
											  			<h2 style=" text-align: left;">Price :- </h2>
											  			<h2 style=" text-align: left;">RM <?php echo $row['hotel_Price'];?></h2>
											  			<ul style="font-size: 25px; list-style-type: none;">
											  				<li><?php echo $row["Facilities1"]?></li>
											  				<li><?php echo $row["Facilities2"]?></li>
											  				<li><?php echo $row["Facilities3"]?></li>
											  				<li><?php echo $row["Facilities4"]?></li>
											  				<li><?php echo $row["Facilities5"]?></li>
											  			</ul>
											  			<br><br><br><br> <!-- this can be delete if the layout is differnet  -->
											  			<h6 style=" text-align: left;">*Tax included in price </h6>
											  			
											  			<!-- Button here -->
											  			<a href="<?php 
											  				if(!isset($user)){
											  					echo "#";
											  			}else{
											  			echo $row['hotel_button']; 

											  			} ?>" type="button" class="btn btn-primary btn-lg float-right">Check Room Availability </a>
											  			
											  		</div>
											  	</div> 
											  </div> 
											</div>
										<?php }?>
									<?php }?>

								<?php } ?> <!-- End of elseif php -->

							</div> <!-- The end of disseapear column -->
							</div>							

						</div>
					</div>
				</div><!-- End of col 9 -->
			</div> <!-- End of row -->
		</div> <!-- End of container -->

		<!-- JavaScript Come save the day -->

		<!-- Footer file here -->
		<?php include "foot.php"?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>