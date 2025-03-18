<div class="row" style="margin: 0px;">
    <p style="text-align: center; color:#a3a3a3; font-size: 4vh; margin: 0px;">Menu</p>
    <hr style="width: 40px;">
</div>
<?php
$show = false;
$sql = "SELECT * FROM menu ";
$result = mysqli_query($con, $sql);
$resultch = mysqli_num_rows($result);
if ($resultch < 1) {
?>

    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <a onclick="add_menu();" href="#">
        <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_alyseq4q.json" background="transparent" speed="1" style="width: 60em; height:70vh;" loop autoplay></lottie-player>
    </a>
<?php
} else {
?>

    <!-- VEG MENU ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <?php
    $show = false;
    $sql = "SELECT * FROM menu WHERE item_type='Veg' order by id desc ";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    ?>
    <div class="row">
        <h1 style="color: #727475;font-size: 3vh; margin-left: 5px;margin-bottom: 0px; margin-top: 20px;">Veg</h1>
    </div>
    <div class="row items_row " style="background: #FFE000;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #799F0C, #FFE000);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #799F0C, #FFE000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 border-radius: 10px;">
        <?php
        $subtotal = 0;
        $show = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $item_name = $row['item_name'];
            $img = $row['item_img'];
            $price = $row['item_price'];

        ?>

            <div class="col s12 m6 l6">
                <div class="valign-wrapper card-panel grey lighten-5 z-depth-3 " style="padding: 0px; border-radius: 10px;">
                    <div class="col s4 m4 l4" style="
                          height: 8em;
                          background: url(img/<?php echo $img; ?>) no-repeat 50% 50%  ;
                          background-size: cover;
                          border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                    </div>
                    <div class="col s5 m5 l5" style=" height: 8em;">
                        <?php
                        $num = str_word_count($item_name);
                        if ($num <= 2) {
                            echo "<p class='para_modal_menu1'>$item_name</p>";
                        } else {
                            echo "<p class='para_modal_menu'> $item_name</p>";
                        }
                        ?>
                        <p style="text-align: left;margin-top: 1vh;  color:#ea4e60;  font-size: 3vh; font-weight: bold;  "><span><?php echo $price; ?><i style="vertical-align: text-top;" class="tiny material-icons">attach_money</i></span></p>

                    </div>
                    <div class="col s3 m3 l3  center-align" style=" display: flex; justify-content: space-between; flex-direction: column; height: 8em; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">

                        <p style="margin: 0px;"><a href="#<?php echo $row['id'] ?>" style="margin:0.5em; background-color: #1c1c1c;" type="submit" class="modal-trigger z-depth-0 btn-floating btn waves-effect waves-light " name="del_item_submit">
                                <i style=" color: white;" class=" material-icons ">edit</i>

                            </a>
                        </p>
                        <form action="admin/del_menu_item.php" method="POST">
                            <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                            <button style="margin: 0.5em; background-color: #ea4e60;" type="submit" class="z-depth-0 btn-floating btn waves-effect waves-light  " name="del_menu_item_submit">
                                <i style=" color: white;" class=" material-icons ">delete</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <form action="admin/update_menu_item.php" method="post" enctype="multipart/form-data">
                <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                <div id="<?php echo $row['id'] ?>" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px);">
                    <div class="modal-content" style="margin-top:2px; background-color:transparent; padding: 5px; ">
                        <div class="row z-depth-2" style="margin: 2px ; border-radius: 15px; background-color:rgba(255,255,255,0.5);  margin-bottom: 0px;">

                            <div class="col s8 m6 l6" style="border-right:1px solid #dedede ;">
                                <div class="col m2 l2"></div>
                                <div class="col s12 m10 l10">
                                    <div class="file-field input-field">
                                        <div class="btn-small waves-effect waves-light" style=" background-color: #1c1c1c;">
                                            <span>Upload</span>
                                            <input type="file" name="image">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input style="text-align: center; width: 100%; border-bottom: 1px solid #dedede; font-size: 2vh;" placeholder="Update Img" class="file-path validate" type="text">
                                        </div>
                                    </div>
                                    <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Image</p>

                                </div>
                            </div>
                            <div class="col s4 m6 l6 center-align ">
                                <input id="number_menu" type="number" name="item_price" min="1" value="<?php echo $price; ?>">
                                <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Price</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer " style="background-color: transparent;">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                        <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="update_menu_submit" class=" waves-effect waves-light btn ">UPdate </button>
                    </div>
                </div>
            </form>


        <?php
        }
        ?>
    </div>


    <!-- +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <!-- Non-Veg -->
    <?php
    $show = false;
    $sql = "SELECT * FROM menu WHERE item_type='Non_Veg' order by id desc ";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    ?>
    <div class="row">
        <h1 style="color: #727475;font-size: 3vh;margin-left: 5px; margin-bottom: 0px; margin-top: 20px;">Non-Veg </h1>
    </div>
    <div class="row items_row" style="background: #DA4453;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #89216B, #DA4453);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #89216B, #DA4453); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
 border-radius: 10px;">
        <?php
        $subtotal = 0;
        $show = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $item_name = $row['item_name'];
            $img = $row['item_img'];
            $price = $row['item_price'];

        ?>

            <div class="col s12 m6 l6">
                <div class="valign-wrapper card-panel grey lighten-5 z-depth-3 " style="padding: 0px; border-radius: 10px;">
                    <div class="col s4 m4 l4" style="
                          height: 8em;
                          background: url(img/<?php echo $img; ?>) no-repeat 50% 50%  ;
                          background-size: cover;
                          border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                    </div>
                    <div class="col s5 m5 l5" style=" height: 8em;">
                        <?php
                        $num = str_word_count($item_name);
                        if ($num <= 2) {
                            echo "<p class='para_modal_menu1'>$item_name</p>";
                        } else {
                            echo "<p class='para_modal_menu'> $item_name</p>";
                        }
                        ?>
                        <p style="text-align: left;margin-top: 1vh;  color:#ea4e60;  font-size: 3vh; font-weight: bold;  "><span><?php echo $price; ?><i style="vertical-align: text-top;" class="tiny material-icons">attach_money</i></span></p>

                    </div>
                    <div class="col s3 m3 l3  center-align" style=" display: flex; justify-content: space-between; flex-direction: column; height: 8em; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">

                        <p style="margin: 0px;"><a href="#<?php echo $row['id'] ?>" style="margin:0.5em; background-color: #1c1c1c;" type="submit" class="modal-trigger z-depth-0 btn-floating btn waves-effect waves-light " name="del_item_submit">
                                <i style=" color: white;" class=" material-icons ">edit</i>

                            </a>
                        </p>
                        <form action="admin/del_menu_item.php" method="POST">
                            <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                            <button style="margin: 0.5em; background-color: #ea4e60;" type="submit" class="z-depth-0 btn-floating btn waves-effect waves-light  " name="del_menu_item_submit">
                                <i style=" color: white;" class=" material-icons ">delete</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <form action="admin/update_menu_item.php" method="post" enctype="multipart/form-data">
                <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                <div id="<?php echo $row['id'] ?>" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px);">
                    <div class="modal-content" style="margin-top:2px; background-color:transparent; padding: 5px; ">
                        <div class="row z-depth-2" style="margin: 2px ; border-radius: 15px; background-color:rgba(255,255,255,0.5);  margin-bottom: 0px;">

                            <div class="col s8 m6 l6" style="border-right:1px solid #dedede ;">
                                <div class="col m2 l2"></div>
                                <div class="col s12 m10 l10">
                                    <div class="file-field input-field">
                                        <div class="btn-small waves-effect waves-light" style=" background-color: #1c1c1c;">
                                            <span>Upload</span>
                                            <input type="file" name="image">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input style="text-align: center; width: 100%; border-bottom: 1px solid #dedede; font-size: 2vh;" placeholder="Update Img" class="file-path validate" type="text">
                                        </div>
                                    </div>
                                    <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Image</p>

                                </div>
                            </div>
                            <div class="col s4 m6 l6 center-align ">
                                <input id="number_menu" type="number" name="item_price" min="1" value="<?php echo $price; ?>">
                                <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Price</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer " style="background-color: transparent;">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                        <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="update_menu_submit" class=" waves-effect waves-light btn ">UPdate </button>
                    </div>
                </div>
            </form>


        <?php
        }
        ?>
    </div>

    <!---=========================================================================================================== -->
    <!-- Continatel -->
    <?php
    $show = false;
    $sql = "SELECT * FROM menu WHERE item_type='Continatel' order by id desc ";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    ?>
    <div class="row">
        <h1 style="color: #727475;font-size: 3vh; margin-left: 5px; margin-bottom: 0px; margin-top: 20px;">Continatel</h1>
    </div>
    <div class="row  items_row" style=" background-color: #FAD961;
