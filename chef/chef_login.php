<?php
session_start();
include_once '../partial/head.php';
$Err = "";

if (isset($_POST['chef_login_submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);

    if (empty($email) || empty($pass)) {
        $Err = "Fill All the Feilds To Login";
        header("Location:../chef_log.php?error=$Err");
        exit();
    } else {

        $sql = "SELECT * FROM chefs WHERE email='$email';";
        $result = mysqli_query($con, $sql);
        $resultch = mysqli_num_rows($result);
        if ($resultch < 1) {
            $Err = "Invalid Login";
            header("Location:../chef_log.php?error=$Err");
            exit();
        } else {
            if ($row = mysqli_fetch_assoc($result)) {

                //dehashing of password user type

                if ($pass == $row['pass']) {
                    //log in the user in website here creating session verible for user
                    $name = $row['name'];
                    $_SESSION['chef_id'] = $row['id'];
                    $_SESSION['res_name'] = $row['restaurant_name'];
                    header("Location:../chef_dash.php?login=You Are Logged In Successfully&id=$name");
                    exit();
                } else {
                    $Err = "Invalid Login Password Not matched";
                    header("Location:../chef_log.php?error=$Err");
                }
            }
        }
    }
}
