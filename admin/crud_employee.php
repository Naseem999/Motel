<?php
session_start();
include_once '../partial/head.php';
$admin_id = $_SESSION['admin_id'];
$Err = "";
if (isset($_POST['add_employee_submit'])) {
    $e_name = mysqli_real_escape_string($con, $_POST['e_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $restaurant_name = mysqli_real_escape_string($con, $_POST['restaurant_name']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);


    if (empty($e_name) || empty($email) || empty($pass) || empty($department) || empty($restaurant_name) || empty($salary)) {
        $Err = "Fill All the Feilds";
        header("Location:../admin_dash.php?error=$Err");
        exit();
    } else {
        $sql = "SELECT * FROM employee WHERE email='$email ';";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            header("Location:../admin_dash.php?error=employee Already exsist");
            exit();
        } else {
            //INSERT chef INTO DATABASE
            $sql = "INSERT INTO employee(e_name, email,pass, department,restaurant_name,salary) VALUES('$e_name','$email','$pass','$department','$restaurant_name','$salary');";
            mysqli_query($con, $sql);

            header("Location:../admin_dash.php?msg=employee Added ");

            exit();
        }
    }
}
// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
// edit chef
if (isset($_POST['update_employee_submit'])) {
    $employee_id = mysqli_real_escape_string($con, $_POST['employee_id']);
    $e_name = mysqli_real_escape_string($con, $_POST['e_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $department = mysqli_real_escape_string($con, $_POST['department']);
    $restaurant_name = mysqli_real_escape_string($con, $_POST['restaurant_name']);
    $salary = mysqli_real_escape_string($con, $_POST['salary']);

    $sql = "SELECT * FROM employee WHERE id=$employee_id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);

    if (empty($name)) {
        $e_name = $row['e_name'];
    }
    if (empty($email)) {
        $email = $row['email'];
    }
    if (empty($pass)) {
        $pass = $row['pass'];
    }
    if (empty($department)) {
        $department = $row['department'];
    }
    if (empty($restaurant_name)) {
        $restaurant_name = $row['restaurant_name'];
    }
    if (empty($salary)) {
        $salary = $row['salary'];
    }

    $sql1 =  "UPDATE employee SET e_name='$e_name',email='$email',pass='$pass',department='$department',restaurant_name='$restaurant_name',salary='$salary' WHERE id='$employee_id';";
    mysqli_query($con, $sql1);

    header("Location:../admin_dash.php?msg=Employee Data updtaed sucessfully ");

    exit();
}
// delete note
if (isset($_GET['del_id'])) {
    $del_id = mysqli_real_escape_string($con, $_GET['del_id']);
    $sql2 = "DELETE FROM employee WHERE id=$del_id";
    mysqli_query($con, $sql2);
    header("Location:../admin_dash.php?msg=Employee Data Deleted sucessfully ");

    exit();
}
