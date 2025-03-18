<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
</head>

<body>
    <?php
    $orders = 0;
    $total_rev = 0;
    $admin_id = $_SESSION['admin_id'];
    $sql = "SELECT * FROM orders ";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    if (!$resultch < 1) {

        while ($row = mysqli_fetch_assoc($result)) {
            if ($row['item_status'] == 'completed') {
                $orders++;
                $i = $row['item_price'] * $row['item_quantity'];
                $total_rev = $total_rev + $i;
            }
        }
    }
    $sql = "UPDATE restaurant1 SET orders_completed='$orders', profit='$total_rev' WHERE admin_id=$admin_id;";
    mysqli_query($con, $sql);

    $sql = "SELECT * FROM restaurant1 WHERE admin_id=$admin_id; ";
    $result = mysqli_query($con, $sql);
    $resultch = mysqli_num_rows($result);
    if (!$resultch < 1) {
        $orders = 0;
        $total_rev = 0;
        $row = mysqli_fetch_assoc($result);
        $orders_completed = $row['orders_completed'];
        $revenue = $row['profit'];
    }
    ?>
    <!-- main section -->
    <div class="row main_sec">
        <div class="col s12 m4 l4" style="padding-top: 0px;">
            <div class="card z-depth-3 " style="border-radius: 8px;">
                <div class="card-content white-text">
                    <div class="row" style="margin-bottom: 0px;">
                        <div class="col s6 m6 l6 " style=" margin-top: -4em;">
                            <div class="card" style="  height: 7em;      background: linear-gradient(60deg, #ffa726, #fb8c00); box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); border-radius: 5px;">
                                <div class="card-image cneter-align">
                                    <p style="text-align: center;">
                                        <i style="padding: 20px;margin-top: 0.2em;margin-bottom: 0.2em; color: white;" class="fas fa-tachometer-alt fa-3x"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m6 l6" style="margin-top: 0px">
                            <p style="font-size:0.8em; color:#999999;text-align: right; margin-top: -0.5em">Orders Completed</p>
                            <h1 style="font-size:2em; font-weight: lighter; color:#3C4858;text-align: right; margin-top: 5px;">
                                <?php echo $orders_completed; ?></h1>
                        </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <p style="color: #a3a3a3;margin-top: 1em;">Just Updated </p>

                </div>
            </div>
            <div class="card z-depth-3 " style="margin-top: 3em;border-radius: 8px;">
                <div class="card-content white-text">
                    <div class="row" style="margin-bottom: 0px;">
                        <div class="col s6 m6 l6 " style=" margin-top: -4em;">
                            <div class="card" style="  height: 7em;  background: linear-gradient(60deg, #66bb6a, #43a047);    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); border-radius: 5px;">
                                <div class="card-image cneter-align">
                                    <p style="text-align: center;">
                                        <i style="padding: 20px;margin-top: 0.2em;margin-bottom: 0.2em; color: white;" class="fas fa-funnel-dollar fa-3x"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col s6 m6 l6" style="margin-top: 0px">
                            <p style="font-size:0.8em; color:#999999;text-align: right; margin-top: -0.5em">Revenue</p>
                            <h1 style="font-size:2em; font-weight: lighter; color:#3C4858;text-align: right; margin-top: 5px;">
                                <?php echo "$" . $revenue; ?></h1>
                        </div>
                    </div>
                    <hr style="margin-top: 0px;">
                    <p style="color: #a3a3a3;margin-top: 1em;">Till Now Total</p>

                </div>
            </div>
        </div>
        <div class="col s12 m8 l8">
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

                <div class="col s3  m1 l1 " style=" height: 9vh;  ">

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

                    $sql = "SELECT * FROM orders   order by id desc ";
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
                                            echo "<a class='status'><i style='color:#ea4e60;'  class=' fas fa-circle'> Pending</i></a>";
                                        }

                                        if ($item_status == 'completed') {
                                            echo "<a class='status'  ><i style='color:#648813;'  class=' fas fa-circle'> Completed</i></a>";
                                        }
                                        ?>

                                    </div>

                                    <div class="col s3  m1 l1 waves-effect   waves-red " style=" height: 9vh;  ">
                                        <form action="admin/assign_order.php" method="get">
                                            <input name="item_id" type="hidden" value="">
                                            <a href="#<?php echo "assign" . $row['id'] ?>" data-position='top' data-tooltip='Assign Order' class="valign-wrapper tooltipped modal-trigger" name="assign_order_submit" style="text-align: left; height: 100%; border:none; background-color:transparent; cursor: pointer;  box-shadow: none; ">
                                                <i style="margin-left: 0px; color: #3C4858;" class="left material-icons">assignment_ind</i>
                                            </a>
                                        </form>
                                    </div>

                                </div>


                                <!-- Modal Structure -->
                                <div id="<?php echo "assign" . $row['id'] ?>" class="modal" style="width: 100vw !important;">
                                    <div class="modal-content">
                                        <div class="row">
                                            <p style=" text-align: center;color: #3C4858; font-size: 2vh; font-weight: bold;">CHEFS</p>
                                            <hr style="width: 100px;">
                                        </div>
                                        <div class="row" style="border: 1px solid #dedede;  border-radius: 8px;">

                                            <div class="col s4 m4 l4">
                                                <p style=" text-align: center;color: #3C4858; font-size: 2.5vh; font-weight: bold;">Name</p>
                                            </div>
                                            <div class="col s4 m4 l4">
                                                <p style="text-align: center; color: #3C4858; font-size: 2.5vh; font-weight: bold;">Spaciality</p>
                                            </div>
                                            <div class="col s4 m4 l4">
                                                <p style="text-align: center; color: #3C4858; font-size: 2.5vh; font-weight: bold;">Assign</p>
                                            </div>
                                        </div>
                                        <?php
                                        $sql1 = "SELECT * FROM chefs  ";
                                        $result1 = mysqli_query($con, $sql1);
                                        $resultch1 = mysqli_num_rows($result1);
                                        if ($resultch1 < 1) {
                                        ?>

                                            <p style="text-align: center;">
                                                No Chef Yet
                                            </p>
                                            <?php
                                        } else {
                                            while ($row1 = mysqli_fetch_assoc($result1)) {
                                            ?>


                                                <form action="admin/assign_order.php" method="get">
                                                    <input type="hidden" name="order_id" value="<?php echo  $row['id']; ?>">
                                                    <input type="hidden" name="chef_id" value="<?php echo  $row1['id']; ?>">
                                                    <div class="row" style="border: 1px solid #dedede;  border-radius: 8px;">
                                                        <div class="col s4 m4 l4">
                                                            <p style="font-size: 2vh; color: #999999; margin-top: 3vh; text-align: center;"><?php echo $row1['name']; ?></p>
                                                        </div>
                                                        <div class="col s4 m4 l4">
                                                            <p style="font-size: 2vh; color: #999999; margin-top: 3vh; text-align: center;"><?php echo $row1['speciality']; ?></p>
                                                        </div>
                                                        <div class="col s4 m4 l4 center-align">
                                                            <p><button class="btn-floating btn waves-effect waves-light white" type="submit" name="assign_to_chef">
                                                                    <i style=" color: #3C4858;" class="left material-icons">assignment_turned_in
                                                                    </i>
                                                                </button></p>
                                                        </div>
                                                    </div>
                                                </form>
                                        <?php
                                            }
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

    .status {
        text-align: center;
        font-size: 2vh;
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

        .status {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 1.5vh;
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