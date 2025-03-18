<?php
session_start();
include_once '../partial/head.php';
$Err = "";
if (isset($_POST['add_item_submit'])) {
    $item_name = mysqli_real_escape_string($con, $_POST['item_name']);
    $item_price = mysqli_real_escape_string($con, $_POST['item_price']);
    $item_category = mysqli_real_escape_string($con, $_POST['item_category']);
    $item_type = mysqli_real_escape_string($con, $_POST['item_type']);
    // img
    if (isset($_FILES['image'])) {
        $errors = array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $expl = explode('.', $file_name);
        $file_ext = strtolower(end($expl));

        $extensions = array("jpeg", "jpg", "png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
        }

        if ($file_size > 2097152) {
            $errors[] = 'File size must be excately 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "../img/" . $file_name);
            echo "Success";
        } else {
            print_r($errors);
        }
    }

    if (empty($item_name) || empty($file_name) || empty($item_price) || empty($item_category) || empty($item_type)) {
        $Err = "Fill All the Feilds";
        header("Location:../admin_dash.php?error=$Err");
        exit();
    } else {
        $sql = "SELECT * FROM menu WHERE item_name='$item_name';";
        $result = mysqli_query($con, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            header("Location:../admin_dash.php?error=User Already exsist");
            exit();
        } else {

            //INSERT USER INTO DATABASE
            $sql = "INSERT INTO menu(item_name, item_img, item_price, item_category,item_type) VALUES('$item_name','$file_name','$item_price','$item_category','$item_type');";
            mysqli_query($con, $sql);

            header("Location:../admin_dash.php?sucsess");

            exit();
        }
    }
}



