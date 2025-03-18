<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Motel-Promotions</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>
    <div class="row valign-wrapper" style="  margin-top: 
     0px;  background: url(img/promotions_header_bg.jpg) no-repeat 50% 50%;
     background-size:cover ;">

        <div class="conatiner center-align  " style=" height: auto; width: 100%; background-color:rgba(0,0,0 ,0.5) ;  padding:10px;">
            <h5 style="color: #f9f9f9; font-size: 7vh; margin-top: 10vh; font-family: 'Poppins', sans-serif;">
                PROMOTIONS</h5>
            <div class="row">
                <a href="#suites" class=" btn-floating btn waves-effect waves-light  z-depth-5" style="background-color:rgba(0,0,0 ,0.7) ; margin-top: 5vh;"><i class="material-icons">arrow_downward</i></a>
            </div>
        </div>

    </div>

    <div class="row serve_section">
        <div class="col s12 m4 l4">
            <div class="card">
                <div class="card-image">
                    <img src="img/about2_card_bg1.jpg" style="filter: brightness(90%);">
                    <p class="card-title" style=" margin-bottom: 0px; width: 100%; text-align: center; 
                            font-family: 'Poppins', sans-serif; font-size: 3.5vh; font-weight: lighter; line-height: 1vh;">
                             <a href="restaurant.php" style="color: #f9f9f9;">RESTAURANT</a></p>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l4 ">
            <div class="card">
                <div class="card-image">
                    <img src="img/h5_small_card_1.jpg" style="filter: brightness(90%);">
                    <p class="card-title" style=" margin-bottom: 0px; width: 100%; text-align: center; 
                            font-family: 'Poppins', sans-serif; font-size: 3.5vh; font-weight: lighter; line-height: 1vh;">
                            <a href="room_gallery.php" style="color: #f9f9f9;">BEST ROOMS</a></p>
                </div>

            </div>
        </div>

        <div class="col s12 m4 l4 ">
            <div class="card">
                <div class="card-image">
                    <img src="img/promotions_card_bg1.jpg" style="filter: brightness(90%);">
                    <p class="card-title" style=" margin-bottom: 0px; width: 100%; text-align: center; 
                            font-family: 'Poppins', sans-serif; font-size: 3.5vh; font-weight: lighter; line-height: 1vh;">
                            <a href="bar.php" style="color: #f9f9f9;">Bar</a></p>
                </div>

            </div>
        </div>

    </div>

    <div class="row center-align serve_section" style="background-color: #f9f9f9; padding:20px">
        <p style="color:#a3a3a3; font-size: 2vh; line-height:10px">ROOMS</p>
        <hr style="width: 40px;">
        <p style="color:#727475; font-size: 8vh; margin-top: 0px; "> Promotions</p>
        <!-- left -->
        <div class="col s12 m6 l6 " style="margin-top: 3vh;">
            <div class="card">
                <div class="card-image">
                    <img src="img/promotions_big_card_bg.jpg" style="height: auto; filter: brightness(80%);">
                    <div class="card-title " style="width: 100%; height: 70%;">
                        <a class="waves-effect waves-light  modal-trigger " href="#modal1" style=" text-align: center;  color:white"><i class="far fa-play-circle fa-2x"></i></a>
                    </div>
                </div>

            </div>
        </div>

        <!-- right -->
        <div id="suites" class="col s12 m6 l6">
            <div class="card">
                <div class="card-content" style="padding: 20px;">
                    <p style="color:#a3a3a3; font-size: 2vh; line-height:10px">New</p>
                    <p style="color:#727475; font-size: 5vh; margin-top: 0px;"> Suites</p>
                    <div class="row center-align " style="padding: 10px; ">
                        <p class="left" style="color:#727475; font-size: 3vh; line-height:10px">Small Room</p><span style="color:#a3a3a3; font-size: 2.7vh; line-height:10px" class="right">$30</span><br>
                        <p class="left" style="color:#a3a3a3; font-size: 2.2vh; line-height:20px">Lorem ipsum dolor sit</p><span class="right" style=" line-height:10px; border: 1px solid #a3a3a3; color: #a3a3a3; padding: 2px;">new</span>
                    </div>
                    <div class="row center-align " style="padding: 10px; ">
                        <p class="left" style="color:#727475; font-size: 3vh; line-height:10px">Family Room</p><span style="color:#a3a3a3; font-size: 2.7vh; line-height:10px" class="right">$30</span><br>
                        <p class="left" style="color:#a3a3a3; font-size: 2.2vh; line-height:20px">Lorem ipsum dolor sit</p><span class="right" style=" line-height:10px; border: 1px solid #a3a3a3; color: #a3a3a3; padding: 2px;">new</span>
                    </div>
                    <div class="row center-align " style="padding: 10px; ">
                        <p class="left" style="color:#727475; font-size: 3vh; line-height:10px">Double Room</p><span style="color:#a3a3a3; font-size: 2.7vh; line-height:10px" class="right">$25</span><br>
                        <p class="left" style="color:#a3a3a3; font-size: 2.2vh; line-height:20px">Lorem ipsum dolor sit</p><span class="right" style=" line-height:10px; border: 1px solid #a3a3a3; color: #a3a3a3; padding: 2px;">new</span>
                    </div>
                    <div class="row center-align " style="padding: 10px; ">
                        <p class="left" style="color:#727475; font-size: 3vh; line-height:10px"> Luxury Room</p><span style="color:#a3a3a3; font-size: 2.7vh; line-height:10px" class="right">$100</span><br>
                        <p class="left" style="color:#a3a3a3; font-size: 2.2vh; line-height:20px">Lorem ipsum dolor sit</p><span class="right" style=" line-height:10px; border: 1px solid #a3a3a3; color: #a3a3a3; padding: 2px;">new</span>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <div class="row serve_section" id="rooms">
        <div class="col s12 m6 l6">
            <div class="valign-wrapper card-panel white " style="padding: 0px; border: 1px solid transparent; ">
                <div class="col s5 m5 l5" style="
                          height: 17vh;
                          background: url(img/h5_big_card.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                </div>
                <div class="col s8 m12 l12 center-align">
                    <p style="color: #727475; font-size: 2.7vh; font-weight: 300; margin-top: 0px;">SMALL ROOM</p>
                    <span style="background-color: #f6f6f6; color:#a3a3a3; padding:2px; font-size: 1.8vh;">
                    <a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style="color: #727475;">Book Now</a>
                </span>

                </div>
                <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 17vh; ">
                    <p style="text-align: center;  font-size: 3vh; margin-top: 10px;">$<span style="font-size: 5vh;">30</span></p>
                    <div class="row center-align">
                        <span style="text-align: center; background-color: red; color:#f6f6f6; padding:2px;"><a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style="color: #f9f9f9;">NEW</a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="valign-wrapper card-panel white " style="padding: 0px; border: 1px solid transparent; ">
                <div class="col s5 m5 l5" style="
                          height: 17vh;
                          background: url(img/h5_small_card_1.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                </div>
                <div class="col s8 m12 l12 center-align">
                    <p style="color: #727475; font-size: 2.7vh; font-weight: 300; margin-top: 0px;">DOUBLE ROOM</p>
                    <span style="background-color: #f6f6f6; color:#a3a3a3; padding:2px; font-size: 1.8vh;">
                    <a href="room_flex.php?room_img=h5_small_card_1.jpg&room_type=Double Room&room_price=25&hotel_name=HOTEL LONDON&star=5" style="color: #727475;">Book Now</a>
                </span>
                </div>
                
                <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 17vh; ">
                    <p style="text-align: center;  font-size: 3vh; margin-top: 10px;">$<span style="font-size: 5vh;">25</span></p>
                    <div class="row center-align">
                        <span style="text-align: center; background-color: red; color:#f6f6f6; padding:2px;">
                        <a href="room_flex.php?room_img=h5_small_card_1.jpg&room_type=Double Room&room_price=25&hotel_name=HOTEL LONDON&star=5" style="color: #f9f9f9;">
                        NEW
                        </a></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="valign-wrapper card-panel white " style="padding: 0px; border: 1px solid transparent; ">
                <div class="col s5 m5 l5" style="
                          height: 17vh;
                          background: url(img/h5_small_card_2.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                </div>
                <div class="col s8 m12 l12 center-align">
                    <p style="color: #727475; font-size: 2.7vh; font-weight: 300; margin-top: 0px;">FAMILY ROOM</p>
                    <span style="background-color: #f6f6f6; color:#a3a3a3; padding:2px; font-size: 1.8vh;">
                    <a href="room_flex.php?room_img=h5_small_card_2.jpg&room_type=Family Room&room_price=30&hotel_name=HOTEL BERLIN&star=4" style="color: #727475;">Book Now</a>
                </span>
                </div>
                <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 17vh; ">
                    <p style="text-align: center;  font-size: 3vh; margin-top: 10px;">$<span style="font-size: 5vh;">30</span></p>
                    <div class="row center-align">
                        <span style="text-align: center; background-color: red; color:#f6f6f6; padding:2px;">
                        <a href="room_flex.php?room_img=h5_small_card_2.jpg&room_type=Family Room&room_price=30&hotel_name=HOTEL BERLIN&star=4" style="color: #f9f9f9;">    
                         NEW</a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="valign-wrapper card-panel white " style="padding: 0px; border: 1px solid transparent; ">
                <div class="col s5 m5 l5" style="
                          height: 17vh;
                          background: url(img/h5_small_card_3.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                </div>
                <div class="col s8 m12 l12 center-align">
                    <p style="color: #727475; font-size: 2.7vh; font-weight: 300; margin-top: 0px;">LUXURY ROOM</p>
                    <span style="background-color: #f6f6f6; color:#a3a3a3; padding:2px; font-size: 1.8vh;">
                    <a href="room_flex.php?room_img=h5_small_card_3.jpg&room_type=Luxury Room&room_price=100&hotel_name=HOTEL NEW YORK&star=4" style="color: #727475;">Book Now</a>
                </span>
                </div>
                <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 17vh; ">
                    <p style="text-align: center;  font-size: 3vh; margin-top: 10px;">$<span style="font-size: 5vh;">100</span></p>
                    <div class="row center-align">
                    <span style="text-align: center; background-color: red; color:#f6f6f6; padding:2px;">
                    <a href="room_flex.php?room_img=h5_small_card_3.jpg&room_type=Luxury Room&room_price=100&hotel_name=HOTEL NEW YORK&star=4" style="color: #f9f9f9;">    
                         NEW</a>  
                    </span>                  
                        </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="valign-wrapper card-panel white " style="padding: 0px; border: 1px solid transparent; ">
                <div class="col s5 m5 l5" style="
                          height: 17vh;
                          background: url(img/h5_small_card_4.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                </div>
                <div class="col s8 m12 l12 center-align">
                    <p style="color: #727475; font-size: 2.7vh; font-weight: 300; margin-top: 0px;">APARTMENT</p>
                    <span style="background-color: #f6f6f6; color:#a3a3a3; padding:2px; font-size: 1.8vh;">
                    <a href="room_flex.php?room_img=h5_small_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5" style="color: #727475;">Book Now</a>
                </span>
                </div>
                <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 17vh; ">
                    <p style="text-align: center;  font-size: 3vh; margin-top: 10px;">$<span style="font-size: 5vh;">80</span></p>
                    <div class="row center-align">
                    <span style="text-align: center; background-color: red; color:#f6f6f6; padding:2px;">
                    <a href="room_flex.php?room_img=h5_small_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5"style="color: #f9f9f9;">    
                         NEW</a>  
                    </span>                    
                 </div>
                </div>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="valign-wrapper card-panel white " style="padding: 0px; border: 1px solid transparent; ">
                <div class="col s5 m5 l5" style="
                          height: 17vh;
                          background: url(img/h5_big_card.jpg) no-repeat 50% 50%  ;
                          background-size: cover;
                          ">
                </div>
                <div class="col s8 m12 l12 center-align">
                    <p style="color: #727475; font-size: 2.7vh; font-weight: 300; margin-top: 0px;">SMALL ROOM</p>
                    <span style="background-color: #f6f6f6; color:#a3a3a3; padding:2px; font-size: 1.8vh;">
                    <a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style="color: #727475;">Book Now</a>
                </span>

                </div>
                <div class="col s3 m3 l3 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 17vh; ">
                    <p style="text-align: center;  font-size: 3vh; margin-top: 10px;">$<span style="font-size: 5vh;">30</span></p>
                    <div class="row center-align">
                        <span style="text-align: center; background-color: red; color:#f6f6f6; padding:2px;"><a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style="color: #f9f9f9;">NEW</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- parrlaxx section starts here====================================================================================== -->

    <div class="row center-align " style="margin-top: 120px; margin-bottom: 0px;">
        <div class="parallax-container valign-wrapper" style="width:100%; height: auto;">

            <div class="parallax ">
                <img style="filter:brightness(40%)" src="img/h5_video_bg.jpg" alt="Parallax">
            </div>
            <div class="row  " style=" width: 100%; margin: 3vh; ">
                <div class="col s12 m3 l3" >
                    <div class="card  " style=" background-image: linear-gradient(to top, lightgrey 0%, lightgrey 1%, #e0e0e0 26%, #efefef 48%, #d9d9d9 75%, #bcbcbc 100%);">
                        <div class="card-content white-text">
                            <p style=" text-align: left; color: #1c1c1c; margin-bottom: 10px; font-size: 2.6vh; font-weight: 700;">BASIC</p>
                            <p style="text-align: left; color: #727475; font-size: 5.5vh; margin-bottom: 10px; margin-top: 0px;">$ 49.99</p>
                            <p style="text-align: left; color: #727475; font-size: 2vh; ">PER DAY</p>
                            <div style="margin-top:6vh; margin-bottom: 6vh;">
                                <p style="text-align: left; color: #a3a3a3; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr style="width: 80%; margin-left: 0px;">
                                <p style="text-align: left; color: #a3a3a3; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr style="width: 80%; margin-left: 0px;">
                                <p style="text-align: left; color: #a3a3a3; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr style="width: 80%; margin-left: 0px;">
                                <p style="text-align: left; color: #a3a3a3; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr style="width: 80%; margin-left: 0px;">

                            </div>
                            <p style="text-align: left; color: #a3a3a3; font-size: 2.5vh; 
                             margin-bottom:1vh;"><a href="news_single_post_r_sidebar.php" class="waves-effect waves-light btn-small " style="background-color: #1c1c1c;">READ MORE</a></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3" >
                    <div class="card white ">
                        <div class="card-content white-text" style="background-color: #1c1c1c;">
                            <div>
                                <p style=" text-align: left; color: #ecb616; margin-bottom: 10px; font-size: 2.6vh; font-weight: 700;">PREMIUM</p>
                                <p style="text-align: left; color: #ecb616; font-size: 5.5vh; margin-bottom: 10px; margin-top: 0px;">$ 99.99</p>
                                <p style="text-align: left; color: #ecb616; font-size: 2vh; ">PER DAY</p>
                            </div>
                            <div style="margin-top:6vh; margin-bottom: 6vh;">
                                <p style="text-align: left; color: #ecb616; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr>
                                <p style="text-align: left; color: #ecb616; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr>
                                <p style="text-align: left; color: #ecb616; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr>
                                <p style="text-align: left; color: #ecb616; font-size: 2.5vh;">Lorem ipsum dolor sit</p>
                                <hr>

                            </div>
                            <p style="text-align: left; color: #a3a3a3; font-size: 2.5vh; 
                             margin-bottom:1vh;"><a href="news_single_post_r_sidebar.php" class="waves-effect waves-light-red btn-small " style="background-color: #ecb616; color:#1c1c1c;">READ MORE</a></p>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l6 center-align" style="padding: 30px;">
                    <h1 style="color: #f9f9f9; font-size: 7vh;">Extra Services</h1>
                    <p style="color: #f9f9f9;font-size: 2.3vh; line-height: 27px;letter-spacing: 2px;font-weight: lighter;">
                    LOREM IPSUM DOLOR SIT AMET, CONSECTETURADIPISCING ELIT. DONEC AT LIGULA IN LIGULA ULTRICESVULPUTATE
                        AT AC SAPIEN. IN JUSTO NEQUE, MALESUADAA LIBERO ET, LOREM IPSUM DOLOR SIT AMET,CONSECTETUR ADIPISCING ELIT</p>
                    <p style=" color: #a3a3a3; font-size: 2.5vh; 
                             margin-bottom:1vh;"><a href="services.php" class="waves-effect waves-light-red btn " style="background-color: #1c1c1c; color:#f9f9f9;">READ MORE</a></p>
                </div>

            </div>
        </div>
    </div>




    </div>







    <div id="modal1" class="modal">

        <div class=" video-container">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7WkT4SmrzwE" frameborder="0" allowfullscreen></iframe>
        </div>

    </div>
    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>

</body>

</html>

<style>
     ::-webkit-scrollbar {
        width: 0px;
    }
    .serve_section {
        margin: 50px;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (max-width: 600px) {
        .serve_section {
            margin: 5px;
            margin-top: 20px;
        }

        .serveice_card {
            margin-top: 10px;
        }

    }
</style>

<script>
    $(document).ready(function() {
        $('.parallax').parallax();
    });
  
</script>