<html>
	<head>
		<title>change password</title>	
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<style>
			table{
			border:5px solid black;  
			background-color:#66ff99;
			width:400;
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
		<form action="admin_password.php" method="post">
		
		<div="main">
		<center><br/>
		<font color="red">
		<?php
			if(isset($_GET['msg']))
			{
				$msg = $_GET['msg'];
				echo $msg;
			}
		?>
		</font>
		<table >
			<caption><marquee direction="right" scrollamount="3" onmouseover="this.stop()" onmouseout="this.start()" behavior="alternate">CHANGE PASSWORD</marquee></caption>
			<tr>
				<td>PREV PASSWORD:</td>
				<TD><INPUT TYPE="password" name="prevpass" class="textfield"  autocomplete="off" ></td> 
			</tr>
			<tr>
				<td>NEW PASSWORD: </td>
				<TD><INPUT TYPE="password" name="newpass" class="textfield"  autocomplete="off"></td> 
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SUBMIT">
				
				<input type="reset" value="RESET"></td>
			</tr>
	 	
		</table>
		</center>
		</div>
		<?php include_once("footer.html");?>
	</div>
	</body>

</html>
