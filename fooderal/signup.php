<?php
   	$name=$_POST["name"];
	$emailid=$_POST["emailid"];
	$mobileno=$_POST["mobileno"];
	$address=$_POST["address"];
    $password=$_POST["password"];
    $cnf_password=$_POST["cnf_password"];
	include_once("dbconnect.php");
	$sql="insert into signup (name , emailid , mobileno , address , password , cnf_password ) values( '$name'  , '$emailid' , '$mobileno' , '$address' , '$password' , '$cnf_password' )";
	$status=mysqli_query($con,$sql);
	if($status)
                    {
	   echo "registraton done";
	    header("Location:signup_after.php");
                   } 
	 else
   	{
    	  echo "error".mysql_error();
     	}
	mysqli_close($con);

?>