background-image: linear-gradient(180deg, #FAD961 0%, #ffbc3d 99%);
 border-radius: 10px;">
        <?php
        $subtotal = 0;
        $show = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $item_name = $row['item_name'];
            $img = $row['item_img'];
            $price = $row['item_price'];

        ?>

            <div class="col s12 m6 l6">
                <div class="valign-wrapper card-panel grey lighten-5 z-depth-3 " style="padding: 0px; border-radius: 10px;">
                    <div class="col s4 m4 l4" style="
                          height: 8em;
                          background: url(img/<?php echo $img; ?>) no-repeat 50% 50%  ;
                          background-size: cover;
                          border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                    </div>
                    <div class="col s5 m5 l5" style=" height: 8em;">
                        <?php
                        $num = str_word_count($item_name);
                        if ($num <= 2) {
                            echo "<p class='para_modal_menu1'>$item_name</p>";
                        } else {
                            echo "<p class='para_modal_menu'> $item_name</p>";
                        }
                        ?>
                        <p style="text-align: left;margin-top: 1vh;  color:#ea4e60;  font-size: 3vh; font-weight: bold;  "><span><?php echo $price; ?><i style="vertical-align: text-top;" class="tiny material-icons">attach_money</i></span></p>

                    </div>
                    <div class="col s3 m3 l3  center-align" style=" display: flex; justify-content: space-between; flex-direction: column; height: 8em; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">

                        <p style="margin: 0px;"><a href="#<?php echo $row['id'] ?>" style="margin:0.5em; background-color: #1c1c1c;" type="submit" class="modal-trigger z-depth-0 btn-floating btn waves-effect waves-light " name="del_item_submit">
                                <i style=" color: white;" class=" material-icons ">edit</i>

                            </a>
                        </p>
                        <form action="admin/del_menu_item.php" method="POST">
                            <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                            <button style="margin: 0.5em; background-color: #ea4e60;" type="submit" class="z-depth-0 btn-floating btn waves-effect waves-light  " name="del_menu_item_submit">
                                <i style=" color: white;" class=" material-icons ">delete</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <form action="admin/update_menu_item.php" method="post" enctype="multipart/form-data">
                <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                <div id="<?php echo $row['id'] ?>" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px);">
                    <div class="modal-content" style="margin-top:2px; background-color:transparent; padding: 5px; ">
                        <div class="row z-depth-2" style="margin: 2px ; border-radius: 15px; background-color:rgba(255,255,255,0.5);  margin-bottom: 0px;">

                            <div class="col s8 m6 l6" style="border-right:1px solid #dedede ;">
                                <div class="col m2 l2"></div>
                                <div class="col s12 m10 l10">
                                    <div class="file-field input-field">
                                        <div class="btn-small waves-effect waves-light" style=" background-color: #1c1c1c;">
                                            <span>Upload</span>
                                            <input type="file" name="image">
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input style="text-align: center; width: 100%; border-bottom: 1px solid #dedede; font-size: 2vh;" placeholder="Update Img" class="file-path validate" type="text">
                                        </div>
                                    </div>
                                    <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Image</p>

                                </div>
                            </div>
                            <div class="col s4 m6 l6 center-align ">
                                <input id="number_menu" type="number" name="item_price" min="1" value="<?php echo $price; ?>">
                                <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Price</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer " style="background-color: transparent;">
                        <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                        <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="update_menu_submit" class=" waves-effect waves-light btn ">UPdate </button>
                    </div>
                </div>
            </form>


        <?php
        }
        ?>
    </div>



    <!---=========================================================================================================== -->
    <!-- Other -->
    <?php
    $show = false;
    $sql = "SELECT * FROM menu order by id desc ";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    ?>
    <div class="row">
        <h1 style="color: #727475;font-size: 3vh; margin-left: 5px; margin-bottom: 0px; margin-top: 20px;">Other</h1>
    </div>
    <div class="row  items_row" style="background-color: #FA8BFF;
