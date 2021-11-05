<?php
/*All Function is in here*/

/*Sign Up Section*/
/*check if the user have enter the credential correctly */
function emptyInputSignup ($signup_name, $signup_email, $signup_username, $signup_pwd, $signup_confirm_pwd){
	$result;
	if (empty($signup_name) || empty($signup_email) || empty($signup_username) || empty($signup_pwd) || empty($signup_confirm_pwd)){
		$result = true;

	}else{
		$result = false;
	}

	return $result;
}

/*Invalud user name*/
function invalidUid($signup_username){
	$result;
	/*preg_match library is help check the string is same before save in database*/
	/*if there is an username same as the string set by user from database, error to true*/
	if (!preg_match("/^[a-zA-Z0-9]*$/",$signup_username)){
		$result = true;

	}else{
		$result = false;
	}

	return $result;
}

/*Invalid Email*/
function invalidEmail($signup_email){
	$result;
	/*Check the e-mail is validate first, then check whether have the same data inside the database*/
	if (!filter_var($signup_email, FILTER_VALIDATE_EMAIL)){
		$result = true;

	}else{
		$result = false;
	}

	return $result;
}

/*Invalid password does not math with confirm password */
function pwdMath($signup_pwd, $signup_confirm_pwd){
	$result;
	/*Check the e-mail is validate first, then check whether have the same data inside the database*/
	if ($signup_pwd !== $signup_confirm_pwd){
		$result = true;

	}else{
		$result = false;
	}

	return $result;
}

/* Check e-mail and user name is exists in the database*/
function uidExists($conn,$signup_username,$signup_email){
	/*Important
	-create basic sql statement
	-the question mark is a placeholder, in easy term, fill in the blank later
	-first semi colomn is close the SQL statment, another is close the php statement

	-Note:-
	The reason behind is, user could write "code" inside the form instead of name, password 
	as it could alter , destory our database. To prevent that, we create a "prepare statement" and sort 
	it out the user input without any code input before we enter it into our database statement 
	*/
	/*prepare blank sql statement */
	/*In here we ask either userUid or user email*/
	/*Bug, userUid return false, but why */
	$sql = "SELECT * FROM user WHERE userUid = ? OR userEmail = ?;";

	/*prepare statement*/
	$stmt = mysqli_stmt_init($conn);



	/*always write false statement first, then true statement */
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}


	/*bind them together */
	/*where is my prepare statement to submit, 
	next will be what are the type of data you submit "s define string, if have 2 parameter add another type infron of the first parameter type. Before ->"s"   After->"ss"
	After initialize the type, initialize the parameter that going to bind
	*/
	mysqli_stmt_bind_param($stmt,"ss", $signup_username, $signup_email);
	/*execute the statement */
	/*what doing here is grabbing the data from database refering to the username and email*/
	mysqli_stmt_execute($stmt);

	$resultData = mysqli_stmt_get_result($stmt);


	/*check if the data is associate with the database*/
	if($row = mysqli_fetch_assoc($resultData)){

		/*return data from the database if this user exist inside the database*/
		return $row;

	}else{

		$result = false;
		return $result;
	}


	mysqli_stmt_close($stmt);
}


function createUser($conn, $signup_name, $signup_email, $signup_username, $signup_pwd){

	/*create a template for insert new data inside*/

	$sql = "INSERT INTO user (userName, userEmail, userUid, userPwd ) VALUE (?, ?, ?, ?);";

	/*prepare statement*/
	/*initialize the statement */
	$stmt = mysqli_stmt_init($conn);



	/*always write false statement first, then true statement */
	/* check if is fail for both parameter, straight go to signup page*/
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}

	/*hashing password*/
	/*using the library of the default algorithim password from the library */
	$hashedPwd = password_hash($signup_pwd, PASSWORD_DEFAULT);




	/*bind them together */
	/*where is my prepare statement to submit, 
	next will be what are the type of data you submit "s define string, if have 2 parameter add another type infron of the first parameter type. Before ->"s"   After->"ss"
	After initialize the type, initialize the parameter that going to bind
	*/
	mysqli_stmt_bind_param($stmt, "ssss",$signup_name,$signup_email,$signup_username, $hashedPwd);
	/*execute the statement */
	/*what doing here is grabbing the data from database refering to the username and email*/
	mysqli_stmt_execute($stmt);

	mysqli_stmt_close($stmt);

	header("location: ../signup.php?error=none");
	exit();
}




/*Login In section */
function emptyInputLogin($login_username,$login_pwd){
	$result;
	if (empty($login_username) || empty($login_pwd)){
		$result = true;

	}else{
		$result = false;
	}

	return $result;
}


function loginUser($conn,$login_username,$login_pwd){

		/* 
		In sign up uidExixts, we have mention that we 
		will take either username or email from the database 
		which means we can enter both username or email and it return true
		*/
		$uidExists = uidExists($conn,$signup_username,$login_username);

		/*True if the id is same in database, return false*/
		if($uidExists === false){

			header("location: ../login.php?error=wronglogin");
			exit();
		}

		/*
		In here we use associate arrray  as we fetch the data in array  
		means we can use the title of the column as the key instead of index. Since we grab the database title "userPwd" column, we 
		already get the whole database column in "userPwd" 
		*/
		$pwdHashed = $uidExists["userPwd"];

		$checkPwd = password_verify($login_pwd,$pwdHashed);

		if($checkPwd == false){
			header("location: ../login.php?error=wrongPassword");
			exit();	

		}
		elseif($checkPwd == true){

			/*
			section is a global varable , as long as the window is open
			the data won't run away
			*/
			session_start();
			/*create a session variable array */
			$_SESSION["userid"] = $uidExists["userId"];  /*associated array with database userId*/

			$_SESSION["useruid"] = $uidExists["userUid"]; /*associated array with database userUid*/
			
			header("location: ../homepage.php"); /*go to the front page , but later will change */
			exit();
		}
	}

	function emptyInputHome ($home_des, $home_dI, $home_dO, $home_aN, $home_cN){

		$result;
		if (empty($home_cN) || empty($home_dI) || empty($home_dO) || empty($home_aN) || empty($home_cN)){
			$result = true;

		}else{
			$result = false;
	}

	return $result;
	}

	function searchHotel($conn, $home_des){
		//sql query
		$sql = "SELECT * FROM hotel_list WHERE hotel_Country=?;";

		//prepare statment 
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt,$sql)){
			echo "Build Prepare fail";
		}else{
			mysqli_stmt_bind_param($stmt,"s",$home_des);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			return $result;
		}


	}


	function vaccHotel($conn,$des){
		//sql query
		$sql = "SELECT * FROM hotel_list WHERE hotel_Vacc=? AND hotel_Country=? ;";

		//prepare statment 
		$stmt = mysqli_stmt_init($conn);
		$data = 1;
		$loc = $des;

		if(!mysqli_stmt_prepare($stmt,$sql)){
			echo "Build Prepare fail";
		}else{
			mysqli_stmt_bind_param($stmt,"is",$data,$loc);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			return $result;
		}


	}

	function findDay($date1, $date2){

		$result= abs(strtotime($date1) - strtotime($date2));

		// phrase into unix time stamp
		// divide the time to smaller and smaller
		// first year, hour, minute ,second
		
		$yearsDiff = floor($result/(365*24*60*60));

		$monthDiff = floor(($result-$yearsDiff * 365*24*60*60)/(30*24*60*60));

		$daysDiff = floor(($result - $yearsDiff * 365*24*60*60 - $monthDiff*30*24*60*60)/(24*60*60));
		
		return $daysDiff;
	}
	

	




?>



