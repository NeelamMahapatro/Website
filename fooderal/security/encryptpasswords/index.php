<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Password</title>
</head>
<body>
	<form method="post" action="passwordupdate.php" onsubmit="return submitForm();">
		<table>
			<tr>
				<td>
					<input type="password" name="currentpassword" placeholder="Current Password" id="currentpassword"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="newpassword" placeholder="New Password" id="newpassword"/>
				</td>
			</tr>
			<tr>
				<td>
					<input type="password" name="confirmpassword" placeholder="Confirm Password" id="confirmpassword"/>
				</td>
			</tr>
			<tr>
				
				<td>
					<input type="submit" name="Submit" value="Password Update"/>
				</td>
			</tr>
			<tr>
				<td>
					<?php include_once('common/msg.php'); ?>
				</td>
			</tr>
		</table>
	</form>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery.md5.js"></script>
	<script src="js/jquery.base64.min.js"></script>
	<script>
	    function submitForm()
	    {
	        var pass = document.getElementById("newpassword").value;
	        var cpass = document.getElementById("confirmpassword").value;
	        var currentpassword=document.getElementById("currentpassword").value;

	        var passhash = $.md5(pass);
	        var cpasshash = $.md5(cpass);
	        var currentpasswordhash=$.md5(currentpassword);

	            
	        passhash = $.base64.encode(passhash);
	        cpasshash = $.base64.encode(cpasshash);
	        currentpasswordhash=$.base64.encode(currentpasswordhash);

	        document.getElementById("newpassword").value = passhash;
	        document.getElementById("confirmpassword").value = cpasshash;
	        document.getElementById("currentpassword").value = currentpasswordhash;
	        return true;
	    }
	</script>
</body>
</html>