// ============================================================
if (isset($_POST['add_menu_submit'])) {
    $no_of_tables = mysqli_real_escape_string($con, $_POST['no_of_tables']);
    $admin_id = $_SESSION['admin_id'];

    if (isset($_FILES['menu_banner_1'])) {
        $file_name1 = $_FILES['menu_banner_1']['name'];
    }
    if (isset($_FILES['menu_banner_2'])) {
        $file_name2 = $_FILES['menu_banner_2']['name'];
    }
    if (isset($_FILES['menu_banner_3'])) {
        $file_name3 = $_FILES['menu_banner_3']['name'];
    }

    $sql = "SELECT * FROM restaurant1 WHERE admin_id='$admin_id';";
    $result = mysqli_query($con, $sql);
    $resultCheck = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    if ($resultCheck > 0) {
        $check = 0;
        if (empty($no_of_tables)) {
            $no_of_tables = $row['no_of_tables'];
        }

        if (empty($file_name1)) {
            $file_name1 = $row['menu_banner_1'];
        } else {
            //get image path
            $imageUrl = '../img/' . $row['menu_banner_1'];
            //check if image exists
            if (file_exists($imageUrl)) {
                //delete the image
                unlink($imageUrl);
            }
            $errors = array();
            $file_size = $_FILES['menu_banner_1']['size'];
            $file_tmp = $_FILES['menu_banner_1']['tmp_name'];
            $file_type = $_FILES['menu_banner_1']['type'];
            $expl = explode('.', $file_name1);
            $file_ext = strtolower(end($expl));

            $extensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../img/" . $file_name1);
                echo "Success";
            } else {
                print_r($errors);
            }
        }


        if (empty($file_name2)) {
            $file_name2 = $row['menu_banner_2'];
        } else {
            //get image path
            $imageUrl = '../img/' . $row['menu_banner_2'];
            //check if image exists
            if (file_exists($imageUrl)) {
                //delete the image
                unlink($imageUrl);
            }
            $errors = array();
            $file_size = $_FILES['menu_banner_2']['size'];
            $file_tmp = $_FILES['menu_banner_2']['tmp_name'];
            $file_type = $_FILES['menu_banner_2']['type'];
            $expl = explode('.', $file_name2);
            $file_ext = strtolower(end($expl));

            $extensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../img/" . $file_name2);
                echo "Success";
            } else {
                print_r($errors);
            }
        }

        if (empty($file_name3)) {
            $file_name3 = $row['menu_banner_3'];
        } else {
            //get image path
            $imageUrl = '../img/' . $row['menu_banner_3'];
            //check if image exists
            if (file_exists($imageUrl)) {
                //delete the image
                unlink($imageUrl);
            }
            $errors = array();
            $file_size = $_FILES['menu_banner_3']['size'];
            $file_tmp = $_FILES['menu_banner_3']['tmp_name'];
            $file_type = $_FILES['menu_banner_3']['type'];
            $expl = explode('.', $file_name3);
            $file_ext = strtolower(end($expl));

            $extensions = array("jpeg", "jpg", "png");

            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }

            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }

            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../img/" . $file_name3);
                echo "Success";
            } else {
                print_r($errors);
            }
        }
        //INSERT USER INTO DATABASE
        $sql = "UPDATE restaurant1 SET admin_id='$admin_id', no_of_tables='$no_of_tables',menu_banner_1='$file_name1',menu_banner_2='$file_name2' ,menu_banner_3='$file_name3' WHERE admin_id=$admin_id;";
        mysqli_query($con, $sql);

        header("Location:../admin_dash.php?msg=Number Of tables Updated");

        exit();
    } else {

        if (isset($_FILES['menu_banner_1'])) {
            $errors = array();
            $file_name1 = $_FILES['menu_banner_1']['name'];
            $file_size = $_FILES['menu_banner_1']['size'];
            $file_tmp = $_FILES['menu_banner_1']['tmp_name'];
            $file_type = $_FILES['menu_banner_1']['type'];
            $expl = explode('.', $file_name1);
            $file_ext = strtolower(end($expl));
    
            $extensions = array("jpeg", "jpg", "png");
    
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
    
            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }
    
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../img/" . $file_name1);
                echo "Success";
            } else {
                print_r($errors);
            }
        }

        if (isset($_FILES['menu_banner_2'])) {
            $errors = array();
            $file_name2 = $_FILES['menu_banner_2']['name'];
            $file_size = $_FILES['menu_banner_2']['size'];
            $file_tmp = $_FILES['menu_banner_2']['tmp_name'];
            $file_type = $_FILES['menu_banner_2']['type'];
            $expl = explode('.', $file_name2);
            $file_ext = strtolower(end($expl));
    
            $extensions = array("jpeg", "jpg", "png");
    
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
    
            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }
    
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../img/" . $file_name2);
                echo "Success";
            } else {
                print_r($errors);
            }
        }
        if (isset($_FILES['menu_banner_3'])) {
            $errors = array();
            $file_name3 = $_FILES['menu_banner_3']['name'];
            $file_size = $_FILES['menu_banner_3']['size'];
            $file_tmp = $_FILES['menu_banner_3']['tmp_name'];
            $file_type = $_FILES['menu_banner_3']['type'];
            $expl = explode('.', $file_name3);
            $file_ext = strtolower(end($expl));
    
            $extensions = array("jpeg", "jpg", "png");
    
            if (in_array($file_ext, $extensions) === false) {
                $errors[] = "extension not allowed, please choose a JPEG or PNG file.";
            }
    
            if ($file_size > 2097152) {
                $errors[] = 'File size must be excately 2 MB';
            }
    
            if (empty($errors) == true) {
                move_uploaded_file($file_tmp, "../img/" . $file_name3);
                echo "Success";
            } else {
                print_r($errors);
            }
        }


        $sql = "INSERT INTO restaurant(admin_id, no_of_tables, menu_banner_1, menu_banner_2,menu_banner_3) VALUES('$admin_id','$no_of_tables','$file_name1','$file_name2','$file_name3');";
            mysqli_query($con, $sql);

            header("Location:../admin_dash.php?msg=Added");
    }
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
