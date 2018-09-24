<?php
      include 'includes/common.php';
      if(isset($_SESSION['id']))
      {
          header('location: products.php');
      }
?>
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
        <title>SIGN UP page</title>
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
            <div class="background_signup">
                <div class="row">
                    <div class="col-sm-6 col-lg-4 col-lg-offset-4">
                        <h1 style="font-size:35px; font-weight: bold; color:violet; ">SIGN UP</h1>
                        <form action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Name">                    
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="E-mail" required="true" pattern="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/">                    
                            
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required="true" pattern=".{6,}">                    
                                 
                            </div>
                            <div class="form-group">
                                <input type="number" class="form-control" name="contact" placeholder="Contact" required="true" pattern="[0-9]{10,}">                    
                           </div>
                            <div class="form-group">
                                <input class="form-control" name="city" placeholder="City">                    
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="address" placeholder="Address">                    
                            </div>
                            <a href="products.php"><button type="button" class="btn btn-primary btn-default">
                                Submit    
                                </button>  </a>           
                        </form>
                    </div>      
                </div>
            </div>
        </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>

