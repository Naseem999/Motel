<?php
session_start();
include_once '../partial/head.php';
if (isset($_SESSION['admin_id'])) {
    $admin_id=$_SESSION['admin_id'];
    if (isset($_POST['update_admin_submit'])) {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        if (empty($username) || empty($email)) {
            $Err = "Somthing went Wrong";
            header("Location:../admin_dash.php?error=$Err");
            exit();
        } else {
            $sql = "UPDATE admin_tab SET username='$username',email='$email' WHERE id='$admin_id';";
            mysqli_query($con, $sql);
                header("Location:../admin_dash.php?msg=Admin Profile Updated ");
                exit();
        }
    }
} else {
    header("Location:../admin_dash.php?error=$Err");
}
