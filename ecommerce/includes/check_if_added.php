<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function check_if_added_to_cart($item_id) 
    {
    include 'includes/common.php';
    $check = "SELECT * FROM user_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
    $check_result = mysqli_query($con, $check);
    $row3 = mysqli_num_rows($check_result);
    if($row3>=1)
    {
        return 1;
    }
    else {
        return 0;    
    }
    }
?>