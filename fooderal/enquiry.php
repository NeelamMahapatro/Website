<html>
	<head>
		<title> enquiry </title>	
		<link href="css/style.css" type="text/css" rel="stylesheet">
		<style>
			table{
			border:5px solid black;  
			background-color:#66ff90;
			width:600;
			height:400;
			}
			td{
			     text-align:center; 
			}
			.inputfield
			{
			height:30px;
			width:200px;
			}
			body
			{
			 background-image: url("http://localhost:1234/fooderal/image_enquiry.jpg");
			 background-position: center;
  	 	 	background-repeat: no-repeat;
    			background-size: cover;
			 height: 100%;
			} 
		 
		</style>
	</head>
	
	<body  >
		<div id="container">
		
		<?php include_once("header.html");?>
		<?php include_once("topnav.html");?>
		<form action="enquiry1_reg.php" method="post">
		
		<div="main">
		<center>
		<table >
			<caption>ENQUIRY FORM</caption>
            <tr>
				<td>USER ID::</td>
				<TD><INPUT TYPE="text" name="userid" placeholder="enter user id here" class="inputfield" autocomplete="off"></td> 
			</tr>
			<tr>
				<td>NAME::</td>
				<TD><INPUT TYPE="text" name="name" placeholder="enter name here" class="inputfield" autocomplete="off"></td> 
			</tr>
			<tr>
				<td>EMAIL ID::</td>
				<TD><INPUT TYPE="text" name="emailid" placeholder="enter email id " class="inputfield" autocomplete="off"></td> 
			</tr>
			<tr>
				<td>MOBILE NO:: </td>
				<TD><INPUT TYPE="text" name="mobileno" autocomplete="off" class="inputfield"></td> 
			</tr>
			
			<tr>
				<td>ADDRESS::</td>
				<td>   
				          <textarea name="address"  cols="20"  row="10" autocomplete="off" >
				          </textarea>
				</td>
			</tr>
			<tr>
				<td>ENQUIRY::</td>
				<td>   
				          <textarea name="enquiry"  cols="20"  row="10" autocomplete="off">
				          </textarea>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="send">
				
				<input type="reset" value="reset"></td>
			</tr>
		
		</table>
		</center>
		</div>
		</br>
		<?php include_once("footer.html");?>
	</div>
	</body>

</html>
