<?php

	// Checek the input if the is submit by the button

	if(isset($_POST["submit"])){

		$login_username = $_POST["login_user_name"];
		$login_pwd = $_POST["login_user_pwd"];

		/*
		Purpose of using require is because
		require function return fatal error if 
		none file exist in folder and only 
		get it once. 
		*/
		require_once"db.country.php";
		require_once"functions.inc.php";

		if(emptyInputLogin($login_username, $login_pwd) !== false){
			header("location: ../login.php?error=emptyinput");
			exit();
		}

		/*Error handeling later*/
		/*The first is the connection of the database , the last 2 is the parameter that need to be check*/
		loginUser($conn,$login_username,$login_pwd);

	} else {
		header("location: ../login.php ");
		exit();
	}

	
?>