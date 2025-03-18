<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
</head>

<body>
    <?php
    if (isset($_SESSION['chef_id'])) {
        $chef_id = $_SESSION['chef_id'];
    }
    $restaurant_name = $_SESSION['res_name'];
    $orders_completed = 0;
    $pending = 0;
    $revenue = 0;
    $sql1 = "SELECT * FROM orders  WHERE chef=$chef_id ";
    $result1 = mysqli_query($con, $sql1);
    $resultch1 = mysqli_num_rows($result1);
    if (!$resultch1 < 1) {

        while ($row1 = mysqli_fetch_assoc($result1)) {
            if ($row1['item_status'] == 'completed') {
                $orders_completed++;
                $i = $row1['item_price'] * $row1['item_quantity'];
                $revenue = $revenue + $i;
            }
            if ($row1['item_status'] == 'pending') {
                $pending++;
            }
        }
    }
    $noti = 0;
    $sql1 = "SELECT * FROM notifications WHERE n_for=$chef_id  order by id desc ";
    $result1 = mysqli_query($con, $sql1);
    $resultch1 = mysqli_num_rows($result1);
    if (!$resultch1 < 1) {

        while ($row1 = mysqli_fetch_assoc($result1)) {
            $noti++;
        }
    }

    ?>
    <!-- main section -->
    <div class="row main_sec">

        <div class="col s12 m12 l12">
            <div class="col s12 m4 l4">
            <a onclick="orders();" href="#orders">
                <div class="card z-depth-3 cards " style="border-radius: 8px;">
                    <div class="card-content white-text">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s6 m6 l6 " style=" margin-top: -4em;">
                                <div class="card" style="  height: 7em; background: linear-gradient(60deg, #66bb6a, #43a047);    box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);    border-radius: 5px;">
                                    <div class="card-image cneter-align">
                                        <p style="text-align: center;">
                                            <i style="padding: 20px;margin-top: 0.2em;margin-bottom: 0.2em; color: white;" class="fas fa-check-circle fa-3x"></i>
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
                        <p style="color: #a3a3a3;margin-top: 1em;">Orders Completed Till Now</p>

                    </div>
                </div>
            </a>
            </div>
            <div class="col s12 m4 l4">
            <a onclick="orders();" href="#orders">
                <div class="card z-depth-3 cards " style="border-radius: 8px;">
                    <div class="card-content white-text">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s6 m6 l6 " style=" margin-top: -4em;">
                                <div class="card" style="  height: 7em;   background: linear-gradient(60deg, #ef5350, #e53935);
                             box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4); border-radius: 5px;">
                                    <div class="card-image cneter-align">
                                        <p style="text-align: center;">
                                            <i style="padding: 20px;margin-top: 0.2em;margin-bottom: 0.2em; color: white;" class="fas fa-exclamation-circle fa-3x"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s6 m6 l6" style="margin-top: 0px">
                                <p style="font-size:0.8em; color:#999999;text-align: right; margin-top: -0.5em">Orders Pending</p>
                                <h1 style="font-size:2em; font-weight: lighter; color:#3C4858;text-align: right; margin-top: 5px;">
                                    <?php echo $pending; ?></h1>
                            </div>
                        </div>
                        <hr style="margin-top: 0px;">
                        <p style="color: #a3a3a3;margin-top: 1em;">Orders Pending Till Now</p>

                    </div>
                </div>
            </a>
            </div>
            <div class="col s12 m4 l4 card1">
            <a onclick="noti();" href="#orders">
                <div class="card z-depth-3 cards " style=" border-radius: 8px;">
                    <div class="card-content white-text">
                        <div class="row" style="margin-bottom: 0px;">
                            <div class="col s6 m6   l6 " style=" margin-top: -4em;">
                                <div class="card" style="  height: 7em;   background: linear-gradient(60deg, #ffa726, #fb8c00);
                             box-shadow:0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4); border-radius: 5px;">
                                    <div class="card-image cneter-align">
                                        <p style="text-align: center;">
                                            <i style="padding: 20px;margin-top: 0.2em;margin-bottom: 0.2em; color: white;" class="fas fa-bell fa-3x"></i>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s6 m6 l6" style="margin-top: 0px">
                                <p style="font-size:0.8em; color:#999999;text-align: right; margin-top: -0.5em">Notifications</p>
                                <h1 style="font-size:2em; font-weight: lighter; color:#3C4858;text-align: right; margin-top: 5px;">
                                    <?php echo $noti; ?></h1>
                            </div>
                        </div>
                        <hr style="margin-top: 0px;">
                        <p style="color: #a3a3a3;margin-top: 1em;">Just Updated</p>

                    </div>
                </div>
            </a>
            </div>
            <div class="col s12 m12 l12">
                <?php
                // include_once 'notifications.php';
                ?>
            </div>
        </div>
        <div class="col s12 m12 l12 ">

            <div class="col s12 m8 l8">
                <?php
                if (isset($_SESSION['chef_id'])) {
                    $chef_id = $_SESSION['chef_id'];
                } else {
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
                                                        echo "<a href='chef/change_order_status.php?order_status=$id'  data-target='$id' class='dropdown-trigger status'><i style='color:#648813;'  class=' fas fa-circle'></i> Completed</a>";
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
            </div>
            <?php
            if (isset($_SESSION['chef_id'])) {
                $chef_id = $_SESSION['chef_id'];
                $sql = "SELECT * FROM chefs WHERE id='$chef_id';";
                $result = mysqli_query($con, $sql);
                $resultch = mysqli_num_rows($result);
                if ($resultch < 1) {
                    $Err = "Invalid Login";
                    header("Location:../chef_log.php?error=$Err");
                    exit();
                } else {
                    $row = mysqli_fetch_assoc($result);
                    $name = $row['name'];
                    $email1 = $row['email'];
                    $speciality = $row['speciality'];
                }
            }
            ?>
            <!-- main section -->
            <div class="row main_sec" style="margin-top: 3em; ">
                <div class="col s12 m4 l4 right">
                <a onclick="profile();" href="#">

                    <div class="card z-depth-1 cards " style="border-radius: 8px;">
                        <div class="card-content " style="padding: 18px;">
                            <div class="card" style="background-color: transparent;  box-shadow: none; padding: 17px;  margin-top: -6em;">
                                <p style="text-align: center;"> <img style="height: 8em; width:8em;" src="  ./img/user1.svg" alt="" class="z-depth-3  circle responsive-img">
                                </p>
                            </div>
                            <div class="row">
                                <p style="text-align: center; font-weight: bold; color: #6f6f6f; font-size: 1em; ">
                                    <?php
                                    echo "Chef  " . $name;
                                    ?>
                                </p>
                                <hr style="width: 20px;">
                                <div class="col s12 m12 l12" style="margin-top: 1em;">
                                    <p style="text-align: center;  color: #6f6f6f; font-size: 1.3em; ">
                                        <?php
                                        echo $speciality . " specialist";
                                        ?>
                                    </p>
                                    <p style="text-align: center;  color: #6f6f6f; margin-top: 0.5em; font-size: 1.3em; ">
                                        <?php
                                        echo $email1;
                                        ?>
                                    </p>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;margin-top: 2em;">
                                        <a href="chef/logout.php" class="waves-effect waves-light btn  " style=" background: linear-gradient(60deg, #ef5350, #e53935);
                             box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);text-align: left;">
                                            Logout
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </a>
                </div>
            </div>

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
        .card1 {
            margin-top: 1em;
        }

        .cards {
            margin-top: 3em;
        }

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