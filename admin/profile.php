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
    ?>
        <!-- main section -->
        <div class="row main_sec">

            <div class="col s12 m4 l4">
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
            <div class="col s12 m8 l8">
                <div class="card z-depth-1 cards " style="border-radius: 8px;">
                    <div class="card-content " style="padding: 18px;">
                        <div class="card" style=" padding: 17px; background: linear-gradient(60deg, #66bb6a, #43a047); 
                     margin-top: -4em;   box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4);    border-radius: 5px;">
                            <div class="card-image white-text cneter-align">
                                <p style="text-align: center;   font-size: 1.5em; ">
                                    Edit Profile
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <form action="admin/update_admin.php" method="post">
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;">
                                        <input name="username" placeholder="Name" required type="text" class="validate " style="width: 70%; text-align: left; font-size: 2.5vh;">
                                    </p>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;">
                                        <input name="email" required placeholder="Email" type="email" class="validate " style="width: 70%; text-align: left; font-size: 2.5vh;">
                                    </p>
                                </div>
                                <div class="input-field col s12 m12 l12">
                                    <p style="text-align: center;margin-top: 1em;">
                                        <button name="update_admin_submit" type="submit" class="waves-effect waves-light btn  " style=" background: linear-gradient(60deg, #66bb6a, #43a047); 
                        box-shadow: 0 4px 20px 0px rgba(0, 0, 0, 0.14), 0 7px 10px -5px rgba(76, 175, 80, 0.4); text-align: left;">
                                            Update Profile
                                        </button>
                                    </p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    } else {
        echo"<script>window.location.assign('../admin_log.php?error=invalid Access');</script>";
    }
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

    .text1 {
        color: #6f6f6f;
        font-size: 2.5vh;
        text-align: left;
        font-weight: 600;

    }



    .main_sec {
        margin: 30px;
        margin-top: 9vh;
    }


    .header_sec {
        margin: 23px;

    }



    @media only screen and (max-width: 600px) {


        .card-panel {
            border-radius: 10px;
        }


        .header_sec {
            margin: 0px;
            margin-bottom: 50px;
        }



        .text1 {
            color: #6f6f6f;
            font-size: 2vh;
            text-align: center;
        }

        .main_sec {
            margin: 6px;
            margin-top: 0px;
        }
    }
</style>