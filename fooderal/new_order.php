<html>
	<head>
		<title>NEW ORDER </title>	
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<style>
			table{
			border:5px solid black;  
			background-color:#66ff99;
			width:600;
			height:400;
			}
			td{
			     text-align:center; 
			}
			
		</style>
	</head>
	
	<body  >
		<div id="container">
		
		<?php include_once("header.html");?>
		<?php include_once("topnav_admin.php");?>
		<form action="restaurant_order.php" method="post">
		
		<div="main">
		<center>
		<table>
            <caption><strong>ENTER YOUR LOCATION</strong></caption>
            <tr>
				<td>LOCATION::</td>
				<td><select name="college">
                    <option><a href="bhubaneswar_restaurant.php">Bhubaneswar</a></option>
                    <option><a href="brahmapur_restaurant.php">Brahmapur</a></option>
                    <option><a href="cuttack_restaurant.php">Cuttack</a></option>
                    <option><a href="rourkela_restaurant.php">Rourkela</a></option>
                </td>
                </td>
            </tr>
            <tr>
				<td></td>
				<td><input type="submit" value="SUBMIT">
				
				<input type="reset" value="RESET"></td>
			</tr>
		
		</table>
		</center>
		</div>
		</br>
		<?php include_once("footer.html");?>
	</div>
	</body>

</html>
