<?php
	session_start();
	$name=$_SESSION["name"];
	$prevpass=$_POST["prevpass"];
	$newpass=$_POST["newpass"];
	
	include_once("dbconnect.php");
	$sql="select name,password from signup where name='$name' and password='$prevpass' ";
	$status=mysqli_query($con,$sql);
	
	if(mysqli_num_rows($status)>0)
                    {
	    
	$sql1="update signup set password='$newpass' where name='$name' and password='$prevpass' ";
	$status1=mysqli_query($con,$sql1);
		if($status1)
		{                 
    		       	$msg = "Password changed !!!!!";
			header("location:login_home.php?msg=$msg");
		}
                   } 
	 else
   	{
    		$msg = "Invalid previous Password";
     		header("Location:change_password.php?msg=$msg") ;
     	}
	mysqli_close($con);

?>