<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>MOTEL-Home 2</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>
    <!--   MAIN HEADER SECTION STARTS HERE -----------------------------------------------------------------------------  -->
    <div class="row center-align headr_sec" style=" height:55vh; background: url(img/h7_header_bg.jpg) no-repeat 50% 50%;
     background-size: cover;">

        <div class="conatiner  " style="height:55vh;background-color:rgba(0,0,0 ,0.5) ;  padding:10px;">
            <h5 class=" wobble-hor-bottom" style="color: #f9f9f9; font-size: 4vh; margin-top: 13vh; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">
                ENJOY A LUXARY<br><br>EXPERIANCE</h5>
            <a href="#rooms_sec" style="margin: 10px; background-color: transparent; border:1px solid gray" class=" waves-effect waves-light btn-large z-depth-5 ">ROOMS</a>

            <div class="row">
                <a href="#rooms_sec" class=" btn-floating btn waves-effect waves-light  z-depth-5" style="background-color:rgba(0,0,0 ,0.7) ; margin-top: 5.8vh;"><i class="material-icons">arrow_downward</i></a>
            </div>
        </div>
        <div class="row">
            <div class="col s6 m6 l6 ">
                <p class="left" style="color: gray; font-weight: 600;font-size: 2vh;">ADDRESS : 143 Avenue, Miami ( Florida )</p>

            </div>
            <div class="col s6 m6 l6 ">
                <p class="right" style="color: gray; font-weight: 600; font-size: 2vh;">EMAIL : booking@hotelresort.com</p>

            </div>

        </div>
    </div>

    <!-- CHECK ROOM  AND PARLLAX SECTION STRATS HERE --------------------------------------------------------------------------- -->

    <div class="row center-align check_sec">
        <div class="parallax-container" style="width:100%">

            <div class="parallax">
                <img style="filter:brightness(50%)" src="img/h7_parllax_bg_check.jpg" alt="Parallax">

            </div>
            <div class="row" style=" height:100%;">
                <div class="col s12 m4 l4" style="  padding:40px; color:#f9f9f9;height:100%; ">
                    <h1 style="font-size: 10vh;">Holiday Enjoy</h1>
                    <p> X<br><br>
                        Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Aliquam vitae
                        imperdiet lorem. Quisque sagittis, sem a
                        mattis molestie velit.
                    </p>
                    <a href="promotions.php#suites" style="margin-top: 20px; background-color: transparent; border:1px solid gray;" class=" waves-effect waves-light btn ">ROOMS E SUIT</a>

                </div>

                <div class="col s12 m4 l4 center-align" style=" margin-top:3.5vh;">
                    <div class="card " style="background-color: #1c1c1c; ">
                        <div class="card-content white-text ">
                            <span class="card-title" style="font-size: 4vh; font-weight: 400;">Search Rooms</span>
                        </div>
                        <div class="card-action white">
                            <div class="row">
                                <div class="col s6 m6 l6">
                                    <p style="font-size: 2.5vh;">Check-In</p>
                                    <hr>
                                    <Input id="check_in" type="text" style="margin-top: 10px; border-style: none; color: #1c1c1c; text-align: center; font-size:3vh" placeholder="" class="datepicker">
                                </div>
                                <div class="col s6 m6 l6">
                                    <p style="font-size: 2.5vh;">Check-Out</p>
                                    <hr>
                                    <Input id="check_out" type="text" style="margin-top: 10px; border-style: none; color: #1c1c1c; text-align: center; font-size:3vh" class="datepicker">
                                </div>
                            </div>
                            <hr style="width: 50%;">
                            <div class="row">
                                <Input type="number" style="margin-top: 10px; border-style: none; color: black; text-align: center; font-size:3vh" placeholder="1 GUEST">
                                <br>
                                <a href="room_gallery.php" style="margin-top: 40px; width: 90%; background-color: #1c1c1c;  " class=" waves-effect waves-light btn ">Check Availibilty</a>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4 l4 center-align" style="padding:3.5vw; color:#f9f9f9;height:100%; ">
                    <h1 style="font-size: 5vh;">Best Season Price</h1>
                    <p style="font-size: 2.5vh;"> X<br>
                        VILLA AURORA
                        <p style="font-size: 2vh;">21 Jan to 27 Jan</p>
                        <p style="font-size: 5vh; font-weight: 600;"> 230 $</p>
                    </p>

                    <a href="promotions.php" style="margin-top: 20px; background-color: transparent; border:1px solid gray;" class=" waves-effect waves-light btn ">ALL PROMOTIONS</a>

                </div>
            </div>


        </div>
    </div>

    <!-- OUR ROOMS SECTIONS STARTS HERE --------------------------------------------------------------------------------------- -->

    <div  class="row center-align rooms_sec">
        <p style="color:gray; font-size: 2vh;">PROMOTIONS</p>
        <hr style="width: 30px;">
        <h1 style="color:#727475; font-size: 8vh;">Our Rooms</h1>
        <div id="rooms_sec" class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image ">
                        <img src="img/h7_s_card_1.jpg">
                        <p class="card-title valign-wrapper" style="bottom:0; width: 100%; height:0px; background-color:rgba(0,0,0 ,0.1) ; backdrop-filter: blur(5px); text-align:left;  font-size: 2.2vh;">
                            <i class="fas fa-user-circle fa-lg" style="margin-right:5px;"></i>1 GUEST
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-ruler-combined fa-lg"></i> 15
                            ft2
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-wallet fa-lg"></i> From 30 $
                        </p>

                        <p class="card-title" style="height: 90%; width:100%; ">
                            <a href="room_flex.php?room_img=h7_s_card_1.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style="margin-top: 20px; background-color:rgba(0,0,0 ,0.7) ;" class=" waves-effect waves-light btn ">Small Room</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image ">
                        <img src="img/h7_s_card_2.jpg">
                        <p class="card-title valign-wrapper" style="bottom:0; width: 100%; height:0px; background-color:rgba(0,0,0 ,0.1) ; backdrop-filter: blur(5px); text-align:left;  font-size: 2.2vh;">
                            <i class="fas fa-user-circle fa-lg" style="margin-right:5px;"></i>4 GUESTS
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-ruler-combined fa-lg"></i> 40
                            ft2
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-wallet fa-lg"></i> From 120 $
                        </p>

                        <p class="card-title" style="height: 90%; width:100%; ">
                            <a href="room_video.php" style="margin-top: 20px; background-color:rgba(0,0,0 ,0.7) ;" class=" waves-effect waves-light btn ">Room With View</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image ">
                        <img src="img/h7_s_card_4.jpg">
                        <p class="card-title valign-wrapper" style="bottom:0; width: 100%; height:0px; background-color:rgba(0,0,0 ,0.1) ; backdrop-filter: blur(5px); text-align:left;  font-size: 2.2vh;">
                            <i class="fas fa-user-circle fa-lg" style="margin-right:5px;"></i>5 GUESTS
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-ruler-combined fa-lg"></i> 70
                            ft2
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-wallet fa-lg"></i> From 80 $
                        </p>

                        <p class="card-title" style="height: 90%; width:100%; ">
                            <a href="room_flex.php?room_img=h7_s_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5" style="margin-top: 20px; background-color:rgba(0,0,0 ,0.7) ;" class=" waves-effect waves-light btn ">Apartment</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image ">
                        <img src="img/h7_s_card_5 (2).jpg">
                        <p class="card-title valign-wrapper" style="bottom:0; width: 100%; height:0px; background-color:rgba(0,0,0 ,0.1) ; backdrop-filter: blur(5px); text-align:left;  font-size: 2.2vh;">
                            <i class="fas fa-user-circle fa-lg" style="margin-right:5px;"></i>2 GUESTS
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-ruler-combined fa-lg"></i> 50
                            ft2
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-wallet fa-lg"></i> From 100 $
                        </p>

                        <p class="card-title" style="height: 90%; width:100%; ">
                            <a href="room_flex.php?room_img=h5_small_card_3.jpg&room_type=Luxury Room&room_price=100&hotel_name=HOTEL NEW YORK&star=4" style="margin-top: 20px; background-color:rgba(0,0,0 ,0.7) ;" class=" waves-effect waves-light btn ">Luxary Room</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image ">
                        <img src="img/h7_s_card_6.jpg" style="height: 40.3vh;">
                        <p class="card-title valign-wrapper" style="bottom:0; width: 100%; height:0px; background-color:rgba(0,0,0 ,0.1) ; backdrop-filter: blur(5px); text-align:left;  font-size: 2.2vh;">
                            <i class="fas fa-user-circle fa-lg" style="margin-right:5px;"></i>2 GUESTS
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-ruler-combined fa-lg"></i> 23
                            ft2
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-wallet fa-lg"></i> From 25 $
                        </p>

                        <p class="card-title" style="height: 90%; width:100%; ">
                            <a href="room_flex.php?room_img=h7_s_card_6.jpg&room_type=Double Room&room_price=25&hotel_name=HOTEL LONDON&star=5" style="margin-top: 20px; background-color:rgba(0,0,0 ,0.7) ;" class=" waves-effect waves-light btn ">Double Room</a>
                        </p>
                    </div>

                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-image ">
                        <img class="responsive-img" src="img/h7_s_card_7.jpg" style="height: 40.3vh; object-fit:contain;">
                        <p class="card-title valign-wrapper" style="bottom:0; width: 100%; height:0px; background-color:rgba(0,0,0 ,0.1) ; backdrop-filter: blur(5px); text-align:left;  font-size: 2.2vh;">
                            <i class="fas fa-user-circle fa-lg" style="margin-right:5px;"></i>3 GUESTS
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-ruler-combined fa-lg"></i> 30
                            ft2
                            <i style="margin-left:10%; margin-right:5px; " class="fas fa-wallet fa-lg"></i> From 30 $
                        </p>

                        <p class="card-title" style="height: 90%; width:100%; ">
                            <a href="room_flex.php?room_img=h7_s_card_7.jpg&room_type=Family Room&room_price=30&hotel_name=HOTEL BERLIN&star=4" style="margin-top: 20px; background-color:rgba(0,0,0 ,0.7) ;" class=" waves-effect waves-light btn ">Family Room</a>
                        </p>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <!-- carsoule section starts here  -->
    <div class="row car_sec">

        <div class="col s12 m6 l6">

            <div class="carousel carousel-slider ">
                <a class="carousel-item" href="#one!"><img src="img/h7_parllax_small_bg1.jpg"></a>
                <a class="carousel-item" href="#two!"><img src="img/h7_parllax_small_bg2.jpg"></a>
                <a class="carousel-item" href="#three"><img src="img/h7_parllax_small_bg3.jpg"></a>
            </div>
        </div>
        <div class="col s12 m6 l6 center-align" style="padding: 47px;">
            <h1 style="color:#727475; font-size: 4vh;">Best Season Price</h1>
            <p>X</p>
            <p style="color: gray; font-size: 2.2vh; font-weight: 500;">Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Aliquam vitae imperdiet lorem. Quisque sagittis, sem a mattis molestie,
                velit purus blandit neque
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae imperdiet lorem.
                Quisque sagittis, sem a mattis molestie, velit purus blandit neque</p>
            <a href="promotions.php" style="margin-top: 10px; background-color:transparent; color:#1c1c1c; border:1px solid gray ;" class=" waves-effect waves-light-gray btn ">All Promotions</a>

        </div>
    </div>

    <div class="row center-align small_rooms_sec ">
        <div class="col s12 m4 l4">
            <div class=" valign-wrapper">
                <div class="row valign-wrapper">
                    <div class="col s6">
                        <img src="img/h7_parllax_small_bg2.jpg" alt="" class=" responsive-img">
                        <!-- notice the "circle" class -->
                    </div>
                    <div class="col s6" style="padding:0px;">
                        <p style="margin-top: 0px; font-weight: 600; color: #727475;">Small Room</p>
                        <a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style=" background-color:transparent; color:#1c1c1c; border:1px solid gray ;" class=" waves-effect waves-light-gray btn-small ">Book</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class=" valign-wrapper">
                <div class="row valign-wrapper">
                    <div class="col s6">
                        <img src="img/h7_parllax_small_bg3.jpg" alt="" class=" responsive-img">
                        <!-- notice the "circle" class -->
                    </div>
                    <div class="col s6" style="padding:0px;">
                        <p style="margin-top: 0px; font-weight: 600; color: #727475;">Room with View</p>
                        <a href="room_video.php" style=" background-color:transparent; color:#1c1c1c; border:1px solid gray ;" class=" waves-effect waves-light-gray btn-small ">Book</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class=" valign-wrapper">
                <div class="row valign-wrapper">
                    <div class="col s6">
                        <img src="img/h7_sm-sam_card3.jpg" alt="" class=" responsive-img">
                        <!-- notice the "circle" class -->
                    </div>
                    <div class="col s6" style="padding:0px;">
                        <p style="margin-top: 0px; font-weight: 600; color: #727475;">Apartment</p>
                        <a  href="room_flex.php?room_img=h5_small_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5" style=" background-color:transparent; color:#1c1c1c; border:1px solid gray ;" class=" waves-effect waves-light-gray btn-small ">Book</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row center-align" style="padding:10px">
        <p style="color: gray; font-size: 2.1vh;">HOTEL LUXURY</p>
        <hr style="width: 40px;">
        <h1 style="font-size: 8vh; color:#727475; margin-top: 3px;">Our Services</h1>

        <div class="container">
            <div class="row ">
                <div class="col s12 m6 l6">
                    <p style="text-align: left; color:gray; font-size: 2.3vh; font-weight: 400;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae imperdiet lorem.
                        Quisque sagittis, sem a mattis molestie, velit purus blandit neque lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Aliquam vitae imperdiet lorem.
                        Quisque sagittis, sem a mattis molestie, velit purus blandit neque
                    </p>
                </div>
                <div class="col s12 m6 l6">
                    <p style="text-align: left; color:gray;font-size: 2.3vh; font-weight: 400;"">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vitae imperdiet lorem.
                     Quisque sagittis, sem a mattis molestie, velit purus blandit neque lorem ipsum dolor sit amet,
                     consectetur adipiscing elit. Aliquam vitae imperdiet lorem. 
                    Quisque sagittis, sem a mattis molestie, velit purus blandit neque
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class=" row center-align" style=" width: 95%;  margin-top:10vh;">
                        <div class="carousel carousel-slider">


                            <div class=" carousel-item  " style="  width: 100%;
    height: 80vh;
    background: url(img/h7_parllax_contact3.jpg) no-repeat 50% 50%  ;
    opacity: 0.2;
    backdrop-filter: blur(40px);
    background-size: cover;">
                                <!-- second card -->
                            </div>
                            <div class=" carousel-item  " style="  width: 100%;
    height: 80vh;
    background: url(img/h7_parllax_contact1.jpg) no-repeat 50% 50%  ;
    opacity: 0.2;
    backdrop-filter: blur(40px);
    background-size: cover;">
                                <!-- second card -->
                            </div>

                            <div class=" carousel-item " style=" width: 100%;
    height: 80vh;
    background: url(img/h7_parllax_contact2.jpg) no-repeat 50% 50%;
    background-size: cover;">
                            </div>


                            <div class=" carousel-fixed-item  center-align" style="   padding:0px">
                                <div class="row contact_card">
                                    <div class="col s4 m4 l4"></div>
                                    <div class="card col s12 m4 l4 center-align" style=" border-radius:10px;  background-color:rgba(0,0,0 ,0.7) ; backdrop-filter: blur(30px);  ">
                                        <div class="card-content white-text">
                                            <p style="font-weight: 500; ">Contact</p>
                                            <form action="thanks.php">
                                            <span class="card-title" style="margin-top:1vh;   font-weight: 700;">Get In Touch</span>
                                            <br>
                                            <input  class="validate" required placeholder="Name" id="first_name" type="text" style="border:1px solid gray; width: 80%; color: #f9f9f9; background-color:transparent; text-align: center; ">
                                            <br>
                                            <input placeholder="Email" required id="first_name" type="email" class="validate" style="border:1px solid gray; width: 80%; color: #f9f9f9; background-color:transparent;  text-align: center;">
                                            <br>
                                            <textarea placeholder="message" required id="first_name" type="email" class="validate" style=" overflow-y: auto;  resize: none;width: 80%; border:1px solid gray; height:10vh; color: #f9f9f9; background-color:transparent; text-align: center;"></textarea>
                                            <br>
                                            <button type="submit" style="  background-color: transparent; border: 1px solid #727475; width: 70%; margin-top: 10px; width: 50%;" class=" waves-effect waves-light btn z-depth-5 ">SEND NOW</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col s4 m4 l4"></div>

                                </div>
                            </div>
                        </div>

                </div>








                <div class="row center-align hide-on-med-and-down" style="margin-top: 5vh; margin-bottom: 90vh;">
                    <p style="color: gray; font-size: 2.3vh;">BLOG</p>
                    <hr style="width: 30px;">
                    <h1 style="color: #727475; font-size: 8vh; margin-top:1px;">Our News</h1>
                    <div class="col s12 m4 l4">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card " style="height: 60vh;">
                                    <div class="card-image">
                                        <img class="responsive-img" src="img/h7_blog_card_1.jpg">
                                        <span class="card-title" style="font-size: 2.2vh;">Relax Area </span>
                                    </div>

                                    <div class="card-content" style="background-color: #f9f9f9;">
                                        <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Relax Area</p>
                                        <p style=" color:gray; text-align:left;  margin-top: 30px; font-weight: 600;">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                        <p style=" color:gray; text-align:left; margin-top: 10px; "> <a  href="news_full_w.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="row" style="margin-top: 0px;">
                            <div class="col s12 m12 l12 center-align ">

                                <div class="col s12 m12 l12">
                                    <div class="card " style="height: 65vh;">
                                        <div class="card-content" style="background-color: #f9f9f9;">
                                            <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Bar</p>
                                            <p style=" color:gray; text-align:left;  margin-top: 30px; font-weight: 600;">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                            <p style=" color:gray; text-align:left; margin-top: 10px; "> <a  href="bar.php" style="align-self:left; 
                                        background-color: transparent; color:#1c1c1c; 
                                         margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                                        </div>

                                        <div class="card-image">
                                            <img class="responsive-img" src="img/h7_blog_card_2.jpg">
                                            <span class="card-title" style="font-size: 2.2vh;">Bar </span>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4 l4">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card " style="height: 60vh;">
                                    <div class="card-image">
                                        <img class="responsive-img" src="img/h7_blog_card_3.jpg">
                                        <span class="card-title" style="font-size: 2.2vh;">Resturent </span>
                                    </div>

                                    <div class="card-content" style="background-color: #f9f9f9;">
                                        <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Resturent</p>
                                        <p style=" color:gray; text-align:left;  margin-top: 30px; font-weight: 600;">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                        <p style=" color:gray; text-align:left; margin-top: 10px; "> <a  href="restaurant.php" style="align-self:left; background-color: transparent; color:#1c1c1c;  margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>



                <div class="show-on-small row center-align" style=" display:none; margin-top: 5vh;">
                    <p style="color: gray; font-size: 2.3vh;">BLOG</p>
                    <hr style="width: 30px;">
                    <h1 style="color: #727475; font-size: 8vh; margin-top:1px;">Our News</h1>
                    <div class="col s12 m4 l4">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card ">
                                    <div class="card-image">
                                        <img class="responsive-img" src="img/h7_blog_s_card_3.jpg">
                                        <span class="card-title" style="font-size: 2.2vh;">Relax Area </span>
                                    </div>

                                    <div class="card-content" style="background-color: #f9f9f9;">
                                        <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Relax Area</p>
                                        <p style=" color:gray; text-align:left;  margin-top: 30px; font-weight: 600;">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                        <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="news_full_w.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card ">
                                    <div class="card-image">
                                        <img class="responsive-img" src="img/h7_blog_s_card_2.jpg">
                                        <span class="card-title" style="font-size: 2.2vh;">Bar </span>
                                    </div>

                                    <div class="card-content" style="background-color: #f9f9f9;">
                                        <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Bar</p>
                                        <p style=" color:gray; text-align:left;  margin-top: 30px; font-weight: 600;">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                        <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="bar.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <div class="card ">
                                    <div class="card-image">
                                        <img class="responsive-img" src="img/h7_blog_s_card_1.jpg">
                                        <span class="card-title" style="font-size: 2.2vh;">Resturent</span>
                                    </div>

                                    <div class="card-content" style="background-color: #f9f9f9;">
                                        <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Resturent</p>
                                        <p style=" color:gray; text-align:left;  margin-top: 30px; font-weight: 600;">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Aenean egestas magna at porttitor vehicula nullam augue Lorem ipsum dolor sit.</p>
                                        <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="restaurant.php" style="align-self:left;
                                         background-color: transparent; color:#1c1c1c; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>



                </div>


                <?php
                include_once 'partial/scripts.php';
                include_once 'partial/footer.php';
                ?>
