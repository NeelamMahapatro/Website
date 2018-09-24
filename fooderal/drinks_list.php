<html>
	<head>
		<title>DRINKS LIST</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav.html");?>
		
		
		<div id="main">
		<center><br/>
		<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="7" width="50%">
		<caption><b><u>SOUP MENU</u></b></caption>
		<tr bgcolor="yellow">
			<th><b><u>FOOD ID</u></b></th>
			<th><b><u>DRINKS</u></b></th>
			<th><b><u>QUANTITY</u></b></th>
			<th><b><u>PRICE</u></b></th>
  		</tr>
	<?php
 	include_once("dbconnect.php");
	$sql="select * from drinks_list";
	$result=mysqli_query($con,$sql);
	$rc=mysqli_num_rows($result);
	if($rc>0)
          {
	   $row=mysqli_fetch_array($result);
		while($row)
		{
		?>
		<tr>
			<td><?php echo $row['foodid']?></td>
			<td><?php echo $row['drinks_items']?></td>
			<td><?php echo $row['quantity']?></td>
			<td><?php echo $row['price']?></td>
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