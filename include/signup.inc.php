<?php

/*If the submit button is click in the signup form, and the data is included 
there, proceed to page, if not, go back to signup php page*/

if(isset($_POST["submit"])){
	/*code is in here*/
	$signup_name = $_POST['sign_up_name'];
	$signup_username =$_POST['sign_up_username'];
	$signup_email = $_POST['sign_up_email'];
	$signup_pwd = $_POST['sign_up_pwd'];
	$signup_confirm_pwd = $_POST['sign_up_confirm_pwd'];

	/*if file is not found in folder, throw error*/
	
	require_once"db.country.php";
	require_once"functions.inc.php";

	/*error handeling*/
	/*if the input is incorrect or missing*/
	if(emptyInputSignup($signup_name, $signup_email, $signup_username,$signup_pwd, $signup_confirm_pwd) !== false){
		header("location: ../signup.php?error=emptyinput");
		exit();
	}

	if(invalidEmail( $signup_email) !== false){
		header("location: ../signup.php?error=emptyemail");
		exit();
	}

	if(invalidUid($signup_username) !== false){
		header("location: ../signup.php?error=emptyuid");
		exit();
	}

	if(pwdMath($signup_pwd, $signup_confirm_pwd) !== false){
		header("location: ../signup.php?error=passwprdontmatch");
		exit();
	}

	if(uidExists($conn, $signup_username,$signup_email) !== false){
	header("location: ../signup.php?error=usernametaken");
	exit();
	}

	createUser($conn,$signup_name,$signup_email,$signup_username,$signup_pwd);

} /* end of if isset statement*/

else{
	/*
	if no error direct to home page 
	*/
	header("location: ../homepage.php");
}

?>