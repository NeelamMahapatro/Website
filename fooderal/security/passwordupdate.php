<?php

	include_once("config/db.php");

	$currentpassword=$_POST['currentpassword'];
	$currentpassword=htmlspecialchars($currentpassword);
	$currentpassword=base64_decode($currentpassword);

	$newpassword=$_POST['newpassword'];
	$newpassword=htmlspecialchars($newpassword);

	

	$confirmpassword=$_POST['confirmpassword'];
	$confirmpassword=htmlspecialchars($confirmpassword);


	 $sql = "select * from admin_login where password='$currentpassword' and username='789'";
	 $query=mysqli_query($con,$sql);
	 $count=mysqli_num_rows($query);
	 if($count)
	 {
	 	if($newpassword==$confirmpassword)
	 	{
	 		$newpassword=md5($newpassword);
	 		$sqlupdate="update admin_login set  password='$newpassword' where username='789'";
	 		$queryUpdate=mysqli_query($con,$sqlupdate);
	 		if($queryUpdate)
	 		{
	 			$_SESSION['msg']="Password Updated Successfully";
	 			header("Location:index.php");
	 		}
	 		else
	 		{
	 			$_SESSION['msg']="Error Password not Updated";
	 			header("Location:index.php");
	 		}


	 	}
	 	else
	 	{
	 		$_SESSION['msg']="New Password and Confirm Password do not match ";
	 		header("Location:index.php");
	 	}
	 }
	 else
	 {
	 	$_SESSION['msg']="Current Password do not match";
	 	header("Location:index.php");
	 }

?>