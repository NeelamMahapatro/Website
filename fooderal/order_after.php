<html>
	<head>
		<title>ORDER SUCCESSFULLY</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav_admin.php");?>
		
		
		<div id="main">
		<center><br/><br/><br/>
		<h1>THE ITEM HAS BEEN ADDED TO YOUR ORDER LIST</h1>
		</center>
		</div>
            <table>
            <tr>
				<td></td>
                <td><a href ="order_after_display.php"><input type="submit" value="CONFIRM"></a>
				
                    <a href="restaurant_order.php"><input type="reset" value="CANCEL"></a></td>
			</tr>
            </table>

		<?php include_once("footer.html");?>
		</div>
	</body>
</html> 