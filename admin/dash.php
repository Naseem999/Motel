<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
</head>

<body>
    <?php
    if (isset($_SESSION['admin_id'])) {
        $admin_id = $_SESSION['admin_id'];
    }
    $sql1 = "SELECT * FROM orders ";
    $orders_completed = 0;
    $pending = 0;
    $revenue = 0;
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
    $sql1 = "SELECT * FROM notifications WHERE n_for='motel'  order by id desc ";
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
            </div>
            </a>
            <a onclick="orders();" href="#orders">
                <div class="col s12 m4 l4">
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
                </div>
            </a>
            <a onclick="noti();" href="#noti">
                <div class="col s12 m4 l4 ">
                    <div class="card z-depth-3 cards " style=" border-radius: 8px;">
                        <div class="card-content white-text">
                            <div class="row" style="margin-bottom: 0px;">
                                <div class="col s6 m6 l6 " style=" margin-top: -4em;">
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
                </div>
            </a>
        </div>
        <!-- =========================================================================================================== -->
        <div class="col s12 m8 l8">
            <div class="col s12 m12 l12" style="margin-top: 5em;">

                <div class="card z-depth-3 cards " style="border-radius: 8px;">
                    <div class="card-content " style="padding: 18px;">
                        <div class="card" style=" padding: 17px;background: linear-gradient(60deg, #ffa726, #fb8c00); 
         margin-top: -4em;   box-shadow:0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(255, 152, 0, 0.4);   border-radius: 5px;">
                            <div class="card-image white-text cneter-align">
                                <p class="valign-wrapper" style="text-align: left;   font-size: 2em; ">
                                    Notificitions
                                </p>
                                <p class="valign-wrapper" style="text-align: left;  font-size: 1.8vh; ">
                                    All The Notifications related to chef and food orders will Be shown Here
                                </p>
                            </div>
                        </div>
                        <table>
                            <tbody">
                                <?php
                                $show = false;
                                $sql = "SELECT * FROM notifications WHERE n_for='motel'  order by id desc ";
                                $result = mysqli_query($con, $sql);
                                $resultch = mysqli_num_rows($result);
                                if ($resultch < 1) {
                                ?>

                                    <p style="text-align: center;">
                                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                        <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_O0LsYM.json" background="transparent" speed="0.7" style=" height:30vh;" loop autoplay></lottie-player>
                                    </p>
                                    <?php
                                } else {
                                    $subtotal = 0;
                                    $show = true;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr>
                                            <?php
                                            $title = $row['title'];
                                            $timestamp = $row['timestamp_'];

                                            ?>

                                            <div onclick="orders();" class="valign-wrapper card-panel hoverable  " style=" cursor: pointer; border: 1px solid #dedede; padding: 0px;">
                                                <div class=" col s5 m8 l8 ">
                                                    <p>
                                                        <a class="text1"> <?php echo $title; ?></a>
                                                    </p>
                                                </div>
                                                <div class=" col s4 m3 l3 ">
                                                    <p>
                                                        <a class="text"> <?php echo $timestamp; ?></a>
                                                    </p>
                                                </div>
                                                <div class="col s3  m1 l1 waves-effect   waves-red " style=" height: 9vh;  ">
                                                    <form action="admin/del_not.php" method="get">
                                                        <input name="noti_id" type="hidden" value="<?php echo $row['id'] ?>">
                                                        <button class="left" type="submit" name="del_noti_submit" style="text-align: left; height: 100%; border:none; background-color:transparent; cursor: pointer;  box-shadow: none; ">
                                                            <i style=" color: gray;" class=" material-icons ">clear</i>
                                                        </button>
                                                    </form>
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
        </div>
        <!-- ===================================================================================================== -->
        <div class="right col s12 m4 l4 ">
            <?php
            if (isset($_SESSION['admin_id'])) {
                $admin_id = $_SESSION['admin_id'];
                $sql = "SELECT * FROM admin_tab WHERE id='$admin_id';";
                $result = mysqli_query($con, $sql);
                $resultch = mysqli_num_rows($result);
                if ($resultch < 1) {
                    $Err = "Invalid Login";
                    header("Location:../admin_log.php?error=$Err");
                    exit();
                } else {
                    $row = mysqli_fetch_assoc($result);
                    $username = $row['username'];
                    $email1 = $row['email'];
                }
            }
            ?>
            <!-- main section -->
            <div onclick="profile();" class="row main_sec" style="cursor: pointer; margin-top: 0px;">
                <div class="col s12 m12 l12" style="margin-top: 4em;">
                    <div class="card z-depth-1 cards " style="border-radius: 8px;">
                        <div class="card-content " style="padding: 18px;">
                            <div class="card" style="background-color: transparent;  box-shadow: none; padding: 17px;  margin-top: -6em;">
                                <p style="text-align: center;"> <img style="height: 8em; width:8em;" src="  ./img/user1.svg" alt="" class="z-depth-3  circle responsive-img">
                                </p>
                            </div>
                            <div class="row">
                                <p style="text-align: center; font-weight: bold; color: #6f6f6f; font-size: 1em; ">
                                    <?php
                                    echo $username;
                                    ?>
                                </p>
                                <hr style="width: 20px;">
                                <div class="col s12 m12 l12" style="margin-top: 1em;">

                                    <p style="text-align: center;  color: #6f6f6f; margin-top: 0.5em; font-size: 1.3em; ">
                                        <?php
                                        echo $email1;
                                        ?>
                                    </p>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;margin-top: 2em;">
                                        <a href="admin/logout.php" class="waves-effect waves-light btn  " style=" background: linear-gradient(60deg, #ef5350, #e53935);
                             box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(244, 67, 54, 0.4);text-align: left;">
                                            Logout
                                        </a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
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

    .cards {
        margin-top: 1px;
    }

    .card1 {
        margin-top: 4.5em;
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
    }
</style>