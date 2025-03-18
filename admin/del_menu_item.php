<?php
include_once '../partial/head.php';
if (isset($_POST['del_menu_item_submit'])) {
    $item_id = mysqli_real_escape_string($con, $_POST['item_id']);
    if (empty($item_id)) {
        $Err = "Somthing went Wrong";
        header("Location:../admin_dash.php?error=$Err");
        exit();
    } else {
        $sql = "SELECT * FROM menu WHERE id='$item_id';";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
         //get image path
         $imageUrl = '../img/' . $row['item_img'];
         //check if image exists
         if (file_exists($imageUrl)) {
             //delete the image
             unlink($imageUrl);
         }
         
        $sql = "DELETE FROM menu WHERE id=$item_id";
        mysqli_query($con, $sql);
            header("Location:../admin_dash.php?msg=Item Removed From Menu");
    }
}

if (isset($_POST['del_order_submit'])) {
    $item_id = mysqli_real_escape_string($con, $_POST['item_id']);
    if (empty($item_id)) {
        $Err = "Somthing went Wrong";
        header("Location:../admin_dash.php?error=$Err");
        exit();
    } else {
    
        $sql = "DELETE FROM orders WHERE id=$item_id";
        mysqli_query($con, $sql);
        header("Location:../admin_dash.php?msg=Order Canceled");
    }
}