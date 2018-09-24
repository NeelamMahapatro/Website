<?php 

	session_start();
	$host="localhost";
	$user="root";
	$pass="";
	$db="phpsecurity";

	$con=mysqli_connect($host,$user,$pass);
	if(!$con)
	{
		echo "Not connected to server";
	}

	mysqli_select_db($con,$db);


?>