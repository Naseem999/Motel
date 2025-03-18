<?php
session_start();
include_once '../partial/head.php';
if (isset($_SESSION['username'])) {
    if (isset($_POST['update_cart_submit'])) {
        $item_id = mysqli_real_escape_string($con, $_POST['item_id']);
        $item_quantity = mysqli_real_escape_string($con, $_POST['item_quantity']);
        if (empty($item_id) || empty($item_quantity)) {
            $Err = "Somthing went Wrong";
            header("Location:../cart.php?error=$Err");
            exit();
        } else {
            $sql = "UPDATE cart SET item_quantity='$item_quantity' WHERE id=$item_id;";
            mysqli_query($con, $sql);
            $url = $_SERVER['HTTP_REFERER'];
            $key = 'cart.php';
            $key2 = 'checkout.php';
            if (strpos($url, $key) == true) {
                $Err = "Wrong access";
                header("Location:../cart.php?msg=Item Quantity Updated Successfully");
                exit();
            }
            if (strpos($url, $key2) == true) {
                header("Location:../checkout.php?msg=Item Quantity Updated Successfully");
                exit();
            }
        }
    }
} else {
    if (isset($_POST['update_cart_submit'])) {

        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_name"] == $_POST["item_name"]) {
                $item_array = $_SESSION["shopping_cart"][$keys];
                $item_array1= array(
                    'item_name'            =>    $item_array['item_name'],
                    'item_img'            =>    $item_array['item_img'],
                    'item_price'        =>    $item_array['item_price'],
                    'item_quantity'        =>    $_POST['item_quantity'],
                    'item_type'        =>    $item_array['item_type'],
                );
                $_SESSION["shopping_cart"][$keys] = $item_array1;

                $url = $_SERVER['HTTP_REFERER'];
                $key = 'cart.php';
                $key2 = 'checkout_guest.php';
                $key3 = 'cart_guest.php';

                if (strpos($url, $key) == true) {
                    $Err = "Wrong access";
                    header("Location:../cart.php?msg=Item Quantity Updated Successfully");
                    exit();
                }
                if (strpos($url, $key2) == true) {
                    header("Location:../checkout_guest.php?msg=Item Quantity Updated Successfully");
                    exit();
                }
                if (strpos($url, $key3) == true) {
                    header("Location:../cart_guest.php?msg=Item Quantity Updated Successfully");
                    exit();
                }
            }
        }
    }
}
