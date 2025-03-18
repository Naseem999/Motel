<?php
session_start();
include_once '../partial/head.php';
if (isset($_SESSION['chef_id'])) {
    $chef_id=$_SESSION['chef_id'];
    if (isset($_POST['update_chef_submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        if (empty($name) || empty($email)) {
            $Err = "Somthing went Wrong";
            header("Location:../chef_dash.php?error=$Err");
            exit();
        } else {
            $sql = "UPDATE chefs SET name='$name',email='$email' WHERE id='$chef_id';";
            mysqli_query($con, $sql);
                header("Location:../chef_dash.php?msg=Chef Profile Updated ");
                exit();
        }
    }
} else {
    header("Location:../chef_dash.php?error=$Err");
}
