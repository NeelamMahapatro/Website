
<?php
    $userid=$_POST["userid"];
    $delivery_address=$_POST["delivery_address"];
    $restaurantid=$_POST["restaurantid"];
    $foodid_1=$_POST["foodid_1"];
    $quantity_1=$_POST["quantity_1"];
    $foodid_2=$_POST["foodid_2"];
    $quantity_2=$_POST["quantity_2"];
    $foodid_3=$_POST["foodid_3"];
    $quantity_3=$_POST["quantity_3"];
    $foodid_4=$_POST["foodid_4"];
    $quantity_4=$_POST["quantity_4"];
    $order_date=$_POST["order_date"];
    include_once("dbconnect.php");
	$sql="insert into order_new values( '$userid'  , '$delivery_address' , '$restaurantid' , '$foodid_1' , '$quantity_1' , '$foodid_2' , '$foodid_2' , '$foodid_3' , '$foodid_3' , '$foodid_4' , '$foodid_4' , '$order_date')";
	$status=mysqli_query($con,$sql);
	if($status)
                    {
	   echo "YOUR ORDER HAS BEEN PLACED ";
	   header("Location:order_after.php");
                   } 
	 else
   	{
    	  echo "error".mysql_error();
     	}
	mysqli_close($con);

?>
