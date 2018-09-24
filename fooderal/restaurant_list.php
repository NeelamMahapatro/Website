<html>
	<head>
		<title>RESTAURANT LIST</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
    <style>
        body
			{
			 background-image: url("http://localhost:1234/fooderal/image_enquiry.jpg");
			 background-position: center;
  	 	 	background-repeat: no-repeat;
    			background-size: cover;
			 height: 100%;
			} 
	</style>
    <body>
		<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav.html");?>
		
		
		<div id="main">
		<center><br/>
		<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="7" width="50%">
		<caption><b><u>RESTAURANT LIST</u></b></caption>
		<tr bgcolor="yellow">
			<th><b><u>RESTAURANT ID</u></b></th>
			<th><b><u>RETAURANT NAME</u></b></th>
			<th><b><u>ADDRESS</u></b></th>
            <th><b><u>CONTACT NO</u></b></th>
        </tr>
	<?php
 	include_once("dbconnect.php");
	$sql="select * from restaurant_list";
	$result=mysqli_query($con,$sql);
	$rc=mysqli_num_rows($result);
	if($rc>0)
          {
	   $row=mysqli_fetch_array($result);
		while($row)
		{
		?>
		<tr>
			<td><?php echo $row['restaurantid']?></td>
			<td><?php echo $row['restaurant_name']?></td>
			<td><?php echo $row['address']?></td>
            <td><?php echo $row['contactno']?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($result);
		
		}
	}
      else
	{?>
	 <tr>
	   <td colspan="4">NO RECORD FOUND</td>
	</tr>
       <?php
        }
          mysqli_close($con);
        ?>
	</table>

		</div>
		
            <?php include_once("footer.html");?>
		</div>
</body>
</html> 