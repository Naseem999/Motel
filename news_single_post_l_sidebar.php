<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>News - Left Sidebar - Motel</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    $nowArray = getdate();
    $month = $nowArray['mon'];
    $year = $nowArray['year'];
    $day = date('d');
    $months = array("JAN", "FEB", "MAR", "APRIL", "MAY", "JUNE", "JULY", "AUG", "SEP", "OCT", "NOV", "DEC");
    for ($i = 0; $i < sizeof($months); $i++) {
        if ($i == $month - 1) {
            $cal_header_mon = $months[$i];
        }
    }
    ?>

    <!-- Header section =========================================================-->
    <div class="row center-align " style=" height:54vh; background: url(img/single_post_news_header_bg1.jpg) no-repeat 50% 50%;
     background-size: cover;">

        <div class="conatiner  " style="height:54vh;background-color:rgba(0,0,0 ,0.2) ;  padding:10px;">
            <h5 style="color: #f9f9f9; font-size: 8vh; margin-top: 10vh; font-family:'Poppins', sans-serif">
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
                            <?php echo $day . " " . $cal_header_mon . " " . $year; ?></p>

                    </div>
                    <div class="col s4 m4 l4" style="text-align: right;">
                        <p style="font-size: 2vh; color: #f9f9f9;"> <i style="color: greenyellow; margin-right: 10px;" class="far fa-comment-alt fa-lg"></i>2 COMMENTS
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- news SECTION  --------------------------------------------------------------------------------->
    <div class="row main_row">
        <!-- left sidebar -->
        <div class="col s12 m4 l4">
            <div class="row">
                <div class="col s12 m12 l12 ">
                    <?php
                    include_once 'partial/calendar.php';
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="valign-wrapper card-panel white " style=" padding: 0px;  ">
                        <div class="col s6 m6 l6" style="
                          height: 17vh;
                          background: url(img/h5_header_3.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                        </div>
                        <div class="col s6 m6 l6 ">
                            <p style="color: #727475; font-size: 2vh; font-weight: 600; margin-bottom: 0px; margin-top: 0px;"> Small Room</p>
                            <p style="color: #a3a3a3; font-size: 2vh; margin-bottom: 5px;">From 30 $ per night</p>
                            <a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style=" background-color:transparent; color:#1c1c1c; " class=" waves-effect waves-light-gray btn-small ">Book</a>

                        </div>

                    </div>
                </div>

                <div class="col s12 m12 l12">
                    <div class="valign-wrapper card-panel white " style=" padding: 0px;  ">
                        <div class="col s6 m6 l6" style="
                          height: 17vh;
                          background: url(img/h7_parllax_small_bg3.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                        </div>
                        <div class="col s6 m6 l6 ">
                            <p style="color: #727475; font-size: 2vh; font-weight: 600; margin-top: 0px;">Room with View</p>
                            <p style="color: #a3a3a3; font-size: 2vh; margin-bottom: 5px;">From 120 $ per night</p>
                            <a href="room_video.php" style=" background-color:transparent; color:#1c1c1c; " class=" waves-effect waves-light-gray btn-small ">Book</a>
                        </div>

                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <div class="valign-wrapper card-panel white " style=" padding: 0px;  ">
                        <div class="col s6 m6 l6" style="
                          height: 17vh;
                          background: url(img/h7_sm-sam_card3.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                        </div>
                        <div class="col s6 m6 l6 ">
                            <p style="color: #727475; font-size: 2vh; font-weight: 600; margin-top: 0px;">Apartment</p>
                            <p style="color: #a3a3a3; font-size: 2vh; margin-bottom: 5px;">From 80 $ per night</p>
                            <a href="room_flex.php?room_img=h5_small_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5" style=" background-color:transparent; color:#1c1c1c; " class=" waves-effect waves-light-gray btn-small ">Book</a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="row">
            <div class="cols 12 m12 l12" style="padding: 10px;">
                    <p style="color: #727475; font-size: 3.5vh; margin-bottom: 15px; margin-top: 0px;">Search</p>
                    <nav style="box-shadow: none; border: 1px solid lightgray;">
                        <div class="nav-wrapper " style="background-color: #f9f9f9; ">
                            <form action="http://google.com/search" target="_blank">
                                <div class="input-field">
                                    <input id="search" name="q" type="search" required>
                                    <label class="label-icon" for="search"><i style="color: #1c1c1c;" class="material-icons">search</i></label>
                                </div>

                        </div>
                    </nav>
                    <button type="submit" style="   margin-top: 20px; background-color: #1c1c1c; " class=" waves-effect waves-light btn ">Search</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="cols 12 m12 l12" style="padding: 10px;">
                    <p style="color: #727475; font-size: 3.5vh; margin-bottom: 15px; margin-top: 0px;">Categories</p>
                    <div class="col s12 m12 l12">
                        <a href="around.php">
                            <p style="border-bottom: 1px solid lightgray;padding: 5px; color: #a3a3a3; font-size: 2.4vh; margin-bottom: 15px;font-weight: lighter;  margin-top: 0px;">Around Us</p>
                        </a>

                        <a href="news_single_post_FW.php">
                            <p style="border-bottom: 1px solid lightgray;padding: 5px; color: #a3a3a3; font-size: 2.4vh; margin-bottom: 15px;font-weight: lighter;  margin-top: 0px;">Luxury Hotel</p>
                        </a>

                        <a href="news_single_post_FW.php">
                            <p style="padding:5px ; color: #a3a3a3; font-size: 2.4vh; margin-bottom: 15px; font-weight: lighter; margin-top: 0px;">News</p>
                        </a>

                    </div>


                </div>
            </div>

            <div class="row">
                <div class="col s12 m12 l12">
                    <p style="color: #727475; font-size: 3.5vh; margin-bottom: 15px; margin-top: 0px;">Our Branches</p>
                </div>
                <div class="col s12 m12 l12">
                    <div class="valign-wrapper card-panel white " style=" padding: 0px; box-shadow: none;  ">
                        <div class="col s6 m6 l6" style="
                          height: 17vh;
                          background: url(img/h5_header_3.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                        </div>
                        <div class="col s6 m6 l6 ">
                            <p style="color: #727475; font-size: 2.8vh; margin-bottom: 4px;  margin-top: 0px;"> Hotel Rome</p>
                            <span style="color: #a3a3a3; font-size: 2.5vh; margin-bottom: 2px;  margin-top: 0px;"> Rome ( Italy )</span><br>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>

                        </div>

                    </div>
                </div>

                <div class="col s12 m12 l12">
                    <div class="valign-wrapper card-panel white " style=" padding: 0px; box-shadow: none;  ">
                        <div class="col s6 m6 l6" style="
                          height: 17vh;
                          background: url(img/h7_parllax_small_bg3.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                        </div>
                        <div class="col s6 m6 l6 ">
                            <p style="color: #727475; font-size: 2.8vh; margin-bottom: 4px;  margin-top: 0px;"> Hotel Berlin</p>
                            <span style="color: #a3a3a3; font-size: 2.2vh; margin-bottom: 5px;  margin-top: 0px;"> Berlin (Germany )</span><br>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>

                        </div>

                    </div>
                </div>

                <div class="col s12 m12 l12">
                    <div class="valign-wrapper card-panel white " style=" padding: 0px; box-shadow: none;  ">
                        <div class="col s6 m6 l6" style="
                          height: 17vh;
                          background: url(img/h5_small_card_4.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                        </div>
                        <div class="col s6 m6 l6 ">
                            <p style="color: #727475; font-size: 2.8vh; margin-bottom: 4px;  margin-top: 0px;"> Hotel New York</p>
                            <span style="color: #a3a3a3; font-size: 2.2vh; margin-bottom: 5px;  margin-top: 0px;"> New York ( United States )</span><br>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>
                            <i style="color: #a3a3a3;" class="fas fa-star"></i>

                        </div>

                    </div>
                </div>


            </div>



        </div>
        <!-- right section -->
        <div class="col s12 m8 l8">
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
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Breakfast</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Hotel</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px;margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">King Bed</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Luxary</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">No Smoking</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Room</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Spa</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Bar</a>
                    <a href="#" class="waves-effect waves-light-red " style="padding: 4px; margin-right:10px; margin:10px; font-size:1.8vh; background-color: transparent; border:1px solid lightgray;  color:#a3a3a3">Restaurant</a>
                </div>
            </div>
            <hr style="margin-top: 8vh;">
            <div class="row">
                <div class="col s12 m12 l12" style=" padding:25px;">
                    <p style="color: #727475; font-size:3.2vh; font-family: lighter; margin-bottom: 15px; margin-top: 0px; font-family: 'Poppins', sans-serif;">2 Comments</p>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row" style=" display: inline-flex; margin-bottom: 0px;">
                                    <img class=" center responsive-img" style="height: 30px; margin-right: 8px; " src="img/user.svg">
                                    <span style="color: #1c1c1c;line-height: 27px;margin-right: 8px; font-size: 2.5vh; font-family: 'Poppins', sans-serif;">
                                        nicdark
                                    </span>
                                    <span style="color: #727475;line-height: 27px; font-size: 2.2vh; font-family: 'Poppins', sans-serif;">
                                        says:
                                    </span>
                                </div>
                                <div class="row" style=" margin-bottom: 0px;">
                                    <span style="color: #a3a3a3;line-height: 27px; font-size: 2.2vh; font-family: 'Poppins', sans-serif;">
                                        July 21, 2017 at 1:57 pm
                                    </span>
                                </div>
                                <div class="row" style=" margin-bottom: 0px;">
                                    <span style="color: #a3a3a3;line-height: 27px; font-size: 2.2vh; font-family: 'Poppins', sans-serif;">
                                        Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum.
                                    </span>
                                </div>
                            </div>
                            <div class="card-action" style="margin-top: 0px;">
                                <a href="#" style="background-color: #1c1c1c; color: #f9f9f9; font-size: 2vh; border: 1px solid lightgray; padding: 4px;">Reply</a>
                            </div>
                        </div>
                    </div>


                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">
                                <div class="row" style=" display: inline-flex; margin-bottom: 0px;">
                                    <img class=" center responsive-img" style="height: 30px; margin-right: 8px; " src="img/user.svg">
                                    <span style="color: #1c1c1c;line-height: 27px;margin-right: 8px; font-size: 2.5vh; font-family: 'Poppins', sans-serif;">
                                        nicdark
                                    </span>
                                    <span style="color: #727475;line-height: 27px; font-size: 2.2vh; font-family: 'Poppins', sans-serif;">
                                        says:
                                    </span>
                                </div>
                                <div class="row" style=" margin-bottom: 0px;">
                                    <span style="color: #a3a3a3;line-height: 27px; font-size: 2.2vh; font-family: 'Poppins', sans-serif;">
                                        July 21, 2017 at 1:57 pm
                                    </span>
                                </div>
                                <div class="row" style=" margin-bottom: 0px;">
                                    <span style="color: #a3a3a3;line-height: 27px; font-size: 2.2vh; font-family: 'Poppins', sans-serif;">
                                        Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum.
                                    </span>
                                </div>
                            </div>
                            <div class="card-action" style="margin-top: 0px;">
                                <a href="#" style="background-color: #1c1c1c; color: #f9f9f9; font-size: 2vh; border: 1px solid lightgray; padding: 4px;">Reply</a>
                            </div>
                        </div>
                    </div>


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
                        <form method="#" action="thanks.php">
                            <span class="card-title" style="margin-top:3vh; font-size: 2.5vh; color:#a3a3a3 ;font-weight: lighter;">Comment</span>
                            <br>
                            <textarea class="validate" required name="bio" id="first_name" type="text" style="border:1px solid #ededed;width: 99%;  overflow-y: auto;    height:38vh; 
                     background-color: #f9f9f9;; "></textarea>
                            <br><br>
                            <span class="card-title" style="margin-top:3vh; font-size: 2.5vh; color:#a3a3a3 ;font-weight: lighter;">Name *</span>
                            <br>
                            <input required name="pass" id="first_name" type="text" class="validate" style="
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
                                <input type="checkbox" class="filled-in" checked="checked" />
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
        margin: 20px;
    }

    .img_s {
        height: 40vh !important;
    }

    @media only screen and (max-width: 600px) {
        .header_row {
            width: 100%;
        }

        .main_row {
            margin: 0px;
        }

        .img_s {
            height: 40vh !important;
        }
    }
</style>