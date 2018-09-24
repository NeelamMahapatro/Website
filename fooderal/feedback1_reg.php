
<?php
    $userid=$_POST["userid"];
	$name=$_POST["name"];
	$feedback=$_POST["feedback"];
	include_once("dbconnect.php");
	$sql="insert into feedback values( '$userid'  , '$name' , '$feedback' )";
	$status=mysqli_query($con,$sql);
	if($status)
                    {
	   echo "FEEDBACK GIVEN";
	   header("Location:feedback_after.php");
                   } 
	 else
   	{
    	  echo "error".mysql_error();
     	}
	mysqli_close($con);

?>
