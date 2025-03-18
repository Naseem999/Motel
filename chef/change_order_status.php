<?php
session_start();
include_once '../partial/head.php';
if (isset($_SESSION['chef_id'])) {
    $chef_id = $_SESSION['chef_id'];
    $sql = "SELECT * FROM chefs WHERE id='$chef_id'; ";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $chef_name = $row['name'];

    if (isset($_GET['order_status'])) {
        $id = mysqli_real_escape_string($con, $_GET['order_status']);
        if (empty($id)) {
            $Err = "Somthing went Wrong";
            header("Location:../chef_dash.php?error=$Err");
            exit();
        } else {
            $sql = "SELECT * FROM orders WHERE id='$id'; ";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if ($row['item_status'] == 'pending') {
                $cng_status = "completed";

                // Notification TO admin 
                $timestamp1 = date("M,d,Y h:i a");
                $sql2 = "SELECT * FROM orders WHERE id=$id";
                $result2 = mysqli_query($con, $sql2);
                $resultch2 = mysqli_num_rows($result2);
                if ($resultch2 < 1) {
                } else {
                    $row1 = mysqli_fetch_assoc($result2);
                    $title = "By Chef:" . $chef_name . " Order Done :" . $row1['item_name'] . " on Table No :" . $row1['table_no'];
                }
                $sql3 = "SELECT * FROM notifications WHERE title='$title'";
                $result3 = mysqli_query($con, $sql3);
                $resultch3 = mysqli_num_rows($result3);
                if ($resultch3 < 1) {
                    $sql1 = "INSERT INTO notifications(title,n_for,timestamp_) 
VALUES('$title','motel',now());";
                    mysqli_query($con, $sql1);
                }
                // =============================================

            } else {
                $cng_status = "pending";
            }
            $sql = "UPDATE orders SET item_status='$cng_status' WHERE id='$id';";
            mysqli_query($con, $sql);



            header("Location:../chef_dash.php?msg=Order Status Updated ");
            exit();
        }
    }
} else {
    header("Location:../chef_dash.php?error=invlid");
}
