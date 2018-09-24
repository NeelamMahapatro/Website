<?php


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>E-COMMERCE SITE</title>
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
            include_once 'includes/header.php';
        ?>
        <div class="container">
            <br><br>
            <div class="banner-image">
                <div class="inner-banner-image">
                    <div class="banner-content">
                        <h1>We sell lifestyle</h1>
                        <p>Flat 40% OFF on premium brands</p>
                        <a href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="container_1">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/watch.jpg" alt="WATCH" class="thumbnail" style="width: 350px; height: 150px;">
                        <div class="caption">
                            <h2>Watches</h2>
                            <p>Original watches from the best brands</p>
                        </div>
                    </div>
            
                    <div class="col-md-4">
                        <img src="img/camera.jpg" alt="CAMERA" class="thumbnail" style="width: 350px; height: 150px;">
                        <div class="caption">
                            <h2>Cameras</h2>
                            <p>Choose among the best available in the world</p>
                        </div>
                    </div>
                
                    <div class="col-md-4">
                        <img src="img/shirt.jpg" alt="SHIRT" class="thumbnail" style="width: 350px; height: 150px;">
                        <div class="caption">
                            <h2>Shirts</h2>
                            <p>Our exquisite collection of shirts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include_once 'includes/footer.php';
        ?>
    </body>
</html>
