<?php

/*
in order to log out, the only way to do is to destory our session variable 
because the website check whether have a session before 
*/

/*Everytime we do something insde the session, we must start*/
session_start();

/* Clear the variable inside the session */
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("location:../homepage.php");
exit();
?>