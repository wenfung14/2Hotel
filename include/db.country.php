<?php

/*Connection Database from phpadmine*/

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "2hotel";

/*Build Connection */
$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);


/*Check Database Connection*/
/*Kill databsae connection if database unable to connect and throw error message*/
if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
}

/*use to testing the connetion of webpage*/
//echo "Successfullt Connect";


?>