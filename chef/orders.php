<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
</head>

<body>
    <?php
    if(isset($_SESSION['chef_id'])){
        $chef_id=$_SESSION['chef_id'];
    }else{
        $Err = "Invalid Login";
        header("Location:../chef_log.php?error=$Err");
    }
    $restaurant_name = $_SESSION['res_name'];
    $sql = "SELECT * FROM orders WHERE chef=$chef_id";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    if (!$resultch < 1) {
        $orders = 0;
        $total_rev = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['item_status'] == 'completed') {
                $orders++;
                $i = $row['item_price'] * $row['item_quantity'];
                $total_rev = $total_rev + $i;
            }
        }
    }
   
    ?>
    <!-- main section -->
    <div class="row main_sec">

        <div class="col s12 m12 l12">
            <div class="valign-wrapper card-panel  z-depth-1  " style=" border-radius: 10px; border: 1px solid #dedede; margin-top: 0px; padding: 0px;">

                <div class=" col s5 m4 l4 ">
                    <p class="text" style="color: #585858;">Item Name</p>
                </div>
                <div class="col s2  m2 l2 center-align">
                    <p style="text-align: center; color: #585858;" class="text">Table No.</p>
                </div>

                <div class="col s2  m2 l2 center-align">
                    <p style="text-align: center;color: #585858;" class="text">Quantity</p>
                </div>
                <div class="col s2  m2 l2 center-align">
                    <p style="text-align: center;color:#585858;" class="text">Status</p>
                </div>

            </div>

            <table>
                <tbody">
                    <?php
                    $show = false;
                    date_default_timezone_set('Asia/Kolkata');
                    $today_date =date('Y-m-d');
                    $yesterday=date('Y.m.d',strtotime("-1 days"));
                    $one_day_before_yes=date('Y.m.d',strtotime("-2 days"));
                    
                    $sql = "SELECT * FROM orders  WHERE chef=$chef_id order by id desc ";
                    $result = mysqli_query($con, $sql);
                    $resultch = mysqli_num_rows($result);
                    if ($resultch < 1) {
                    ?>

                        <p style="text-align: center;">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_Cpzev8.json" background="transparent" speed="0.7" style=" height:50vh;" loop autoplay></lottie-player>
                        </p>
                        <?php
                    } else {
                        $subtotal = 0;
                        $show = true;
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                         <?php
                            if ($row['item_status'] == 'pending' && $row['timestamp_'] == $today_date) {
                            ?>
                                <div class="row" style="margin-bottom: 0px;">
                                    <span class='left new badge red'></span>
                                </div>
                            <?php
                            }
                            if ($row['item_status'] == 'completed' && $row['timestamp_'] != $today_date && $row['timestamp_'] != $yesterday && $row['timestamp_'] != $one_day_before_yes   ) {
                                $id=$row['id'];
                                $sql3 = "DELETE FROM orders WHERE id=$id";
                                mysqli_query($con, $sql3);
                            }
                            ?>
                            <tr>
                                <?php
                                $item_name = $row['item_name'];
                                $id = $row['id'];
                                $table_no = $row['table_no'];
                                $quantity = $row['item_quantity'];
                                $item_status = $row['item_status'];
                                ?>


                                <div class="valign-wrapper card-panel hoverable  " style="border: 1px solid #dedede; padding: 0px;">
                                    <div class=" col s5 m4 l4 ">
                                        <p class=" text">
                                            <a class="text"> <?php echo $item_name; ?></a>
                                        </p>
                                    </div>
                                    <div class="col s2  m2 l2 center-align">

                                        <p id="price"><?php echo $table_no; ?></p>

                                    </div>

                                    <div class="col s2  m2 l2 center-align">

                                        <a class="text   waves-effect waves-light ">
                                            <?php echo  $quantity ?>
                                            <hr style="width: 10px; margin-top:0px; margin-bottom: 0px;">
                                        </a>

                                    </div>
                                    <div class="col s2  m2 l2 center-align">
                                        <?php
                                        if ($item_status == 'pending') {
                                            echo "<a href='chef/change_order_status.php?order_status=$id'   data-target='$id'  class='dropdown-trigger status'><i style='color:#ea4e60;'  class=' fas fa-circle'></i> Pending</a>";
                                        }
                                       
                                        if ($item_status == 'completed') {
                                            echo "<a href='chef/change_order_status.php?order_status=$id'  data-target='$id'  class='dropdown-trigger status'><i style='color:#648813;'  class=' fas fa-circle'></i> Completed</a>";
                                        }
                                        ?>

                                    </div>
                                   
                                    

                                </div>



                            </tr>

                    <?php
                        }
                    }
                    ?>

                    </tbody>
            </table>
        </div>
    </div>
    <?php
    include_once 'partial/scripts.php';
    ?>
</body>

</html>


<script>
    $(document).ready(function() {
        $('.parallax').parallax();
        $('.tooltipped').tooltip();
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
    .status {
        text-align: center;
        font-size: 2vh;
        color: #727475;
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
        .status {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 1.5vh;
            margin-top: 8px;
            color: #727475;
            font-weight: 500;
        }
    }
</style>