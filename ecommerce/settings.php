<?php
    include 'includes/common.php';
    if (!isset($_SESSION['email']))
    {
        header('location: index.php');
    }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Confirm page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jQuery library -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
                include 'includes/header.php';
        ?>
        <div class="container">
            <br>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-lg-offset-4">
                    <h1>Change Password</h1>
                    <form action="settings_script.php" method="POST">
                        <div class="form-group">
                                <input type="password" class="form-control" name="old_password" placeholder="Old Password" required="true" pattern=".{6,}">                    
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control" name="new_password" placeholder="New Password" required="true" pattern=".{6,}">                    
                        </div>
                        <div class="form-group">
                                <input type="password" class="form-control" name="new_password" placeholder="Re-type New Password" required="true" pattern=".{6,}">                    
                                <div><?php echo $_GET['password_error']; ?></div>
                        </div>
                        <button type="button" class="btn btn-primary">Change</button>
                    </form>
                </div>
            </div>            
        </div> 
        
        <div class="container_2">
        </div>
        <?php
                include 'includes/footer.php';
        ?>
    </body>
</html>


