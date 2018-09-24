<?php
 	$con=mysqli_connect("localhost","root","Liza@123");
        if(!$con)
          {
            die("not connected");
           }
         $dbstatus=mysqli_select_db($con,"fooderal");
         if(!$dbstatus)
	{
	 die("database not found");
	} 
 
?>
