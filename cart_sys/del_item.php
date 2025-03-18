<?php
include_once '../partial/head.php';
if (isset($_POST['del_item_submit'])) {
    $item_id = mysqli_real_escape_string($con, $_POST['item_id']);
    if (empty($item_id)) {
        $Err = "Somthing went Wrong";
        header("Location:../cart.php?error=$Err");
        exit();
    } else {
        $sql = "DELETE FROM cart WHERE id=$item_id";
        mysqli_query($con, $sql);
            header("Location:../cart.php?msg=Item Removed From Cart");
    }
}
