<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>News - Full width - Motel</title>
</head>

<body>
<?php
    include_once 'partial/header.php';
    $nowArray = getdate();
    $month = $nowArray['mon'];
    $year = $nowArray['year'];
    $day=date('d');
    $months = array("JAN", "FEB", "MAR", "APRIL", "MAY", "JUNE", "JULY", "AUG", "SEP", "OCT", "NOV", "DEC");
    for ($i = 0; $i < sizeof($months); $i++) {
        if ($i == $month - 1) {
            $cal_header_mon = $months[$i];
        }
    }
    ?>
    <!-- Header section =========================================================-->
    <div class="row center-align " style=" height:55vh; background: url(img/single_post_news_header_bg1.jpg) no-repeat 50% 50%;
     background-size: cover;">

        <div class="conatiner  " style="height:55vh;background-color:rgba(0,0,0 ,0.2) ;  padding:10px;">
            <h5 class=" wobble-hor-bottom" style="color: #f9f9f9; font-size: 8vh; margin-top: 10vh; font-family:'Poppins', sans-serif">
                SINGLE POST
            </h5>
            <div class="row">
                <a class=" btn-floating btn waves-effect waves-light  z-depth-5" style="background-color:rgba(0,0,0 ,0.7) ; margin-top: 3vh;"><i class="material-icons">arrow_downward</i></a>
            </div>
            <div class="row " style="margin-top: 5.5%;">

                <div class="row header_row ">
                    <div class="col s4 m4 l4" style="text-align: left;">
                        <p style="font-size: 2vh; color: #f9f9f9;"> <i style="color: greenyellow;" class="fab fa-stumbleupon-circle fa-lg"></i> NICKDARK</p>

                    </div>
                    <div class="col s4 m4 l4" style="text-align: center;">
                    <p style="font-size: 2vh; color: #f9f9f9;"> <i style="color: greenyellow; margin-right: 10px;" class="far fa-calendar-alt fa-lg"></i>
                        <?php echo $day ." ".$cal_header_mon." ".$year;?></p>
                    </div>
                    <div class="col s4 m4 l4" style="text-align: right;">
                        <p style="font-size: 2vh; color: #f9f9f9;"> <i style="color: greenyellow; margin-right: 10px;" class="far fa-comment-alt fa-lg"></i>NO COMMENTS
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- news SECTION  --------------------------------------------------------------------------------->
    <div class="row main_row">
        <div class="row serve_section">
            <div class="col s12 m6 l6">
                <span class="left" style="margin: 10px; vertical-align: middle; font-size: 10vh; font-family: 'Poppins', sans-serif; color: #a3a3a3;">A</span>
                <p style="color: #a3a3a3;line-height: 27px; font-size: 2.3vh; font-weight: lighter; font-family: 'Poppins', sans-serif;">orem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada blandit dui vel tempor. Nunc leo libero, consectetur sit amet sem sed, luctus
                    sollicitudin est. Sed eget pharetra quam, ut convallis est. Phasellus convallis egestas magna, id ullamcorper</p>
            </div>
            <div class="col s12 m6 l6">
                <p style="color: #a3a3a3;line-height: 27px; font-size: 2.3vh;font-weight: lighter; font-family: 'Poppins', sans-serif;">Pellentesque
                    habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce sodales, sapien ut venenatis
                    scelerisque, nulla dui consectetur nisi, at auctor purus orci aliquam turpis.
                    Nulla ac sagittis massa, a consequat ex. Morbi vestibulum mi fringilla sodales.</p>
            </div>
        </div>
        <!-- single column text -->
        <div class="row">
            <div class="col s12 m12 l12">
                <p style="color: #727475; font-size:4vh; margin-bottom: 15px; margin-top: 0px;">Our Latest Rooms</p>
                <p style="color: #a3a3a3;line-height: 27px; letter-spacing:0.5px; font-size: 2.3vh;font-weight: lighter; font-family: 'Poppins', sans-serif;">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum,
                    venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus
                    bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc.
                    Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero,
                    feugiat faucibus mattis eget, pulvinar et ligula.</p>
            </div>
        </div>
        <!-- img section -->
        <div class="row">
            <div class="col s12 m6 l6 center-align">
                <img class="img_s center responsive-img" src="img/h5_header_3.jpg">

            </div>
            <div class="col s12 m6 l6 center-align">
                <img class="img_s center responsive-img" src="img/h5_small_card_1.jpg">

            </div>
        </div>
        <!-- 2nd single column text -->
        <div class="row">
            <div class="col s12 m12 l12">
                <p style="color: #727475; font-size:4vh; margin-bottom: 15px; margin-top: 0px;">Special Guest Interview</p>
                <p style="color: #a3a3a3;line-height: 27px; letter-spacing:0.5px; font-size: 2.3vh;font-weight: lighter; font-family: 'Poppins', sans-serif;">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum,
                    venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus
                    bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc.
                    Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique.
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero,
                    feugiat faucibus mattis eget, pulvinar et ligula.</p>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 l12">
            <span class="" style="padding: 6px; font-size:2.5vh; color: #727475;">Tags:</span>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Breakfast</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Hotel</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px;margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">King Bed</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Luxary</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">No Smoking</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Room</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Spa</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Bar</a>
            <a  href="#" class="waves-effect waves-light-red "style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Restaurant</a>
            </div>
        </div>
        <hr style="margin-top: 8vh;">
        <div class="row">
            <div class="f_card col s12 m12 l12   " style=" padding:25px;">
            <p style="color: #727475; font-size:3.2vh; font-family: lighter; margin-bottom: 15px; margin-top: 0px; font-family: 'Poppins', sans-serif;">Leave a Reply</p>
            <p style="color: #a3a3a3; font-size:2.3vh; margin-bottom:6vh; margin-top: 0px; font-family: 'Poppins', sans-serif;">
            Your email address will not be published. Required fields are marked *
        </p>

            <div class="card-content white-text">
                    <form method="post" action="thanks.php">
                    <span class="card-title" style="margin-top:3vh; font-size: 2.5vh; color:#a3a3a3 ;font-weight: lighter;">Comment</span>
                        <br>
                        <textarea required class="validate" name="bio" id="first_name" type="text" style="border:1px solid #ededed;width: 99%;  overflow-y: auto;    height:38vh; 
                     background-color: #f9f9f9;; "></textarea>
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; font-size: 2.5vh; color:#a3a3a3 ;font-weight: lighter;">Name *</span>
                        <br>
                        <input required name="name" id="first_name" type="text" class="validate" style="
                     background-color: #f9f9f9; border:1px solid #ededed; width: 99%; ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; font-size: 2.5vh; color:#a3a3a3 ;font-weight: lighter;">Email *</span>
                        <br>
                        <input required name="email" id="first_name" type="email" class="validate" style="border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; font-size: 2.5vh; color:#a3a3a3 ;font-weight: lighter;">Website</span>
                        <br>
                        <input required name="f_name" id="first_name" type="text" class="validate" style="border:1px solid #ededed;width: 99%;  background-color: #f9f9f9;;
                      ">
                        <br><br>
                        <label>
                            <input " type="checkbox" class="filled-in" checked="checked" />
                            <span class="card-title" style="margin-top:3vh; font-size: 2.5vh; color:#a3a3a3 ;font-weight: lighter;">
                            Save my name, email, and website in this browser for the next time I comment.</span>
                        </label>
                        <br><br>
                        
                        <button name="" type="submit" style=" background-color: #1c1c1c;  margin-top: 10px;  font-weight: 500; " class=" waves-effect waves-light btn-large ">Post comment</button>
                    </form>
                </div>
        </div>
        </div>
    </div>

    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>

</body>

</html>

<style>
      [type="checkbox"].filled-in:checked+span:not(.lever):after {
        border: 2px solid #1c1c1c !important;
        background-color: #1c1c1c !important;
    }

    [type="checkbox"]+span:not(.lever) {
        line-height: 20px;
    }
    .header_row {
        width: 60%;
    }

    .main_row {
        margin: 60px;
    }

    .img_s {
        height: 60vh !important;
    }

    @media only screen and (max-width: 600px) {
        .header_row {
            width: 100%;
        }

        .main_row {
            margin: 0px;
        }

        .img_s {
            height: 45vh !important;
        }
    }
    ::-webkit-scrollbar {
        width: 0px;
    }
</style>