background-image: linear-gradient(45deg, #FA8BFF 0%, #2BD2FF 52%, #2BFF88 90%);
 border-radius: 10px;">
        <?php
        $subtotal = 0;
        $show = true;
        while ($row = mysqli_fetch_assoc($result)) {
            $item_name = $row['item_name'];
            $img = $row['item_img'];
            $price = $row['item_price'];
            $item_type = $row['item_type'];
            $check = false;
            if ($item_type == 'Veg') {
                continue;
            } 
            if ($item_type == 'Non_Veg') {
                continue;
            }
            if ($item_type == 'Continatel') {
                continue;
            } 


         


        ?>

                <div class="col s12 m6 l6">
                    <div class="valign-wrapper card-panel grey lighten-5 z-depth-3 " style="padding: 0px; border-radius: 10px;">
                        <div class="col s4 m4 l4" style="
                          height: 8em;
                          background: url(img/<?php echo $img; ?>) no-repeat 50% 50%  ;
                          background-size: cover;
                          border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                        </div>
                        <div class="col s5 m5 l5" style=" height: 8em;">
                            <?php
                            $num = str_word_count($item_name);
                            if ($num <= 2) {
                                echo "<p class='para_modal_menu1'>$item_name</p>";
                            } else {
                                echo "<p class='para_modal_menu'> $item_name</p>";
                            }
                            ?>
                            <p style="text-align: left;margin-top: 1vh;  color:#ea4e60;  font-size: 3vh; font-weight: bold;  "><span><?php echo $price; ?><i style="vertical-align: text-top;" class="tiny material-icons">attach_money</i></span></p>

                        </div>
                        <div class="col s3 m3 l3  center-align" style=" display: flex; justify-content: space-between; flex-direction: column; height: 8em; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">

                            <p style="margin: 0px;"><a href="#<?php echo $row['id'] ?>" style="margin:0.5em; background-color: #1c1c1c;" type="submit" class="modal-trigger z-depth-0 btn-floating btn waves-effect waves-light " name="del_item_submit">
                                    <i style=" color: white;" class=" material-icons ">edit</i>

                                </a>
                            </p>
                            <form action="admin/del_menu_item.php" method="POST">
                                <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                                <button style="margin: 0.5em; background-color: #ea4e60;" type="submit" class="z-depth-0 btn-floating btn waves-effect waves-light  " name="del_menu_item_submit">
                                    <i style=" color: white;" class=" material-icons ">delete</i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <form action="admin/update_menu_item.php" method="post" enctype="multipart/form-data">
                    <input name="item_id" type="hidden" value="<?php echo $row['id']; ?>">
                    <div id="<?php echo $row['id'] ?>" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px);">
                        <div class="modal-content" style="margin-top:2px; background-color:transparent; padding: 5px; ">
                            <div class="row z-depth-2" style="margin: 2px ; border-radius: 15px; background-color:rgba(255,255,255,0.5);  margin-bottom: 0px;">

                                <div class="col s8 m6 l6" style="border-right:1px solid #dedede ;">
                                    <div class="col m2 l2"></div>
                                    <div class="col s12 m10 l10">
                                        <div class="file-field input-field">
                                            <div class="btn-small waves-effect waves-light" style=" background-color: #1c1c1c;">
                                                <span>Upload</span>
                                                <input type="file" name="image">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input style="text-align: center; width: 100%; border-bottom: 1px solid #dedede; font-size: 2vh;" placeholder="Update Img" class="file-path validate" type="text">
                                            </div>
                                        </div>
                                        <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Image</p>

                                    </div>
                                </div>
                                <div class="col s4 m6 l6 center-align ">
                                    <input id="number_menu" type="number" name="item_price" min="1" value="<?php echo $price; ?>">
                                    <p style="text-align: center;  font-size: 2vh; font-weight: bold;">Update Price</p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer " style="background-color: transparent;">
                            <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                            <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="update_menu_submit" class=" waves-effect waves-light btn ">UPdate </button>
                        </div>
                    </div>
                </form>


        <?php
            
        }
        ?>
    </div>
<?php

}
?>

<script>
    $(document).ready(function() {
        $('.modal').modal();
    });
</script>
<style>
    .items_row {
        padding: 5px;
    }

    #number_menu {
        text-align: center;
        border-bottom: 1px solid #dedede;
        width: 100%;
        font-size: 3.5vh;
        color: #ea4e60;
        font-weight: 500;
        margin-top: 0.7em;

    }

    .para_modal_menu1 {
        color: #727475;
        font-size: 2.7vh;
        margin-bottom: 0px;
        font-weight: 300;
        margin-top: 4vh;
    }

    .para_modal_menu {
        color: #727475;
        font-size: 2.7vh;
        margin-bottom: 0px;
        font-weight: 300;
        margin-top: 2vh;
    }

    @media only screen and (max-width: 600px) {
        .items_row {
            padding: 0px;
        }

        .para_modal_menu1 {
            color: #727475;
            font-size: 2.7vh;
            margin-bottom: 0px;
            font-weight: 300;
            margin-top: 4vh;
        }

        .para_modal_menu {
            text-align: left;
            margin-top: 1vh;
            color: #727475;
            font-size: 2.3vh;
            font-weight: 300;
        }
    }
</style>