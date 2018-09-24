<?php
    include 'includes/common.php';
    if (!isset($_SESSION['email']))
    {
        header('location: signup.php');
    }
    $user_id = $_SESSION['id'];
    ?>
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
            <center><h1>CONFIRM ORDER</h1></center>
            <div class="row">
                <div class="col-sm-6 col-lg-4 col-lg-offset-4">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered text-center">
                            <tbody>
                                <tr><th>ITEM NUMBER</th> 
                                    <th>ITEM NAME </th>
                                    <th>PRICE </th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>Total</th>
                                    <th>Rs 0/-</th>
                                    <th><a href="success.html"><button type="button" class="btn btn-primary btn-block">Confirm Order</button></a></th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
