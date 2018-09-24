<html>
	<head>
		<title>SHIRAZ RESTAURANT</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav_admin.php");?>
		
		
		<div id="main">
		<center><br/>
		<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="7" width="50%">
		<caption><b><u>FOOD MENU</u></b></caption>
		<tr bgcolor="yellow">
			<th><b><u>FOOD ITEMS</u></b></th>
			<th><b><u>QUANTITY</u></b></th>
			<th><b><u>PRICE</u></b></th>
            <th><b><u>ORDER</u></b></th>
  		</tr>
	<?php
 	include_once("dbconnect.php");
	$sql="select food_items,quantity,price from shiraz_order";
	$result=mysqli_query($con,$sql);
	$rc=mysqli_num_rows($result);
	if($rc>0)
    {
	   $row=mysqli_fetch_array($result);
		while($row)
		{
		?>
		<tr>
			<td><?php echo $row['food_items']?></td>
			<td><?php echo $row['quantity']?></td>
			<td><?php echo $row['price']?></td>
			<td><a href="order_after.php">order</td>
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