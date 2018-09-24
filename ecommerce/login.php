<?php
    include 'includes/common.php';
    if (isset($_SESSION['email'])) 
        {   header('location: products.php'); }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LOGIN page</title>
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
            <br><br>
            <div class="background_login">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            LOGIN      
                        </div>
                        <div class="panel-body">
                            <center><p><span class="text-warning">Login to make a purchase</span></p></center>
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <label for="email" class="form">EMAIL</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter e-mail id" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" >
                                    <div><?php echo $_GET['email_error']; ?></div>
                                </div>
                                <div class="form-group">
                                    <label for="password">EMAIL</label>
                                    <input type="password" class="form-control" name="password" placeholder="Enter password" required = "true" pattern=".{6,}">
                                    <div><?php echo $_GET['password_error']; ?></div>
                                </div>
                                <button>
                                    <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                </button>
                            </form>   
                        </div>               
                        <div class="panel-footer">
                            <p><a href="signup.html">Don't have an account? Register</a></p>
                        </div>
                    </div>
                </div>
            </div>
            </div>    
        </div>
        <?php
        include 'includes/footer.php';
        ?>      
        
    </body>
</html>
