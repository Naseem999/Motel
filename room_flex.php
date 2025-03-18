<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    if (isset($_GET['room_type']) && isset($_GET['room_price']) || isset($_GET['hotel_name']) || isset($_GET['star'])) {
        $img = mysqli_real_escape_string($con, $_GET['room_img']);
        $room_type = mysqli_real_escape_string($con, $_GET['room_type']);
        $room_price = mysqli_real_escape_string($con, $_GET['room_price']);
        $hotel_name = mysqli_real_escape_string($con, $_GET['hotel_name']);
        $star = mysqli_real_escape_string($con, $_GET['star']);


    ?>
        <title>Motel-Room Default</title>
</head>

<body>
    <?php
        include_once 'partial/header.php';

    ?>
    <div class="row" style="width: 100%;">
        <div class="parallax-container">
            <div class="parallax">
                <img src="img/room_gallery_header_bg.jpg" alt="Parallax">
            </div>
            <div class="row z-depth-5 center-align " style=" height: 100%; background: linear-gradient(180deg, rgba(250,222,231,0.0) 10%, rgba(0,0,0,0.9) 100%); ">
                <div class="col s12 m12 l12 center-align" style=" height: 100%;">
                    <p style="word-wrap: break-word;color: wheat; margin-bottom: 0px; font-size: 15em; margin-top: 0vh;font-family: Copperplate, Papyrus, fantasy;">
                        <?php
                        if (isset($_GET['room_price'])) {
                            echo $room_price;
                        }
                        ?><span style="font-size: 10vh; vertical-align: top;">$</span></p>
                    <p style="word-wrap: break-word;color: wheat; font-size: 6vh; margin-top: 0vh;font-family: Copperplate, Papyrus, fantasy;">PER NIGHT</p>
                </div>

            </div>
        </div>
    </div>
    <!-- main section starts here ============================================================================================ -->
    <div class="row header_row">
        <div class="row">

            <div class="col s12 m12 l12">
                <P style="font-family: 'Poppins', sans-serif; color: #727475; font-size: 6.5vh;;margin-bottom: 0px; margin-top: 0px; font-weight: lighter;">
                    <?php
                    if (isset($room_type)) {
                        echo $room_type;
                    }
                    ?></P>
                <span style="font-family: 'Poppins', sans-serif; color: #a3a3a3; letter-spacing:2px; font-size: 2.2vh; margin-top: 0px;">
                    <?php
                    if (isset($hotel_name)) {
                        echo $hotel_name;
                    }
                    ?></span>
                <?php
                if (isset($star)) {
                    for ($i = 0; $i < $star; $i++) {
                        echo "<i style='color: #a3a3a3;' class='fas fa-star'></i>";
                    }
                }
                ?>
            </div>

        </div>

        <!-- ================================================================== -->
        <div class="row">
            <div class="col s12 m8 l8">
                <?php
                if (isset($img)) {
                    $room_image = "img/" . $img;
                } else {
                    $room_image = "img/h7_s_card_4.jpg";
                }
                ?>
                <div class="col s12 m12 l12 " style=" height: 60vh; width: 100%;
                        background: url(<?php echo $room_image; ?>) no-repeat 50% 50%;
                        background-size: cover;
                        ">

                </div>
                <!-- icons section -->
                <div class="row">
                    <div class="col s12 m3 l3 center-align" style="padding:30px;">
                        <i style="color: #a3a3a3;" class="far fa-user-circle fa-3x"></i>
                        <?php
                        if ($room_type == "Small Room") {
                            echo " <p style='color: #a3a3a3;'>1</p>";
                        }
                        if ($room_type == "Family Room") {
                            echo " <p style='color: #a3a3a3;'>3</p>";
                        }
                        if ($room_type == "Double Room") {
                            echo " <p style='color: #a3a3a3;'>2</p>";
                        }
                        if ($room_type == "Luxury Room") {
                            echo " <p style='color: #a3a3a3;'>2</p>";
                        }
                        if ($room_type == "Apartment") {
                            echo " <p style='color: #a3a3a3;'>5</p>";
                        }
                        ?>

                    </div>

                    <div class="col s12 m3 l3 center-align" style="padding:30px;">
                        <i style="color: #a3a3a3;" class="fas fa-ruler-combined fa-3x"></i>
                        <?php
                        if ($room_type == "Small Room") {
                            echo " <p style='color: #a3a3a3;'>15 Ft²</p>";
                        }
                        if ($room_type == "Family Room") {
                            echo " <p style='color: #a3a3a3;'>30 Ft²</p>";
                        }
                        if ($room_type == "Double Room") {
                            echo " <p style='color: #a3a3a3;'>23 Ft²</p>";
                        }
                        if ($room_type == "Luxury Room") {
                            echo " <p style='color: #a3a3a3;'>50 Ft²</p>";
                        }
                        if ($room_type == "Apartment") {
                            echo " <p style='color: #a3a3a3;'>70 Ft²</p>";
                        }
                        ?>
                    </div>
                    <div class="col s12 m3 l3 center-align" style="padding:30px;">
                        <i style="color: #a3a3a3;" class="fas fa-bed fa-3x"></i>
                        <?php
                        if (isset($room_price)) {
                            echo " <p style='color: #a3a3a3;'>$room_price $ / PER NIGHT</p>";
                        }
                        ?>

                    </div>
                    <div class="col s12 m3 l3 center-align" style="padding:30px;">
                        <i style="color: #a3a3a3;" class="tooltipped far fa-calendar-alt fa-3x" data-position="top" data-tooltip="
                    <div class='col s12 m12 l12 tool'  >
                    <table class='centered'>
    <thead>
        <tr>
            <th>Day</th>
            <th>Date</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody>
    <?php

        $ts = strtotime('monday this week');
        // calculate the number of days since Monday
        $dow = date('w', $ts);
        $offset = $dow - 1;
        if ($offset < 0) {
            $offset = 6;
        }
        // calculate timestamp for the Monday
        $ts = $ts - $offset * 86400;

        $days = array('MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT', 'SUN');
        for ($i = 0, $j = 0; $i < 7; $i++, $j++, $ts += 86400) {

    ?>
           <tr>
               <td><?php echo $days[$j]; ?></td>
               <td><?php echo date("m/d/Y ", $ts); ?></td>
               <td>
               <?php
                if (isset($room_price)) {
                    echo "$room_price $ ";
                }
                ?>
               </td>
           </tr>
       <?php

        }
        ?>
    </tbody>
</table>
                    </div>"></i>
                        <p style="color: #a3a3a3;">WEEK PRICE <i class="fas fa-info-circle"></i></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m12 l12">
                        <p style="color: #a3a3a3;line-height: 27px; letter-spacing:0.5px; font-size: 2.3vh;font-weight: lighter; font-family: 'Poppins', sans-serif;">Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum. Nam nulla ipsum,
                            venenatis malesuada felis quis, ultricies convallis neque. Pellentesque tristique fringilla tempus. Vivamus
                            bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc.
                            Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique.
                            Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vestibulum ligula libero,
                            feugiat faucibus mattis eget, pulvinar et ligula.</p>
                    </div>
                </div>
                <hr style="  margin-top: 10px;">

                <!-- roooms services -->
                <?php
                if ($room_type == "Small Room" || $room_type == "Family Room" || $room_type == "Apartment") {
                ?>
                    <div class="row" style="margin-top: 5vh;">
                        <div class="col s12 m12 l12">
                            <p style="font-family: 'Poppins', sans-serif; color: #727475; font-size:4vh; font-weight: lighter; margin-bottom: 15px; margin-top: 0px;">Room Services</p>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3;margin: 10px;" class="fas fa-swimming-pool fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.6vh; font-weight: lighter; ">
                                Swimming Pool</span>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3; margin: 10px;" class="fas fa-tv fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.5vh; font-weight: lighter; ">
                                Television</span>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3;margin: 10px;" class="fas fa-cocktail fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.5vh; font-weight: lighter; ">
                                Welcome Drink</span>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3; margin: 10px;" class="fas fa-hot-tub fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.5vh; font-weight: lighter; ">
                                Private Bathroom</span>
                        </div>
                    </div>
                <?php
                }
                // for luxary and double room services
                if ($room_type == "Double Room" || $room_type == "Luxury Room") {
                ?>
                    <div class="row" style="margin-top: 5vh;">
                        <div class="col s12 m12 l12">
                            <p style="font-family: 'Poppins', sans-serif; color: #727475; font-size:4vh; font-weight: lighter; margin-bottom: 15px; margin-top: 0px;">Room Services</p>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3;margin: 10px;" class="fas fa-swimming-pool fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.6vh; font-weight: lighter; ">
                                Swimming Pool</span>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3; margin: 10px;" class="fas fa-biking fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.5vh; font-weight: lighter; ">
                                Bike Rental</span>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3;margin: 10px;" class="fas fa-cocktail fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.5vh; font-weight: lighter; ">
                                Welcome Drink</span>
                        </div>
                        <div class="col s12 m4 l4 ">
                            <i style="color: #a3a3a3; margin: 10px;" class="fas fa-hot-tub fa-2x"></i>
                            <span style="color: #a3a3a3; font-size:2.5vh; font-weight: lighter; ">
                                Private Bathroom</span>
                        </div>
                    </div>
                <?php
                }

                ?>

                <hr style="  margin-top: 60px;">
                <!-- around sec -->

                <div class="row" style=" margin-top: 9vh;">
                    <div class="col s12 m12 l12">
                        <p style="color: #727475; font-size:4vh; font-family: 'Poppins', sans-serif; font-weight: lighter; margin-bottom: 15px; margin-top: 0px;">
                            Around The Hotel</p>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card  hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator responsive-img" src="img/h7_blog_card_1.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4" style="font-weight: 500;"> RELAX AREA <i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <p style="text-align: center;">AROUND US</p>
                                <hr style="width: 50px;">
                                <br>
                                <span class="card-title  text-darken-4" style="font-weight: 900; color:#838485"> RELAX AREA <i class="material-icons right">close</i></span>
                                <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="news_full_w.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                            </div>

                        </div>

                    </div>

                    <div class="col s12 m4 l4">
                        <div class="card  hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator responsive-img" src="img/h7_blog_card_2.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4" style="font-weight: 500;"> BAR <i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <p style="text-align: center;">AROUND US</p>
                                <hr style="width: 50px;">
                                <br>
                                <span class="card-title  text-darken-4" style="font-weight: 900; color:#838485"> BAR <i class="material-icons right">close</i></span>
                                <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="bar.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                            </div>

                        </div>

                    </div>

                    <div class="col s12 m4 l4">
                        <div class="card  hoverable">
                            <div class="card-image waves-effect waves-block waves-light">
                                <img class="activator responsive-img" src="img/aroun_big_card.jpg">
                            </div>
                            <div class="card-content">
                                <span class="card-title activator grey-text text-darken-4" style="font-weight: 500;">RESTURENT <i class="material-icons right">more_vert</i></span>
                            </div>
                            <div class="card-reveal">
                                <p style="text-align: center;">AROUND US</p>
                                <hr style="width: 50px;">
                                <br>
                                <span class="card-title  text-darken-4" style="font-weight: 900; color:#838485"> RESTURENT <i class="material-icons right">close</i></span>
                                <p style="color: gray;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="restaurant.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <!-- side bar -->
            <div class="col s12 m4 l4">
            <div class="col s12 m12 l12 center-align" style=" background-color:#3a3a3a; ">
            <?php
                        if ($room_type == "Small Room") {
                            $guest=1;
                        }
                        if ($room_type == "Family Room") {
                            $guest=3;
                        }
                        if ($room_type == "Double Room") {
                            $guest=2;
                        }
                        if ($room_type == "Luxury Room") {
                            $guest=2;
                        }
                        if ($room_type == "Apartment") {
                            $guest=5;
                        }
                        ?>
                    <div class="card " style="box-shadow: none;">
                    <form action="booking.php" method="get">
                    <input name="room_img" type="hidden" value="<?php echo $_GET['room_img']?>">
                    <input name="room_price" type="hidden" value="<?php echo $_GET['room_price']?>">  
                    <input name="room_name" type="hidden" value="<?php echo $_GET['room_type']?>">  

                    <div class="card-action" style="background-color: #3a3a3a; ">
                            <div class="row" style="background-color: #1c1c1c;">
                                <div class="col s6 m6 l6" style="background-color: #838485;">
                                    <p style="font-size: 2vh;">Check-In</p>
                                    <Input  id="check_in" name="checkin" type="text" style="margin-top: 10px; border-style: none; color: #1c1c1c; text-align: center; font-size:6vh" placeholder="" class="datepicker">
                                </div>
                                <div class="col s6 m6 l6" style="background-color: #1c1c1c;">
                                    <p style="font-size: 2vh;color: wheat;">Check-Out</p>
                                    <Input  id="check_out" name="checkout" type="text" style="margin-top: 10px; border-style: none; color: wheat; text-align: center; font-size:6vh" class="datepicker">
                                </div>
                                <div class="col s6 m6 l6">
                                    <p style="font-size: 2vh; color: wheat;">Guest</p>
                                    <Input min ="<?php echo $guest;?>" max="<?php echo $guest;?>"  name="guest" type="number" style="margin-top: 10px; width: 50%; border: none;  color: wheat; text-align: center; font-size:6vh" placeholder="<?php echo $guest;?>">
                                </div>
                                <div class="col s6 m6 l6" style="background-color: #838485;">
                                    <p style="font-size: 2vh;">Nights</p>
                                    <Input min="1" max="1" value="1" id="check_in" name="nights" type="number" style="margin-top: 10px; width: 50%; border: none; color: #1c1c1c; text-align: center; font-size:6vh" placeholder="1">
                                </div>
                            </div>
                            <div class="row" style="margin-top: 0px;">
                                <button name="book_submit" type="submit" style=" width: 100%; background-color: #1c1c1c;  " class=" waves-effect waves-light btn-large ">BOOK NOW</button>
                            </div>
                        </div>
                    </form>
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
                            <div class="col s6 m6 l6 center-align">
                                <p style="color: #727475; font-size: 2vh; font-weight: 600; margin-top: 0px;"> Small Room</p>
                                <a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style=" background-color:transparent; color:#1c1c1c; border:1px solid gray ;" class=" waves-effect waves-light-gray btn-small ">Book</a>

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
                            <div class="col s6 m6 l6 center-align">
                                <p style="color: #727475; font-size: 2vh; font-weight: 600; margin-top: 0px;">Room with View</p>
                                <a href="room_video.php" style=" background-color:transparent; color:#1c1c1c; border:1px solid gray ;" class=" waves-effect waves-light-gray btn-small ">Book</a>

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
                            <div class="col s6 m6 l6 center-align">
                                <p style="color: #727475; font-size: 2vh; font-weight: 600; margin-top: 0px;">Apartment</p>
                                <a href="room_flex.php?room_img=h5_small_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5" style=" background-color:transparent; color:#1c1c1c; border:1px solid gray ;" class=" waves-effect waves-light-gray btn-small ">Book</a>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="cols 12 m12 l12" style="padding: 10px;">
                        <p style="color: #727475; font-size: 3.5vh; margin-bottom: 15px; margin-top: 0px;">Search</p>
                        <nav style="box-shadow: none; border: 1px solid lightgray;">
                            <div class="nav-wrapper " style="background-color: #f9f9f9; ">
                            <form action="http://google.com/search"  target="_blank">
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

                            <a href="room_gallery.php">
                                <p style="border-bottom: 1px solid lightgray;padding: 5px; color: #a3a3a3; font-size: 2.4vh; margin-bottom: 15px;font-weight: lighter;  margin-top: 0px;">Luxury Hotel</p>
                            </a>

                            <a href="news_r_sidebar.php">
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

                            </div>

                        </div>
                    </div>


                </div>

            </div>
        </div>


        <!-- similar rooms section ============================================================== -->
        <div class="row" style="margin-top: 15vh; ">
            <div class="col s12 m12 l12" style="margin-bottom: 10px;">
                <P style="font-family: 'Poppins', sans-serif; color: #727475; font-size: 6.5vh;;margin-bottom: 0px; margin-top: 0px; font-weight: lighter;">
                    Similar Rooms</P>
                <hr style="width: 70px;" class="left">
            </div>
            <div class="col s12 m4 l4 ">
                <div class="card " style="height: 87vh;">
                    <div class="card-image">
                        <img src="img/h7_s_card_4.jpg" style="height: 40vh;">
                        <p style=" padding: 15px; font-family: 'Poppins', sans-serif; font-size: 1.7vh; margin: 2px;" class="card-title">
                            HOTEL LONDON
                            <i style="color:white;" class="fas fa-star "></i>
                            <i style="color: white;" class="fas fa-star"></i>
                            <i style="color: white;" class="fas fa-star"></i>
                            <i style="color: white;" class="fas fa-star"></i>
                            <i style="color: white;" class="fas fa-star"></i>

                        </p>
                    </div>
                    <div class="card-content">
                        <p style="font-family: 'Poppins', sans-serif; color: #727475; font-size: 5vh;  margin-top: 0px; font-weight: 100;">
                            Apartment</p>
                        <p style=" color:gray; text-align:left; margin-top: 10px; "><i class="far fa-user-circle"></i> 5 GUESTS <i style="margin-left:20px;" class="fas fa-ruler-combined"></i>70 ft2</p>
                        <p style="margin-top: 10px; color: #a3a3a3;line-height: 27px; letter-spacing:0.5px; font-size: 2.3vh;font-weight: lighter; font-family: 'Poppins', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.
                        </p>
                        <a href="room_flex.php?room_img=h7_s_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5" class="waves-effect waves-light-red btn" style="margin-top: 4vh; background-color: transparent; color: #727475; box-shadow: none; border: 1px solid lightgray;">
                            BOOK NOW FROM 80$ </a>
                    </div>

                </div>
            </div>

            <div class="col s12 m4 l4 ">
                <div class="card " style="height: 87vh;">
                    <div class="card-image">
                        <img src="img/h7_parllax_bg.jpg" style="height: 40vh;">
                        <p style=" padding: 15px; font-family: 'Poppins', sans-serif; font-size: 1.7vh; margin: 2px;" class="card-title">
                            HOTEL NEW YORK
                            <i style="color:white;" class="fas fa-star "></i>
                            <i style="color: white;" class="fas fa-star"></i>
                            <i style="color: white;" class="fas fa-star"></i>


                        </p>
                    </div>
                    <div class="card-content">
                        <p style="font-family: 'Poppins', sans-serif; color: #727475; font-size: 5vh;  margin-top: 0px; font-weight: 100;">
                            Luxury Room</p>
                        <p style=" color:gray; text-align:left; margin-top: 10px; "><i class="far fa-user-circle"></i> 2 GUESTS <i style="margin-left:20px;" class="fas fa-ruler-combined"></i>50 ft2</p>
                        <p style="margin-top: 10px; color: #a3a3a3;line-height: 27px; letter-spacing:0.5px; font-size: 2.3vh;font-weight: lighter; font-family: 'Poppins', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.
                        </p>
                        <a href="room_flex.php?room_img=h7_parllax_bg.jpg&room_type=Luxury Room&room_price=100&hotel_name=HOTEL NEW YORK&star=4" class="waves-effect waves-light-red btn" style="margin-top: 4vh; background-color: transparent; color: #727475; box-shadow: none; border: 1px solid lightgray;">
                            BOOK NOW FROM 100$ </a>
                    </div>

                </div>
            </div>

            <div class="col s12 m4 l4 ">
                <div class="card " style="height: 87vh;">
                    <div class="card-image">
                        <img src="img/h7_s_card_6.jpg" style="height: 40vh;">
                        <p style=" padding: 15px; font-family: 'Poppins', sans-serif; font-size: 1.7vh; margin: 2px;" class="card-title">
                            HOTEL LONDON
                            <i style="color:white;" class="fas fa-star "></i>
                            <i style="color: white;" class="fas fa-star"></i>
                            <i style="color: white;" class="fas fa-star"></i>
                            <i style="color: white;" class="fas fa-star"></i>
                            <i style="color: white;" class="fas fa-star"></i>

                        </p>
                    </div>
                    <div class="card-content">
                        <p style="font-family: 'Poppins', sans-serif; color: #727475; font-size: 5vh;  margin-top: 0px; font-weight: 100;">
                            Room with View</p>
                        <p style=" color:gray; text-align:left; margin-top: 10px; "><i class="far fa-user-circle"></i> 4 GUESTS <i style="margin-left:20px;" class="fas fa-ruler-combined"></i>40 ft2</p>
                        <p style="margin-top: 10px; color: #a3a3a3;line-height: 27px; letter-spacing:0.5px; font-size: 2.3vh;font-weight: lighter; font-family: 'Poppins', sans-serif;">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel molestie nisl. Duis ac mi leo.
                        </p>
                        <a href="room_video.php?room_img=h7_s_card_6.jpg" class="waves-effect waves-light-red btn" style="margin-top: 4vh; background-color: transparent; color: #727475; box-shadow: none; border: 1px solid lightgray;">
                            BOOK NOW FROM 120$ </a>
                    </div>

                </div>
            </div>


        </div>

    </div>
<?php
    } else {
?>
    <div class="row">Sorry</div>

<?php
    }
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
?>
</body>

</html>

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .tool {
        width: 30vw;
    }

    .header_row {
        margin: 60px;
    }


    @media only screen and (max-width: 600px) {
        .header_row {
            margin: 5px;
        }

        .tool {
            width: 80vw;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('.parallax').parallax();
        $('.tooltipped').tooltip({
            html: true
        });

        $('.datepicker').datepicker();

    });

    let date = new Date();
    var months = ["Jan", "Feb", "Mar", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
    let mon = months[date.getMonth()];

    document.getElementById("check_in").placeholder = date.getDate() + " " + mon;
    document.getElementById("check_out").placeholder = date.getDate() + 1 + " " + mon;

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true

    });
    setInterval(function() {
        $('.carousel.carousel-slider').carousel('next');
    }, 3000);
</script>