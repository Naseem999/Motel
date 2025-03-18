<?php
include_once '../partial/head.php';

if (isset($_GET['assign_to_chef'])) {
    $order_id = mysqli_real_escape_string($con, $_GET['order_id']);
    $chef_id = mysqli_real_escape_string($con, $_GET['chef_id']);
    $sql = "UPDATE orders SET chef='$chef_id' WHERE id=$order_id;";
    mysqli_query($con, $sql);
    $timestamp1 = date("M,d,Y h:i a");
    $sql2 = "SELECT * FROM orders WHERE id=$order_id";
    $result2 = mysqli_query($con, $sql2);
    $resultch2 = mysqli_num_rows($result2);
    if ($resultch2 < 1) {
    } else {
        $row1 = mysqli_fetch_assoc($result2);
        $title = "From:Admin-New Order :" . $row1['item_name'] . " on Table No :" . $row1['table_no'];

// send notification to chef for order
        $sql3 = "SELECT * FROM notifications WHERE timestamp_=now()";
        $result3 = mysqli_query($con, $sql3);
        $resultch3 = mysqli_num_rows($result3);
        if ($resultch3 < 1) {
            $sql1 = "INSERT INTO notifications(title,n_for,timestamp_) 
VALUES('$title','$chef_id',now());";
            mysqli_query($con, $sql1);
            header("Location:../admin_dash.php?msg=Order Assigned To Chef=$chef_id");
            exit();
        } else {
            header("Location:../admin_dash.php?msg=Already send This Notification");
        }
    }
}
