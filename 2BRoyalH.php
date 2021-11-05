<?php 
	// Retrive date in 
	//$date_In = $_SESSION['date_In'];
	//$date_Out = $_SESSION['date_Out'];

	include "include/functions.inc.php";
	include "include/db.country.php";

	$date_In = "2021-04-08";
	$date_Out = "2021-04-09";
	$numAdult = "2";
	$numChild = "2";
	$over     = "1";
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

		<link rel="stylesheet" type="text/css" href="css/css_hotel_room.css">
	</head>
	<body>
	<?php include "head.php"?>
		<!-- Whole Container contain  -->
		<div class="container-fluid" style="background-color: #f0f0f0;">

			<div class="row bg-dark border-top" >
				<div class="col-12 ">
					<h3 class="m-3 text-white"> Progress of Booking Hotel :</h3>
					<!-- Boot Strap Pgoress Bar -->
					<!-- Outer container of progress bar -->
					<div class="progress mb-3" style="height:40px">

						 <!-- Inner container of progress bar -->
	   					 <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="0"
  							aria-valuemin="0" aria-valuemax="100" style="width:70%;height:40px; font-size:25px;">
  							70% Until Booking Completion
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
							  <input type="date" class="form-control" name="date-in">
							</div>
							<div class="mb-3">
							  <label for="exampleFormControlTextarea1" class="form-label">Date-Out</label>
							  <input type="date" class="form-control" name="date-out">
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

				</div><!-- End of col 3-->
				<!-- End of Side Bar Filter function -->

				






				<!-- Main Container Content -->
				<!-- Wabpage Main Contain here -->
				<!-- if inner search again, then go blank -->
				<div class="col-9" style="background-color: #f0f0f0" >
					<div class="row mt-3">
						<div style="padding-left: 10px; margin-bottom: 10px;">
							<p class="ds_h"> Royal London Hotel By Saba  </p>
						</div>
						<div class="col-12" > <!-- This is the main column, don't touch this -->

							<div class="container-fluid mb-3" style="height: auto; border: 5px solid #000000; border-radius: 10px;">
							  <div class="mySlides">
							    <div class="numbertext">1 / 6</div>
							    <img src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album1.png" style="width:70%; height: 60%;">
							  </div>

							  <div class="mySlides">
							    <div class="numbertext">2 / 6</div>
							    <img src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album2.png" style="width:70%; height: 60%;">
							  </div>

							  <div class="mySlides">
							    <div class="numbertext">3 / 6</div>
							    <img src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album3.png" style="width:70%; height: 50%;">
							  </div>
							    
							  <div class="mySlides">
							    <div class="numbertext">4 / 6</div>
							    <img src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album_Single1.png" style="width:70%; height: 60%;">
							  </div>

							  <div class="mySlides">
							    <div class="numbertext">5 / 6</div>
							    <img src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album_Twin1.png" style="width:70%; height: 800px;">
							  </div>

							  <div class="mySlides">
							    <div class="numbertext">6 / 6</div>
							    <img src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album_Twin3.png" style="width:70%; height: 50%;">
							  </div>

							   
							  <!--Cick Button   -->
							  <a class="prev" onclick="plusSlides(-1)">❮</a>
							  <a class="next" onclick="plusSlides(1)">❯</a>	


							  <!-- Cpation fo the Photo -->
							  <div class="caption-container">
							    <h1 id="caption"></h1>
							  </div>

							  <!-- Display the image button -->
							  <div class="row" style="margin:0px 1px 0px 1px; ">
							    <div class="column">
							      <img class="demo cursor" src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album1.png" style="width:100%" onclick="currentSlide(1)" alt="Main Hall">
							    </div>
							    <div class="column">
							      <img class="demo cursor" src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album2.png" style="width:100%" onclick="currentSlide(2)" alt="Outdoor Accessor">
							    </div>
							    <div class="column">
							      <img class="demo cursor" src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album3.png" style="width:100%" onclick="currentSlide(3)" alt="Gym Room">
							    </div>
							    <div class="column">
							      <img class="demo cursor" src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album_Single1.png" style="width:100%" onclick="currentSlide(4)" alt="Double Delux">
							    </div>
							    <div class="column">
							      <img class="demo cursor" src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album_Twin1.png" style="width:100%; height: 150px" onclick="currentSlide(5)" alt="Hotel Pool">
							    </div> 
							    <br>
							    <div class="column">
							      <img class="demo cursor" src="img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album_Twin3.png" style="width:100%" onclick="currentSlide(6)" alt="Room Toilet">
							    </div> 

							  </div><!-- End of image buttoin -->
							</div> <!-- End of image container  -->
						</div><!-- End of column 12 -->

						<!-- Display Vaccination Alert -->
						<div class="container-fluid">
							<div class="row bg-danger" style="padding: 20px 0px; margin:0px 0px 20px 0px; border: 5px solid #000000; border-radius: 10px;">
								<div class="col-3">
									<i class="fas fa-heart-broken" style="font-size: 80px; float: right; color: white;"></i>
								</div>

								<div class="col-9">
									<h3 class="text-white"><span style="font-size: 40px; color: #ffd2a6 ;">WARNING:</span> Health &#38; Safety Measure <span style="font-size: 40px;  color: #ffd2a6 ;">NOT APPLY</span></h3>

									<p class="text-white">This property haven't apply health and hygiene measures to ensure your safety </p>
								</div>
								
							</div>
						</div> <!-- End of vaccination alert container -->


						<!-- Display Hotel Facilities -->
						<div class="container-fluid mb-3">
							<div class="row" style="padding:20px; border:5px solid #000000; margin: 0px; border-radius: 10px; background-color: #d1d1d1;">
								<div class="col-12">
									<h3>Hotel Facilities Include:-</h3>
									<i class="fas fa-wifi" style="margin-right: 20px; color: green;"> Available WI-FI</i> 
									<i class="fas fa-coffee" style="margin-right: 20px; color: black;"> Available BreakFast</i>
									<i class="fas fa-dumbbell" style="margin-right: 20px; color: grey;"> Gym Room</i>	
									<i class="fas fa-cocktail" style="margin-right: 20px; color: purple;"> Night Bar</i>
									<i class="fas fa-swimmer" style="margin-right: 20px; color: blue;"> Indoor Pool</i>
									<i class="fas fa-umbrella-beach" style="margin-right: 20px; color: brown;">Outdoor Beach</i>
									
								</div>
							</div>
						</div> <!-- End of Hotel Facitlities container  -->


						<!-- Display Customer Set Time -->
						<div class="container-fluid mb-3">
							<div style="border: 5px solid #000000; padding: 20px; background-color: #d1d1d1; border-radius: 10px;">
								<h3>Checking Information:-</h3>
								<table width="80%" style="text-align:center;">
									<tr>
										<td><h3>Check-In </h3></td>
										<td><h3>Check-Out</h3></td>
										<td><h3>Adult No.</h3></td>
										<td><h3>Child No.</h3></td>
										<td><h3>Overnight</h3></td>
									</tr>

									<tr>
										<td><?php echo $date_In  ;?></td>
										<td><?php echo $date_Out ;?></td>
										<td><?php echo $numAdult ;?></td>
										<td><?php echo $numChild ;?></td>
										<td><?php echo $over     ;?></td>
									</tr>

								</table>
							</div>
						</div>

						<!-- This will become a form of submission of hotel -->

						<div class="container-fluid mb-3">
							<h1>Hotel Room Description:-</h1>
							<table class="hotelRT">
								<!-- Table Header  -->
								<tr class="hotelRT2">
									<td>ROOM TYPE</td>
									<td>ROOM PEOPLE</td>
									<td>ROOM PRICE</td>
									<td>ROOM DESCRIPTION</td>	
								</tr>

								<!-- Loop the hotel information from database -->
								<?php 

									$sql = "SELECT * FROM hotel_room_list WHERE roomName = 'RoyalH' ;";
									$hotel = mysqli_query($conn, $sql);
									$hotelCheck = mysqli_num_rows($hotel);

									if(!$hotelCheck>0){
										echo "No data";
									}else{
										while($row = mysqli_fetch_assoc($hotel)) {
								?>
								<tr class="hotelRT3">
									<!-- display hotel item -->
									<td style="padding: 10px 0px;">
									<img src="<?php echo $row["roomImg"]; ?>" class="img_style";>
									<h4><?php echo $row["roomType"]; ?></h4>
									</td>
									<!-- Detail Information -->
									<td><?php echo $row["roomPeople"]; ?></td>
									<td><?php echo $row["roomPrice"]; ?></td>
									<td style="font-size: 20px;">

									<?php 
										$str = $row["roomDesc"];
										$array1= explode(" ",$str);
										$array2= count(explode(" ",$str));

										for($x=0;$x<$array2;$x++){
											echo "<ul style='list-style-type: none; text-align:left; padding-left:30px'>";
										    echo "<li>".$array1[$x]."</li>";
										    echo "</ul>";
										}

									?>		

								</tr>
							
							<?php } ?>
						<?php } ?>

							</table>
						</div> <!--  end of container -->

						
							<div class="container-fluid mb-1">
								<h1>Hotel Selection:-</h1>
								<!-- later need to check something before submit the form -->

								<form method="POST" action="payment.php">
									<table class="hotelRT" width="100%">
										<!-- Table Header  -->
										<tr class="hotelRT2">
											<td>ROOM Name</td>
											<td>ROOM Amount</td>
										</tr>
										<tr>
											<td style="padding: 15px">TWIN SINGLE ROOM</td>
											<td style="padding: 15px">
												<select name="royalTwin">
												  <option disabled selected>00</option>
												  <option value="1">01</option>
												  <option value="2">02</option>
												  <option value="3">03</option>
												  <option value="4">04</option>
												  <option value="5">05</option>
												  <option value="6">06</option>
												  <option value="7">07</option>
												</select>
											</td>
										</tr>

									</table>
								
								<br>
								<button type="submit" name="submit" class="hotelPayment"> Proceed Payment</button>
								
								</form>
							</div>
						

					</div>
				</div>


		<script>
		var slideIndex = 1;
		/*First Executeion*/
		showSlides(slideIndex);

		/*Function to select the arrow*/
		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		/*Function to select specific diagram*/
		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  var captionText = document.getElementById("caption");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " active";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}
		</script>	

	<?php include "foot.php"?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>