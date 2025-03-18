<?php
session_start();
include_once '../partial/head.php';
$admin_id = $_SESSION['admin_id'];
$Err = "";
if (isset($_POST['add_chef_submit'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $speciality = mysqli_real_escape_string($con, $_POST['speciality']);
    $restaurant_name = mysqli_real_escape_string($con, $_POST['restaurant_name']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);


    if (empty($name) || empty($email) || empty($pass) || empty($speciality) || empty($restaurant_name) || empty($salary)) {
        $Err = "Fill All the Feilds";
        header("Location:../admin_dash.php?error=$Err");
        exit();
    } else {
        $sql = "SELECT * FROM chefs WHERE email='$email ';";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            header("Location:../admin_dash.php?error=Chef Already exsist");
            exit();
        } else {
            //INSERT chef INTO DATABASE
            $sql = "INSERT INTO chefs(name, email,pass, speciality,restaurant_name,salary) VALUES('$name','$email','$pass','$speciality','$restaurant_name','$salary');";
            mysqli_query($con, $sql);

            header("Location:../admin_dash.php?msg=chef Added ");

            exit();
        }
    }
}
// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// edit chef
if (isset($_POST['update_chef_submit'])) {
    $chef_id = mysqli_real_escape_string($con, $_POST['chef_id']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $speciality = mysqli_real_escape_string($con, $_POST['speciality']);
    $restaurant_name = mysqli_real_escape_string($con, $_POST['restaurant_name']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);

    $sql = "SELECT * FROM chefs WHERE id=$chef_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (empty($name)) {
        $name = $row['name'];
    }
    if (empty($email)) {
        $email = $row['email'];
    }
    if (empty($pass)) {
        $pass = $row['pass'];
    }
    if (empty($speciality)) {
        $speciality = $row['speciality'];
    }
    if (empty($restaurant_name)) {
        $restaurant_name = $row['restaurant_name'];
    }
    if (empty($salary)) {
        $salary = $row['salary'];
    }

    $sql1 =  "UPDATE chefs SET name='$name',email='$email',pass='$pass',speciality='$speciality',restaurant_name='$restaurant_name',salary='$salary' WHERE id='$chef_id';";
    mysqli_query($con, $sql1);

    header("Location:../admin_dash.php?msg=Chef Data updtaed sucessfully ");

    exit();
}
// delete note
if (isset($_GET['del_id'])) {
    $del_id = mysqli_real_escape_string($con, $_GET['del_id']);
    $sql2 = "DELETE FROM chefs WHERE id=$del_id";
    mysqli_query($con, $sql2);
    header("Location:../admin_dash.php?msg=Note Deleted sucessfully ");

    exit();
}
