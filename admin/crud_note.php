<?php
session_start();
include_once '../partial/head.php';
$admin_id=$_SESSION['admin_id'];
$Err = "";
if (isset($_POST['add_note_submit'])) {
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $desc = mysqli_real_escape_string($con, $_POST['desc']);
    

if (empty($title) || empty($desc) ) {
    $Err = "Fill All the Feilds";
    header("Location:../admin_dash.php?error=$Err");
    exit();
} else {
     //INSERT note INTO DATABASE
     $sql = "INSERT INTO todo(title, description,note_for, timestamp_) VALUES('$title','$desc','$admin_id',now());";
     mysqli_query($con, $sql);

     header("Location:../admin_dash.php?msg=Note Added ");

     exit();
}
}

// edit note
if (isset($_POST['update_note_submit'])) {
    $title = mysqli_real_escape_string($con, $_POST['edit_title']);
    $desc = mysqli_real_escape_string($con, $_POST['edit_desc']);
    $note_id= mysqli_real_escape_string($con, $_POST['note_id']);


     //INSERT note INTO DATABASE
     $sql1 =  "UPDATE todo SET title='$title',description='$desc',timestamp_= now() WHERE id='$note_id';";
     mysqli_query($con, $sql1);

 header("Location:../admin_dash.php?msg=Note updtaed sucessfully ");

     exit();
}
// delete note
if (isset($_GET['del_id'])) {
    $del_id= mysqli_real_escape_string($con, $_GET['del_id']);
     $sql2 = "DELETE FROM todo WHERE id=$del_id";
    mysqli_query($con, $sql2);
 header("Location:../admin_dash.php?msg=Note Deleted sucessfully ");

     exit();
}
