<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Motel-Cart</title>
</head>

<body>
    <?php

    include_once 'partial/header.php';
    if (isset($_POST['del_item_submit'])) {

        foreach ($_SESSION["shopping_cart"] as $keys => $values) {
            if ($values["item_name"] == $_POST["item_name"]) {
                unset($_SESSION["shopping_cart"][$keys]);
                echo '<script>alert("Item Removed")</script>';
            }
        }
    }

    if (isset($_GET['error'])) {
    ?>
        <script>
            var toastHTML =
                "<div style='color:#e57373' ><p style='margin-bottom:0px'>Item Already Exsist in Cart.<br>You Can Increse and Decrease The Quantity or Continue Ordering.</p><br><a href='<?php echo $_SERVER['HTTP_REFERER']; ?>' style='color:white; background-color:#1c1c1c ;margin:1px; margin-top:0px; margin-left:0px' class='btn-flat toast-action'>Continue</button></div>"
            var toastElement = document.querySelector('.toast');
            M.toast({
                html: toastHTML,
                displayLength: 6000,
                outDuration: 600
            });
        </script>
    <?php
    }
    if (isset($_GET['msg'])) {
    ?>
        <script>
            var toastHTML =
                "<span style='color:#a9ffac' ><?php echo $_GET['msg']; ?></span>"
            var toastElement = document.querySelector('.toast');
            M.toast({
                html: toastHTML,
                displayLength: 6000,
                outDuration: 600
            });
        </script>
    <?php
    }
    ?>
    <!-- header section -->
    <div class="row header_sec">
        <div class="parallax-container" style="  height:35vh">

            <div class="parallax">
                <img src="img/cart_bg.png" alt="Parallax">
            </div>

            <div class="row" style="  width: 100%; height: 100%;  margin-top:9vh; ">
                <div class="col s12 m12 l12 center-align">
                    <h3 style="   text-align: center; 
                    font-weight: 600; margin-bottom: 0px;  font-size: 8.5vh; color: #f6f6f6; ">
                        CART
                    </h3>
                    <hr style="width: 60px; height: 2px; border: none; background-color: #dedede;">
                </div>

            </div>
        </div>
    </div>

    <!-- main section -->
    <div class="row main_sec">

        <div class="valign-wrapper card-panel  z-depth-1  " style=" border-radius: 10px; border: 1px solid #dedede; margin-top: 0px; padding: 0px;">

            <div class=" col s5 m4 l4 ">
                <p class="text" style="color: #585858;">Item Name</p>
            </div>
            <div class="col s2  m2 l2 center-align">
                <p style="text-align: center; color: #585858;" class="text">Price</p>
            </div>

            <div class="col s2  m2 l2 center-align">
                <p style="text-align: center;color: #585858;" class="text">Quantity</p>
            </div>
            <div class="col s2  m2 l2 center-align">

                <p style="text-align: center;color:#585858;" class="text">Total</p>

            </div>

            <div class="col s3  m1 l1 " style=" height: 9vh;  ">

            </div>
        </div>

        <table>
            <tbody">
                <?php
                if (!empty($_SESSION["shopping_cart"])) {
                    $subtotal = 0;
                    foreach ($_SESSION["shopping_cart"] as $keys => $values) {
                ?>
                        <tr>
                            <?php
                            $item_name = $values['item_name'];
                            $img = $values['item_img'];
                            $price = $values['item_price'];
                            $quantity = $values['item_quantity'];
                            $item_type = $values['item_type'];
                            $total = $price * $quantity;
                            $subtotal = $subtotal + $total;
                            ?>


                            <div class="valign-wrapper card-panel hoverable  " style="border: 1px solid #dedede; padding: 0px;">
                                <div class=" col s5 m4 l4 ">
                                    <p class=" text">
                                        <a href="#<?php echo $item_name ?>" class="text modal-trigger "> <?php echo $item_name; ?></a>
                                    </p>
                                </div>
                                <div class="col s2  m2 l2 center-align">

                                    <p id="price">$<?php echo $price; ?></p>

                                </div>

                                <div class="col s2  m2 l2 center-align">

                                    <a href="#<?php echo $item_name; ?>" class="text modal-trigger  waves-effect waves-light ">
                                        <?php echo  $quantity ?>
                                        <hr style="width: 10px; margin-top:0px; margin-bottom: 0px;">
                                    </a>

                                </div>
                                <div class="col s2  m2 l2 center-align">

                                    <p id="total" type="text">$<?php echo $total; ?> </p>

                                </div>

                                <div class="col s3  m1 l1 waves-effect   waves-red " style=" height: 9vh;  ">
                                    <form action="cart_guest.php" method="post">
                                        <input name="item_name" type="hidden" value="<?php echo $item_name; ?>">
                                        <button class="left" type="submit" name="del_item_submit" style="text-align: left; height: 100%; border:none; background-color:transparent; cursor: pointer;  box-shadow: none; ">
                                            <i style=" color: gray;" class=" material-icons ">delete</i>
                                        </button>
                                    </form>
                                </div>

                            </div>

                            <form action="cart_sys/update_quantity.php" method="post">
                                <input name="item_name" type="hidden" value="<?php echo $item_name; ?>">

                                <div id="<?php echo $item_name; ?>" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                                    <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                                        <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                                            <?php
                                            if ($item_type == "food") {
                                                echo " <div class='col s3 m3 l3' style='
                                                             border-top-left-radius: 15px;
                                                             border-bottom-left-radius: 15px;
                                                             height: 15vh;
                                                             background: url(img/$img) no-repeat 50% 50%  ;
                                                             background-size: cover;
                                                             '></div>";
                                            } else {
                                                echo " <div class='col s3 m3 l3 center-align' style='height: 15vh;border-right:1px solid  #dedede ; padding: 2px;'>
                                              <img src='img/$img' style='height: 14vh;  object-fit: contain;'>
                                          </div>";
                                            }
                                            ?>
                                            <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                                                <?php
                                                $num = str_word_count($item_name);
                                                if ($num <= 2) {
                                                    echo "<p class='para_modal1'>$item_name</p>";
                                                } else {
                                                    echo "<p class='para_modal2'> $item_name</p>";
                                                }
                                                ?>
                                            </div>
                                            <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                                                <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.2vh; font-weight: 300;  ">$ <?php echo $price; ?> </p>

                                            </div>
                                            <div class="col s3 m3 l3 center-align ">
                                                <input id="number" type="number" name="item_quantity" min="1" value="<?php echo $quantity; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer " style="background-color: transparent;">
                                        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3; border-radius: 3px;">Cancle</a>
                                        <button type="submit" name="update_cart_submit" class=" waves-effect waves-light btn " style=" margin-left: 20px; font-weight: bold; border-radius: 3px;background-color: rgb(237, 90, 107); ">Change Quantity</button>
                                    </div>
                                </div>
                            </form>

                        </tr>
                    <?php
                    }
                    ?>

                    </tbody>
        </table>

        <div class="valign-wrapper card-panel  z-depth-0  center-align  " style="   border: 1px solid #dedede; border-radius: 5px; margin-top:5vh; padding: 0px;">

            <div class="col s6 m10 l10 ">
                <p class="sub_total">
                    Subtotal:<span style="color:#ea4e60;">$<?php echo $subtotal; ?></span></p>
            </div>
            <div class="col s6 m2 l2  ">
                <a href="checkout.php" style=" background-color: rgb(237, 90, 107);   font-weight: bold;" class="right waves-effect waves-light btn ">Checkout</a>
            </div>
        </div>
    <?php
                }else{
                    ?>
                    
                    <p style="text-align: center; margin-bottom: 100px;">
                     <a href="menu.php"
                     ><img class="responsive-img" style="height: 60vh;" src="img/empty_cart.svg">
                     </a>
                    </p>
                    <?php
                }
    ?>
    </div>
    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>
