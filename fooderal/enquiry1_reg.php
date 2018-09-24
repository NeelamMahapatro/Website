
<?php
    $userid=$_POST["userid"];
	$name=$_POST["name"];
	$emailid=$_POST["emailid"];
	$mobileno=$_POST["mobileno"];
	$address=$_POST["address"];
	$enquiry=$_POST["enquiry"];
	include_once("dbconnect.php");
	$sql="insert into enquiry values( '$userid'  , '$name' , '$emailid' , '$mobileno' , '$address' , '$enquiry' )";
	$status=mysqli_query($con,$sql);
	if($status)
                    {
	   echo "Enquiry Table filled";
	   header("Location:enquiry_after.php");
                   } 
	 else
   	{
    	  echo "error".mysql_error();
     	}
	mysqli_close($con);

?>
