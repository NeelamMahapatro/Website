<?php
    include 'includes/common.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>product page</title>
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
            include 'includes/check_if_added.php';
        ?>
        <div class="container"><br>
            <br>
            <br>
            <br>
            <br>
            <div class="jumbotron">
                <h1 style="font-weight: bold;">Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div> 
        <div class="row text-center ">
            <div class="col-md-3 col-sm-6">
                <img src="img/canoneos.jpg" alt="CANON EOS" class="img-thumbnail  img-responsive" style="height:200px; width:280px;" >
                <div class="caption">
                    <h3 style="font-weight: bold;">Canon EOS</h3>
                    <p style="font-weight: bold;">Price:Rs.36000.00</p>
                </div>
                <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?> 
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="img/sonydslr.jpg" alt="SONY DSLR" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                <div class="caption">
                    <h3 style="font-weight: bold;">Sony DSLR</h3>
                    <p style="font-weight: bold;">Price:Rs.40000.00</p>
                </div>
                <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="img/sonydslr_1.jpg" alt="Sony DSLR" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                <div class="caption">
                    <h3 style="font-weight: bold;">Sony DSLR</h3>
                    <p style="font-weight: bold;">Price:Rs.50000.00</p>
                </div>
                <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
            </div>
            <div class="col-md-3 col-sm-6">
                <img src="img/olympusdslr.jpg" alt="Olympus DSLR" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                <div class="caption">
                    <h3 style="font-weight: bold;">Olympus DSLR</h3>
                    <p style="font-weight: bold;">Price:Rs.80000.00</p>
                </div>
                <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
            </div>
        </div>
            <br>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <img src="img/titan_model_1.jpg" alt="TITAN MODEL #301" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                    <div class="caption">
                        <h3 style="font-weight: bold;">Titan Model #301</h3>
                        <p style="font-weight: bold;">Price:Rs.13000.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="img/titan_model_2.jpg" alt="TITAN MODEL #201" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                    <div class="caption">
                        <h3 style="font-weight: bold;">Titan Model #201</h3>
                        <p style="font-weight: bold;">Price:Rs.3000.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="img/hmt_milan.jpg" alt="HMT Milan" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                    <div class="caption">
                        <h3 style="font-weight: bold;">HMT Milan</h3>
                        <p style="font-weight: bold;">Price:Rs.8000.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="img/faber_luba.jpg" alt="Faber Luba #111" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                    <div class="caption">
                        <h3 style="font-weight: bold;">Faber Luba #111</h3>
                        <p style="font-weight: bold;">Price:Rs.18000.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
            </div>
            <br>
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <img src="img/h_and_w.jpg" alt="HamdW" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                    <div class="caption">
                        <h3 style="font-weight: bold;">H and W</h3>
                        <p style="font-weight: bold;">Price:Rs.800.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
                <div class="col-md-3 col-sm-6 img-responsive img-rounded">
                    <img src="img/luis_phil.jpg" alt="Luis Phil" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                    <div class="caption ">
                        <h3 style="font-weight: bold;">Luis Phil</h3>
                        <p style="font-weight: bold;">Price:Rs.1000.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
                <div class="col-md-3 col-sm-6 img-responsive img-rounded">
                    <img src="img/john_zok.jpg" alt="John Zok" class="img-thumbnail img-responsive" style="height:200px; width:280px;">
                    <div class="caption">
                        <h3 style="font-weight: bold;">John Zok</h3>
                        <p style="font-weight: bold;">Price:Rs.1500.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
                <div class="col-md-3 col-sm-6">
                    <img src="img/jhalsani.jpg" alt="Jhalsani" class="img-thumbnail  img-responsive" style="height:200px; width:280px;">
                    <div class="caption">
                        <h3 style="font-weight: bold;">Jhalsani</h3>
                        <p style="font-weight: bold;">Price:Rs.1300.00</p>
                    </div>
                    <?php 
                    if (!isset($_SESSION['email'])) { 
                ?>
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                <?php 
                    } 
                    else {
                    if (check_if_added_to_cart(1)) {
                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                    } else {
                ?> 
                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> 
                <?php
                            }
                          } 
                ?>
                </div>
            </div>
        </div>
        <br>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
</html>
