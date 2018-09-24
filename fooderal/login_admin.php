<html>
	<head>
		<title>login page</title>
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="css/courses.css" type="text/css" rel="stylesheet" />	
	</head>
	<body>
	 	<div id="container">
		<?php include_once("header.html");?>
		<?php include_once("topnav_admin.php");?>
		<div id="main">
		<center>
		<br/>
		<table bgcolor="lightgray" border="1" cellspacing="0" cellpadding="3" width="50%" height="20%">
 		 <tr bgcolor="yellow">
		<th><u>NAME</u></th>
		<th><u>EMAIL ID</u></th>
		<th><u>MOBILE NO</u></th>
		<th><u>ADDRESS</u></th>
		<th><u>ENQUIRY</u></th>
        <th><u>REPLY</u></th>
 		 </tr>

		<?php
 		include_once("dbconnect.php");
		$sql="select * from enquiry1";
		$result=mysqli_query($con,$sql);
		$rc=mysqli_num_rows($result);
		if($rc>0)
          		{
	   	$row=mysqli_fetch_array($result);
		while($row)
		{
		?>
	
		<tr>
			<td><?php echo $row['name']?></td>
			<td><?php echo $row['emailid']?></td>
			<td><?php echo $row['mobileno']?></td>
			<td><?php echo $row['address']?></td>
			<td><?php echo $row['enquiry']?></td>
            <td><?php echo $row['reply']?></td>
			
		</tr>
		<?php
			$row=mysqli_fetch_array($result);
		
		}
		}
     	 	else
		{?>
		 <tr>
	 	  <td colspan="5">NO RECORDS FOUND</td>
		</tr>
       		<?php
      		  }	
		mysqli_close($con);
       		 ?>
		</table>
		</center>

		</div>
		<?php include_once("footer.html");?>

		</div>
		</body>

	</html>