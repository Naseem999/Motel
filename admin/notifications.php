<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
</head>

<body>

    <!-- main section -->
    <div class="row main_sec">

        <div class="col s12 m12 l12">

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
                                    <tr >
                                        <?php
                                        $title = $row['title'];   
                                        $timestamp = $row['timestamp_'];                                       
                                    
                                        ?>
                                        
                                        <div onclick="orders();"  class="valign-wrapper card-panel hoverable  " style=" cursor: pointer; border: 1px solid #dedede; padding: 0px;">
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
                                                    <button  class="left" type="submit" name="del_noti_submit" style="text-align: left; height: 100%; border:none; background-color:transparent; cursor: pointer;  box-shadow: none; ">
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

       

        .text1{
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