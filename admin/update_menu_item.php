<?php
include_once '../partial/head.php';
if (isset($_POST['update_menu_submit'])) {
    $item_id = mysqli_real_escape_string($con, $_POST['item_id']);
    $item_price = mysqli_real_escape_string($con, $_POST['item_price']);
    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
    }
    // img
    $sql = "SELECT * FROM menu WHERE id='$item_id';";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if (empty($item_price)) {
        $item_price = $row['item_price'];
    }
    if (empty($file_name)) {
        $file_name = $row['item_img'];
    } else {
        //get image path
        $imageUrl = '../img/' . $row['item_img'];
        //check if image exists
        if (file_exists($imageUrl)) {
            //delete the image
            unlink($imageUrl);
        }
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size =$_FILES['image']['size'];
        $file_tmp =$_FILES['image']['tmp_name'];
        $file_type=$_FILES['image']['type'];
        $expl=explode('.',$file_name);
        $file_ext=strtolower(end($expl));
        
        $extensions= array("jpeg","jpg","png");
        
        if(in_array($file_ext,$extensions)=== false){
           $errors[]="extension not allowed, please choose a JPEG or PNG file.";
        }
        
        if($file_size > 2097152){
           $errors[]='File size must be excately 2 MB';
        }
        
        if(empty($errors)==true){
           move_uploaded_file($file_tmp,"../img/".$file_name);
           echo "Success";
        }else{
           print_r($errors);
        }
    }



    $sql = "UPDATE menu SET item_img='$file_name', item_price='$item_price'  WHERE id=$item_id;";
    mysqli_query($con, $sql);

    header("Location:../admin_dash.php?Success");
}
