<html>
	<head>
		<title> user registration  </title>	
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
		<?php include_once("topnav.html");?>
		<form action="signup.php" method="post">
		
		<div="main">
		<center>
		<table>
            <caption><strong>SIGN UP</strong></caption>
			<tr>
				<td>NAME::</td>
				<TD><INPUT TYPE="text" name="name" placeholder="enter name here"></td> 
			</tr>
			<tr>
				<td>EMAIL ID::</td>
				<TD><INPUT TYPE="text" name="emailid" placeholder="enter email id "></td> 
			</tr>
			<tr>
				<td>MOBILE NO:: </td>
				<TD><INPUT TYPE="text" name="mobileno" pattern="[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required></td> 
			</tr>
			
			<tr>
				<td>ADDRESS::</td>
				<td>   
				          <textarea name="address"  cols="20"  row="10">
				          </textarea>
				</td>
			</tr>
            <tr>
				<td>ENTER PASSWORD::</td>
				<TD><INPUT TYPE="text" name="password" placeholder="enter password "></td> 
			</tr>
            <tr>
				<td>CONFIRM PASSWORD::</td>
				<TD><INPUT TYPE="text" name="cnf_password" placeholder="confirm your password"></td> 
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
