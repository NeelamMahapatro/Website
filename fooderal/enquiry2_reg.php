
<?php
    $userid=$_POST["userid"];
	$name=$_POST["name"];
	$enquiry=$_POST["enquiry"];
	include_once("dbconnect.php");
	$sql="insert into enquiry1 values( '$userid'  , '$name' , '$enquiry' )";
	$status=mysqli_query($con,$sql);
	if($status)
                    {
	   echo "enuiry form filled";
	   header("Location:enquiry2_after.php");
                   } 
	 else
   	{
    	  echo "error".mysql_error();
     	}
	mysqli_close($con);

?>
