<?php
	session_start();
	$name=$_POST['name'];
	$password=$_POST['password'];

	$conn=new mysqli("localhost","root","Liza@123","fooderal");
	if($conn->connect_error)
	{
		die("connection error".$conn->connect_error);
	}

	$db=$conn->prepare("select name, password from signup where name=? and password=?");
	$db->bind_param("ss",$name,$password);
	$db->execute();
	$count=0;

	$result=$db->get_result();
	while($row=$result->fetch_array())
	{
	 	$dbname=$row['name'];
		$dbpassword=$row['password'];	
		if($dbname == $name  && $dbpassword ==$password)
		{    
			$count=1;
			break;
		}	
	}
		

	if($count ==0)
	{	$msg = "Invalid LoginId/Password";
     		header("Location:login_home.php?msg=$msg") ;
	}
	else{
		
			$_SESSION['name']=$name;
    		header("Location:after_admin_login.php");
	}
?>