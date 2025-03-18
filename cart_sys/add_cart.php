<?php
session_start();
include_once '../partial/head.php';
if (isset($_POST['add_cart_submit'])) {
    $item_name = mysqli_real_escape_string($con, $_POST['item_name']);
    $item_price = mysqli_real_escape_string($con, $_POST['item_price']);
    $item_img = mysqli_real_escape_string($con, $_POST['item_img']);
    $item_quantity = mysqli_real_escape_string($con, $_POST['item_quantity']);
    $item_type = mysqli_real_escape_string($con, $_POST['item_type']);
    if (empty($item_name) || empty($item_price) || empty($item_img) || empty($item_quantity) || empty($item_type)) {
        $url = $_SERVER['HTTP_REFERER'];
        $key = 'restaurant.php';
        $key2 = 'bar.php';
        if (strpos($url, $key) == true) {
            $Err = "Somthing went Wrong";
            header("Location:../restaurant.php?error=$Err");
            exit();
        }
        if (strpos($url, $key2) == true) {
            $Err = "Somthing went Wrong";
            header("Location:../bar.php?error=$Err");
            exit();
        }
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $item_name)) {
        $url = $_SERVER['HTTP_REFERER'];
        $key = 'restaurant.php';
        $key2 = 'bar.php';
        if (strpos($url, $key) == true) {
            $Err = "Wrong access";
            header("Location:../restaurant.php?error=$Err");
            exit();
        }
        if (strpos($url, $key2) == true) {
            $Err = "Wrong access";
            header("Location:../bar.php?error=$Err");
            exit();
        }

        if (!preg_match("/^[a-zA-Z-' ]*$/", $item_name)) {
            $url = $_SERVER['HTTP_REFERER'];
            $key = 'restaurant.php';
            $key2 = 'bar.php';
            if (strpos($url, $key) == true) {
                $Err = "Wrong access";
                header("Location:../restaurant.php?error=$Err");
                exit();
            }
            if (strpos($url, $key2) == true) {
                $Err = "Wrong access";
                header("Location:../bar.php?error=$Err");
                exit();
            }
        }
    } else {

        if (isset($_SESSION['username'])) {
            $sql = "SELECT * FROM cart WHERE item_name='$item_name';";
            $result = mysqli_query($con, $sql);
            $resultCheck = mysqli_num_rows($result);
            if ($resultCheck > 0) {
                header("Location:../cart.php?error=Item_Already Added");
                exit();
            } else {
                $sql = "INSERT INTO cart(item_name,item_img,item_price,item_quantity,item_type) VALUES('$item_name','$item_img','$item_price','$item_quantity','$item_type');";
                mysqli_query($con, $sql);
                $url = $_SERVER['HTTP_REFERER'];
                $key = 'restaurant.php';
                $key2 = 'bar.php';
                $key3 = 'menu.php';

                if (strpos($url, $key) == true) {
                    header("Location:../restaurant.php?msg=Added To Cart");
                }
                if (strpos($url, $key2) == true) {
                    header("Location:../bar.php?msg=Added To Cart");
                }
                if (strpos($url, $key3) == true) {
                    header("Location:../menu.php?msg=Added To Cart");
                }
            }
        } else {
            if (isset($_SESSION["shopping_cart"])) {
                $item_name1 = array_column($_SESSION["shopping_cart"], "item_name");
                if (!in_array($item_name, $item_name1)) {
                    $count = count($_SESSION["shopping_cart"]);
                   
                    $item_array = array(
                        'item_name'            =>    $item_name,
                        'item_img'            =>    $item_img,
                        'item_price'        =>    $item_price,
                        'item_quantity'        =>    $item_quantity,
                        'item_type'        =>    $item_type
                    );
                    $_SESSION["shopping_cart"][$count] = $item_array;
                    $url = $_SERVER['HTTP_REFERER'];
                    $key = 'restaurant.php';
                    $key2 = 'bar.php';
                    $key3 = 'menu.php';

                    if (strpos($url, $key) == true) {
                        header("Location:../restaurant.php?msg=Added To Cart");
                    }
                    if (strpos($url, $key2) == true) {
                        header("Location:../bar.php?msg=Added To Cart");
                    }
                    if (strpos($url, $key3) == true) {
                        header("Location:../menu.php?msg=Added To Cart With Session");
                    }
                } else {
                    header("Location:../menu.php?msg=Item Already Added To Cart");
                }
            } else {
                $item_array = array(
                    'item_name'            =>    $item_name,
                    'item_img'            =>    $item_img,
                    'item_price'        =>    $item_price,
                    'item_quantity'        =>    $item_quantity,
                    'item_type'        =>    $item_type
                );
                $_SESSION["shopping_cart"][0] = $item_array;
                $url = $_SERVER['HTTP_REFERER'];
                $key = 'restaurant.php';
                $key2 = 'bar.php';
                $key3 = 'menu.php';

                if (strpos($url, $key) == true) {
                    header("Location:../restaurant.php?msg=Added To Cart");
                }
                if (strpos($url, $key2) == true) {
                    header("Location:../bar.php?msg=Added To Cart");
                }
                if (strpos($url, $key3) == true) {
                    header("Location:../menu.php?msg=Added To Cart");
                }
            }
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
