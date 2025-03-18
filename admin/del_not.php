<?php
include_once '../partial/head.php';
if(isset($_GET['del_noti_submit'])){
    $id=$_GET['noti_id'];
    $sql = "DELETE FROM notifications WHERE id=$id";
    mysqli_query($con, $sql);
        header("Location:../admin_dash.php?msg=Notification Removed");

}
?>