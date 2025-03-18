<div class="row center-align">
    <p style="color:#a3a3a3; font-size: 3vh;margin-bottom: 0px; ">Menu</p>
    <hr style="width: 20px; margin-top: 0px;">


    <?php
    $show = false;
    $sql = "SELECT * FROM menu  order by id desc ";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    $subtotal = 0;
    $show = true;
    while ($row = mysqli_fetch_assoc($result)) {
        $item_name = $row['item_name'];
        $img = $row['item_img'];
        $price = $row['item_price'];
        $id = $row['id'];


    ?>

        <div class="col s12 m4 l4">
            <div class="valign-wrapper card-panel grey lighten-5 z-depth-3 " style="padding: 0px; border-radius: 10px;">
                <div class="col s5 m5 l5" style="
                          height: 17vh;
                          background: url(img/<?php echo $img; ?>) no-repeat 50% 50%  ;
                          background-size: cover;
                          border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                </div>
                <div class="col s8 m12 l12">
                    <p style="color: #727475; font-size: 2.7vh; font-weight: 300; margin-top: 0px;"><?php echo $item_name; ?></p>
                    <?php
                    if ($row['item_type'] == 'Veg') {
                    ?>
                        <a class="waves-effect waves-light  modal-trigger" href="#<?php echo $id . "m"; ?>" style=" padding: 0px;  border: none; background-color: transparent; box-shadow: none;"><span style="background-color: #648813;  color:#f6f6f6; padding:2px;">order now</span></a>
                    <?php
                    } elseif ($row['item_type'] == 'Non_Veg') {
                    ?>
                        <a class="waves-effect waves-light  modal-trigger" href="#<?php echo $id . "m"; ?>" style=" padding: 0px;  border: none; background-color: transparent; box-shadow: none;"><span style="background-color: #B22222;  color:#f6f6f6; padding:2px;">order now</span></a>
                    <?php
                    } elseif ($row['item_type'] == 'Continatel') {
                    ?>
                        <a class="waves-effect waves-light  modal-trigger" href="#<?php echo $id . "m"; ?>" style=" padding: 0px;  border: none; background-color: transparent; box-shadow: none;"><span style="background-color: #ffb80e;  color:#f6f6f6; padding:2px;">order now</span></a>
                    <?php
                    } else {
                        ?>
                            <a class="waves-effect waves-light  modal-trigger" href="#<?php echo $id . "m"; ?>" style=" padding: 0px;  border: none; background-color: transparent; box-shadow: none;"><span style="background-color:gray;  color:#f6f6f6; padding:2px;">order now</span></a>
                        <?php
                        }

                    ?>

                </div>
                <!-- ====================== -->

                <?php
                if ($row['item_type'] == 'Veg') {
                ?>

                    <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#648813; height: 17vh; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                        <p style="color: #f6f6f6; font-size: 3vh; margin-top: 10px;">$<br><span style="font-size: 6vh;"><?php echo $price; ?></span></p>
                    </div>
                <?php
                }
                elseif ($row['item_type'] == 'Non_Veg') {
                ?>
                    <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#B22222; height: 17vh; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                        <p style="color: #f6f6f6; font-size: 3vh; margin-top: 10px;">$<br><span style="font-size: 6vh;"><?php echo $price; ?></span></p>
                    </div>
                <?php
                }
                elseif ($row['item_type'] == 'Continatel') {
                ?>
                    <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#ffb80e; height: 17vh; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                        <p style="color: #f6f6f6; font-size: 3vh; margin-top: 10px;">$<br><span style="font-size: 6vh;"><?php echo $price; ?></span></p>
                    </div>
                <?php
                }else{
                    ?>
                        <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:gray; height: 17vh; border-bottom-right-radius: 10px; border-top-right-radius: 10px;">
                            <p style="color: #f6f6f6; font-size: 3vh; margin-top: 10px;">$<br><span style="font-size: 6vh;"><?php echo $price; ?></span></p>
                        </div>
                    <?php
                    }
                ?>


            </div>
        </div>
        <!-- Modal Structure -->
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value="<?php echo $item_name; ?>">
            <input name="item_price" type="hidden" value="<?php echo $price; ?>">
            <input name="item_img" type="hidden" value="<?php echo $img; ?>">
            <input name="item_type" type="hidden" value="<?php echo $row['item_category']; ?>">

            <div id="<?php echo $id . "m"; ?>" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px; background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px; margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3" style="
                      border-top-left-radius: 15px;
                       border-bottom-left-radius: 15px;
                          height: 15vh;
                          background: url(img/<?php echo $img; ?>) no-repeat 50% 50%  ;
                          background-size: cover;
                         "></div>
                        <div class="col s4 m3 l3 " style="border-right:1px solid  #dedede ; height: 15vh;">
                            <?php
                            $num = str_word_count($item_name);
                            if ($num <= 2) {
                                echo "<p class='para_modal1'>$item_name</p>";
                            } else {
                                echo "<p class='para_modal2'> $item_name</p>";
                            }
                            ?>
                        </div>
                        <div class="col s2 m3 l3" style=" border-right:1px solid  #dedede ; height: 15vh;">
                            <p style="text-align: center; margin-top:5vh; color: #727475; font-size: 3.5vh; font-weight: 300;  ">$<?php echo $price; ?></p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>
    <?php
    }
    ?>
    <!-- ============================================================================================================================== -->


</div>

<style>
    #number {
        text-align: center;
        border-bottom: none;
        width: 50%;
        font-size: 3.6vh;
        color: #727475;
        font-weight: 500;
        margin-top: 3.8vh;

    }

    .para_modal1 {
        text-align: center;
        color: #727475;
        font-size: 3.5vh;
        margin-bottom: 0px;
        font-weight: 300;
        margin-top: 5vh;
    }

    .para_modal2 {
        text-align: center;
        color: #727475;
        font-size: 3vh;
        margin-bottom: 0px;
        font-weight: 300;
        margin-top: 4vh;
    }

    @media only screen and (max-width: 600px) {


        .para_modal1 {
            text-align: center;
            color: #727475;
            font-size: 2.7vh;
            margin-bottom: 0px;
            font-weight: 300;
            margin-top: 4vh;
        }

        .para_modal2 {
            text-align: center;
            margin-top: 3vh;
            color: #727475;
            font-size: 2.4vh;
            font-weight: 300;
        }
    }
</style>