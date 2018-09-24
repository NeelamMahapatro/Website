<html>
	<head>
		<title>DELIVERY REPORT</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav_admin.php");?>
		
		
		<div id="main">
		<center><br/>
		<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="7" width="50%">
		<caption><b><u>DELIVERY REPORT</u></b></caption>
		<tr bgcolor="yellow">
            <th><b><u>DELIVERY ID</u></b></th>
			<th><b><u>USER ID</u></b></th>
			<th><b><u>DELIVERY ADDRESS</u></b></th>
			<th><b><u>DELIVERY TIME</u></b></th>
        </tr>
	<?php
 	include_once("dbconnect.php");
	$sql="select * from delivery_display";
	$result=mysqli_query($con,$sql);
	$rc=mysqli_num_rows($result);
	if($rc>0)
          {
	   $row=mysqli_fetch_array($result);
		while($row)
		{
		?>
		<tr>
            <td><?php echo $row['deliveryid']?></td>
			<td><?php echo $row['userid']?></td>
			<td><?php echo $row['delivery_address']?></td>
			<td><?php echo $row['delivery_time']?></td>
		</tr>
		<?php
			$row=mysqli_fetch_array($result);
		
		}
	}
      else
	{?>
	 <tr>
	   <td colspan="3">NO RECORD FOUND</td>
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