<?php
	
	/*Throw fatal error if the database is not connect*/
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

		<link rel="stylesheet" type="text/css" href="css/covid_19.css">

	</head>
	<body class="bg-light">
		<!-- Header -->
		<?php include "head.php"?>
		
		<!-- Decoration of the display font -->
		<div class="ds_header">
			<h1>~Restriction and requirement~</h1>
			<br>
			<ul class="deco_icon">
				<li><i class="fas fa-plus-square" style="font-size: 80px; color: red;"></i></li>
				<li><i class="fas fa-plane-departure" style="font-size: 80px; color: grey;"></i></li>
				<li><i class="fas fa-user-nurse" style="font-size: 80px; color: orange;"></i></li>
				<li><i class="fas fa-syringe" style="font-size: 80px; color: lightblue;"></i></li>
			</ul>
			<br>
			<p>Find out if there are any special requirements you need to know about before you travel</p>
		</div>

		<!-- Begining of container -->
		<div class="container mb-4 ">
			<!-- Begining of row for saerch country -->
			<div class="row">
				<div class="col-4 bg-secondary border border-dark">

					<!-- Font Decoration -->
					<div class="row2_deco">
						<h3>Select your trip detail</h3>
					</div>

					<!-- Option Group Here -->
					<div class="row3_deco">
						<!-- Take form and information , resue the webpage -->
						<form method="POST" action="covid_19.php">

							<h3>Travelling From :-</h3>
								<select id="travel_f" name="travel_f">
								    <?php
									  	// Set the query of database
									  	$sql = "SELECT cont_Name FROM covid19_sup;";
									  	// store the result as associative array
									  	$result = mysqli_query($conn,$sql);
									  	
									  	while($row = mysqli_fetch_assoc($result)){
											echo "<option value =".$row['cont_Name'].">".$row['cont_Name']."</option><br>";
										}
							 
									?>
								</select>

							<!-- Spacing  -->
							<br><br>

							<h3>Travelling To 	:-</h3>
								<select id="travel_t" name="travel_t">
								  <?php
									  	// Set the query of database
									  	$sql = "SELECT cont_Name FROM covid19_sup;";
									  	// store the result as associative array
									  	$result = mysqli_query($conn,$sql);
									  	
									  	while($row = mysqli_fetch_assoc($result)){
											echo "<option value =".$row['cont_Name'].">".$row['cont_Name']."</option><br>";
										}
							 
									?>
								</select>

							<!-- Spacing  -->
							<br><br><br>

							<button type="submit" name = "submit" >Check Information Now</button>
						</form>
					</div> <!-- The end of Open Group -->
				</div> <!-- The end of col-4 -->


				<!-- Begining of Card display -->
				<div class="col-8 bg-secondary border border-dark text-center">
					<div class="mt-2">
						<h2 class="ds_header2"> Discover Country Resriction You Travel To</h3>
						<hr style="border: 3px solid #ffffff; border-radius: 5px;">
						
						<!-- Retrieve information from database -->
						<?php
							if($_SERVER['REQUEST_METHOD'] == 'POST'){
								if(isset($_POST['travel_f'])){
									$country = $_POST['travel_f'];
									$depart = $_POST['travel_t'];
							  		$sql = "SELECT * FROM covid19_sup WHERE cont_Name = '$country';";
									$result = mysqli_query($conn,$sql);
									$row = mysqli_fetch_assoc($result);

									// execute the the statment wihtouth repeating the step
									// Travel Restriction 
									function conRestricted($num){
										if(!empty($num)){
											if($num['cont_Restricted'] == 0){
												echo "Entry restricted for international travelers";
											}
											elseif($num['cont_Restricted'] == 1){
												echo "Entery is allow with restrictions";
											}
										}else{
											echo "Database is null";
										}
									}

									//Quarantine Period
									function conQuarantine($num){
										if(!empty($num)){
											if($num['cont_Quarantine'] >= 14){
												echo "14 days ";
											}
											elseif($num['cont_Quarantine'] <= 14){
												echo "Less then 14 days (*Depends on local government policy)";
											}
										}else{
											echo "Database is null";
										}
									}

									//Health Document After Vaccin
									function conHealthDocAV($num){
										if(!empty($num)){
											if($num['cont_HDocumentAV'] == 0){
												echo "Document not require proof negative COVID-19";
											}
											elseif($num['cont_HDocumentAV'] == 1){
												echo "Document require proof negative COVID-19 ";
											}
										}else{
											echo "Database is null";
										}
									}

									//Covid-19 Test
									function conTest($num){
										if(!empty($num)){
											if($num['cont_HTesting'] == 0){
												echo "No require if vaccinated travelres";
											}
											elseif($num['cont_HTesting'] == 1){
												echo "Test on the spot require when arrive  ";
											}
										}else{
											echo "Database is null";
										}
									}

									function conMask($num){
										if(!empty($num)){
											if($num['cont_Mask'] == 0){
												echo "Mask not require during travel ";
											}
											elseif($num['cont_Mask'] == 1){
												echo "Mask is require during travel ";
											}
										}else{
											echo "Database is null";
										}
									}
								}/*Implement else here if all is null*/

							}

							if($_SERVER['REQUEST_METHOD'] == 'POST'){
								/*Header of Information travels*/
							  	echo "<div style='margin-bottom: 30px;'>";
								echo"<h3 class='ds_header2'>Travel Information From <strong><span style='color:#00B1D2FF'>".$country."</span></strong> To <strong><span style='color:#FFE77AFF'>".$depart."</span></strong></h3>";
								echo"</div>";

							  	/*Travel Restriction */
								echo "<div class ='card'>";
								echo "	<div class='card-header'>";
								echo "		<h4> Travel Retriction </h4>";
								echo "	</div>";
								echo "	<div class='card-body'>";
								echo "		<p class='card-text'>".conRestricted($row)."</p>";
								echo "	</div>";
								echo "</div>";

								/*Quarantine Period */
								echo "<div class ='card'>";
								echo "	<div class='card-header'>";
								echo "		<h4> Quarantine Period</h4>";
								echo "	</div>";
								echo "	<div class='card-body'>";
								echo "		<p class='card-text'>".conQuarantine($row)."</p>";
								echo "	</div>";
								echo "</div>";

								/*Health Documentation*/
								echo "<div class ='card'>";
								echo "	<div class='card-header'>";
								echo "		<h4> Health Documentation</h4>";
								echo "	</div>";
								echo "	<div class='card-body'>";
								echo "		<p class='card-text'>".$row['cont_HDocument']."</p>";
								echo "	</div>";
								echo "</div>";

								/*Health Documentation After Vaccin*/
								/*Because the document doesn't require any */
								echo "<div class ='card'>";
								echo "	<div class='card-header'>";
								echo "		<h4> Vaccin Status Documentation</h4>";
								echo "	</div>";
								echo "	<div class='card-body'>";
								echo "		<p class='card-text'>".conHealthDocAV($row)."</p>";
								echo "	</div>";
								echo "</div>";

								/*Test Requirement on Spot*/
								echo "<div class ='card'>";
								echo "	<div class='card-header'>";
								echo "		<h4> Covid-19 Test </h4>";
								echo "	</div>";
								echo "	<div class='card-body'>";
								echo "		<p class='card-text'>".conTest($row)."</p>";
								echo "	</div>";
								echo "</div>";

								/*Mask requirement */
								echo "<div class ='card'>";
								echo "	<div class='card-header'>";
								echo "		<h4> Mask Requirement </h4>";
								echo "	</div>";
								echo "	<div class='card-body'>";
								echo "		<p class='card-text'>".conMask($row)."</p>";
								echo "	</div>";
								echo "</div>";
						}else{
								/*Default Status if non data is enter*/
								echo "<br><br><br><br>";
								echo '<div style="text-align: left; width: 65%; margin-left: 100px;">';
								echo '<h2 style="color: #ADEFD1FF;">Find out what you need to know for your trip</h2>';
								echo "</div>";
								echo "<div class ='card'>";
								echo "	<div class='card-body'>";
									echo '<div class="container">';
									echo '<div class="row">';
										echo '<div class="col-2">';
											echo "<br><i class='fas fa-passport' style='font-size: 80px'></i>";
										echo "</div>";
										echo '<div class="col-10">';
										echo '<p style="font-size: 30px; font-weight: bold; text-align: left ">Select your details top view travel requirement for your trip.</p>';
									echo "	</div>";
								echo "	</div>";
								echo "</div>";
								echo "</div>";
								echo "</div>";

							}/*End of if else card display*/
						?>
						
					</div>
				</div> <!-- The End of Card Display -->

			</div> <!-- End of row for saerch country-->
		</div> <!-- End of container -->
		

		<!-- Footer -->
		<?php include "foot.php"?>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>
</html>