
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Page Title</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/css_homepage.css">

	</head>
	<body>
		<!-- Implement header  -->
		<?php include 'head.php'?>
		

		<!-- Body Content -->
		<div class="serach_cont">

			<!-- Background Image  -->
			<img src="img/homepage_bg.png" alt="Homepage Image" width="100%" height="850px">

				<!-- Display Word decoration -->
				<p class ="dis_home">Pick Your Holiday With Us Today! </p>		

			<!-- Search Bar  -->
			<div class="search_bar">
				<!-- Form will send requesst to hotel list page  -->
				<form method="POST" action="hotel_list.php">
					<ul class="saerch_bar_cust">
						<!-- Destination -->
						<li>
							<label for="search_des"><strong>Destination:</strong></label><br>
							<input type="text" name="search_des" id="search_des" placeholder="Malaysia, Singpore, etc">
						</li>

						<!-- Date In -->
						<li>
							<label for="search_date_I"><strong>Date-In:</strong></label><br>
							<input type="date" name="search_date_I" id="search_date_I" >
						</li>

						<!-- Date Out -->
						<li>
							<label for="search_date_O"><strong>Date-Out:</strong></label><br>
							<input type="date" name="search_date_O" id="search_date_O">
						</li>

						<!-- Adult Amount  -->
						<li>
							<label for="saerch_adult"><strong>Adult Amount:</strong></label><br>
							<input type="number" name="search_adult" id="search_adult" min="0" size="4">
						</li>

						<!-- Child Amount  -->
						<li>
							<label for="saerch_child"><strong>Child Amount:</strong></label><br>
							<input type="number" name="search_child" id="search_child" min="0" size="4">
						</li>

						<!-- Submit Button  -->
						<li>
							<a href="<?php echo"hotel_list.php"?>"><button type="submit" name="submit1"> Let' Travel</button></a>
						</li>
					</ul>
				</form>
			</div>
		</div> <!-- The end of search Container  -->

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
		
		<!-- Implement footer -->
		<?php include 'foot.php'?>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script></body>

</html>