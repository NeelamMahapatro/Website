<?php
    include 'includes/common.php';
    $item_id = $_GET['id'];
    $user_id = $_SESSION['id'];
    $insert_item = "INSERT INTO user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    $insert_item_result = mysqli_query($con, $insert_item);
    header('location: products.php');
?>