</body>

</html>








<!-- SCRIPTS AND STYLES FOR THIS PAGE ------------------------------------------------------------->


<script>
    let date = new Date();
    var months = ["Jan", "Feb", "Mar", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
    let mon = months[date.getMonth()];

    document.getElementById("check_in").placeholder = date.getDate() + " " + mon;
    document.getElementById("check_out").placeholder = date.getDate() + 1 + " " + mon;

    $(document).ready(function() {
        $('.datepicker').datepicker();
    });
    $(document).ready(function() {
        $('.parallax').parallax();
    });
    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
    setInterval(function() {
        $('.carousel.carousel-slider').carousel('next');
    }, 3000);
</script>

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .contact_card {
        margin-top: 20px;
    }

    .small_rooms_sec {
        margin: 60px;
        border-bottom: 1px solid lightgray;
    }

    .car_sec {
        background-color: #f9f9f9;
        margin: 30px
    }

    .check_sec {
        margin: 10px;
        margin-top: 120px;
    }

    .rooms_sec {
        margin-top: 100px;
        margin: 30px;
    }

    .headr_sec {
        margin: 20px;
        margin-top: 0px;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (max-width: 600px) {
        .headr_sec {
            margin: 0px;

        }

        .check_sec {
            margin: 0px;
            margin-top: 50px;
        }

        .rooms_sec {
            margin-top: 50px;
            margin: 0px;
        }

        .car_sec {
            margin: 0px
        }

        .small_rooms_sec {
            margin: 20px;
        }

        .parallax-container {
            height: auto;
        }


    }


    .wobble-hor-bottom:hover {
        -webkit-animation: wobble-hor-bottom 0.8s both;
        animation: wobble-hor-bottom 0.8s both;
    }

    .flip-horizontal-bottom:hover {
        -webkit-animation: flip-horizontal-bottom 0.4s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
        animation: flip-horizontal-bottom 0.4s cubic-bezier(0.455, 0.030, 0.515, 0.955) both;
    }

    /* ----------------------------------------------
 * Generated by Animista on 2020-12-14 16:17:13
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
 * ----------------------------------------
 * animation flip-horizontal-bottom
 * ----------------------------------------
 */
    @-webkit-keyframes flip-horizontal-bottom {
        0% {
            -webkit-transform: rotateX(0);
            transform: rotateX(0);
        }

        100% {
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
        }
    }

    @keyframes flip-horizontal-bottom {
        0% {
            -webkit-transform: rotateX(0);
            transform: rotateX(0);
        }

        100% {
            -webkit-transform: rotateX(-180deg);
            transform: rotateX(-180deg);
        }
    }

    /* ----------------------------------------------
 * Generated by Animista on 2020-12-14 16:23:15
 * Licensed under FreeBSD License.
 * See http://animista.net/license for more info. 
 * w: http://animista.net, t: @cssanimista
 * ---------------------------------------------- */

    /**
 * ----------------------------------------
 * animation wobble-hor-bottom
 * ----------------------------------------
 */
    @-webkit-keyframes wobble-hor-bottom {

        0%,
        100% {
            -webkit-transform: translateX(0%);
            transform: translateX(0%);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        15% {
            -webkit-transform: translateX(-30px) rotate(-6deg);
            transform: translateX(-30px) rotate(-6deg);
        }

        30% {
            -webkit-transform: translateX(15px) rotate(6deg);
            transform: translateX(15px) rotate(6deg);
        }

        45% {
            -webkit-transform: translateX(-15px) rotate(-3.6deg);
            transform: translateX(-15px) rotate(-3.6deg);
        }

        60% {
            -webkit-transform: translateX(9px) rotate(2.4deg);
            transform: translateX(9px) rotate(2.4deg);
        }

        75% {
            -webkit-transform: translateX(-6px) rotate(-1.2deg);
            transform: translateX(-6px) rotate(-1.2deg);
        }
    }

    @keyframes wobble-hor-bottom {

        0%,
        100% {
            -webkit-transform: translateX(0%);
            transform: translateX(0%);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
        }

        15% {
            -webkit-transform: translateX(-30px) rotate(-6deg);
            transform: translateX(-30px) rotate(-6deg);
        }

        30% {
            -webkit-transform: translateX(15px) rotate(6deg);
            transform: translateX(15px) rotate(6deg);
        }

        45% {
            -webkit-transform: translateX(-15px) rotate(-3.6deg);
            transform: translateX(-15px) rotate(-3.6deg);
        }

        60% {
            -webkit-transform: translateX(9px) rotate(2.4deg);
            transform: translateX(9px) rotate(2.4deg);
        }

        75% {
            -webkit-transform: translateX(-6px) rotate(-1.2deg);
            transform: translateX(-6px) rotate(-1.2deg);
        }
    }
</style>