</body>

</html>

<script>
    $(document).ready(function() {
        $('.parallax').parallax();
    });
</script>

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .card-panel {
        box-shadow: none;
        border-radius: 10px;
    }

    #number {
        text-align: center;
        border: none;
        width: 70%;
        font-size: 3.5vh;
        color: #727475;
        font-weight: 500;
        margin-top: 3.8vh;

    }

    .para_modal1 {
        text-align: center;
        margin-top: 2.5vw;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }

    .sub_total {
        margin-right: -8px;
        text-align: right;
        font-weight: 700;
        font-size: 3vh;
        color: #585858;
    }

    .para_modal2 {
        text-align: center;
        margin-top: 5vh;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }

    .text {
        color: #a3a3a3;
        font-size: 2.5vh;
        text-align: left;
        font-weight: 600;

    }

    .quant {
        color: #727475;
        font-size: 2.5vh;
        text-align: left;
        font-weight: 600;
        margin-top: 0px;
    }

    .main_sec {
        margin: 30px;
        margin-top: 9vh;
    }


    .header_sec {
        margin: 23px;

    }



    #price {
        text-align: center;
        font-size: 2.5vh;
        color: #727475;
        font-weight: 600;

    }

    #total {
        text-align: center;
        font-size: 2.5vh;
        color: #ea4e60;
        font-weight: 600;

    }

    @media only screen and (max-width: 600px) {
        .sub_total {
            margin-right: -8px;
            text-align: left;
            font-weight: 700;
            font-size: 3vh;
            color: #585858;
        }

        .card-panel {
            border-radius: 10px;
        }

        .para_modal1 {
            text-align: center;
            margin-top: 3.6vh;
            color: #727475;
            font-size: 3vh;
            font-weight: 300;
        }

        .para_modal2 {
            text-align: center;
            margin-top: 1vh;
            color: #727475;
            font-size: 2.3vh;
            font-weight: 300;
        }

        .header_sec {
            margin: 0px;
            margin-bottom: 50px;
        }

        #price {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 2vh;
            margin-top: 8px;
            color: #727475;
            font-weight: 500;
        }

        #total {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 2vh;
            margin-top: 8px;
            color: red;
            font-weight: 500;
        }


        .text {
            color: #727475;
            font-size: 2vh;
            text-align: center;
        }

        .main_sec {
            margin: 6px;
            margin-top: 0px;
        }
    }
</style>