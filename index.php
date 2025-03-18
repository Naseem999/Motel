<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>MOTEL-HOME1</title>

</head>

<body>
    <?php
    if (isset($_GET['login'])) {
    ?>
        <script>
            var toastHTML = "<span style='color:#e57373' ><?php echo $_GET['login']; ?></span>"
            var toastElement = document.querySelector('.toast');
            M.toast({
                html: toastHTML,


            });
        </script>
    <?php
    }
    if (isset($_GET['logout'])) {
    ?>
        <script>
            var toastHTML = "<span style='color:#e57373' ><?php echo $_GET['logout']; ?></span>"
            var toastElement = document.querySelector('.toast');
            M.toast({
                html: toastHTML,


            });
        </script>
    <?php
    }
    include_once 'partial/header.php';
    ?>
    <!-- SLIDER AND MAIN HEADER SECTION STARTS HERE -----------------------------------------------------------------------------  -->
    <header>
        <div class="carousel carousel-slider">
            <div class=" carousel-item fadeIn" style=" width: 100%;
    height: 100vh;">
                <video autoplay muted loop id="myVideo" style="height: 100vh;">
                    <source src="img/Hotel Food And Interior-1.m4v" type="video/mp4">
                </video>
            </div>
            <div class=" hide-on-med-and-down carousel-item fadeIn" style="  width: 100%;
    height: 100vh;">
                <video autoplay muted loop id="myVideo" style="height: 100vh;">
                    <source src="img/Bar Vid-1.m4v" type="video/mp4">
                </video>
            </div>

            <div class=" carousel-item fadeIn" style=" width: 100%;
    height: 100vh;
    background: url(img/h5_header_3.jpg) no-repeat 50% 50%;
    background-size: cover;">
            </div>
            <div class=" carousel-item fadeIn " style="  width: 100%;
    height: 100vh;">
                <video autoplay muted loop id="myVideo" style="height: 100vh;">
                    <source src="img/Room Vid-1.m4v" type="video/mp4">
                </video>
            </div>

            <div class="glass_div row z-depth-5 hoverable center-align carousel-fixed-item center ">
                <p style=" font-size: 2.5vh;  text-align: center; color:#ffffff">LUXARY HOTAL | BEST RESTURENT | BAR
                </p>
                <hr style="width: 20px;">
                <h1 style=" font-size:3.9vw; font-family: 'Poppins', sans-serif; font-weight: lighter;  text-align:center;color:#f9f9f9">ENJOY A <br> LUXARY EXPERIANCE</h1>
                <a style="margin: 5px; background-color: transparent; border:1px solid transparent" class=" waves-effect waves-light btn z-depth-5">ROOMS</a>
            </div>

        </div>
    </header>

    <!-- CHECK AVAILIABILTY SECTION STARTS HERE ------------------------------------------------------------------------------------- -->

    <div class="row z-depth-5" style=" margin-top: 0px; margin:20px; background-color:#1c1c1c; padding:35px; border-radius: 10px;">
        <div class="col s12 m3 center-align ">

            <div class="col s12 m12">
                <Input id="check_in" type="text" style="border-style: none; color: gray; text-align: center; font-size:5vh" placeholder="" class="datepicker">
            </div>
            <p style="font-size: 2.5vh; color:gray; font-weight:600;">Check-In</p>

        </div>
        <div class="col s12 m3 center-align ">

            <div class="col s12 m12 ">
                <Input id="check_out" type="text" style="border-style: none; color: gray; text-align: center; font-size:5vh" class="datepicker">

            </div>
            <p style="font-size: 2.5vh; color:gray; font-weight:600;">Check-Out</p>

        </div>
        <div class="col s12 m3 center-align ">

            <div class="col s12 m12">
                <Input min="1" type="number" style="border-style: none; color: gray; text-align: center; font-size:5vh " placeholder="1">
            </div>
            <p style="font-size: 2.5vh; color:gray; font-weight:600;">Gusts</p>

        </div>

        <div class="col s12 m3 valign-wrapper carousel-fixed-item center " style="  height:16vh">
            <a href="room_gallery.php" class="z-depth-5 waves-effect waves-light btn-large " style="margin-left:23%;  border:1px solid gray; background-color:transparent ;  backdrop-filter: blur(6px);"><i class=" material-icons left">check</i>Check</a>
        </div>

    </div>

    <!-- ABOUT US AND RELAX IN RESORT SECTION STARTS HERE -------------------------------------------------------------- -->

    <div class="row" style="margin: 20px; background-color: #ffffff;">
        <div class="col 12 m6 center-align" style="padding: 20px;">
            <p style="color:gray; font-size:3vh">HOTEL BAYVIEW </p>
            <hr style="width: 100px;">
            <h1 style="font-size: 8.5vh; color:gray">Relax in our<br> Resort</h1>
            <p style="color:gray; font-size:2.5vh">At our Motel, we strive to
                deliver experiences that you can cherish for a lifetime. Being one of the
                best resorts , we seek to exceed the tastes and needs of our discerning
                clientele. We aim to enhance our guest’s travel experience
                by combining unmatched ambiance, personalized service, trust, and reliability.</p>
            <a href="about.php" style="background-color: #1c1c1c; border:1px solid gray; margin: 15px; " class=" waves-effect waves-light btn-large">About Us</a>

        </div>
        <div class="col s12 m6 l6">
            <img data-aos="fade-up" data-aos-duration="1500" style="width:100%; margin: 10px;" src="img/side_one.png">
        </div>
    </div>

    <!-- BEST ROOMS SHOWCASE SECTION STARTS HERE ----------------------------------------------------------------------------------- -->

    <div class="row center-align" style="background-color: #ffffff; margin-left:1vw;margin-right:1vw;">
        <h2 style="font-size: 8vh; color:gray; margin:30px;">Best Rooms</h2>
        <div class="col s12 m6 l6">
            <div class="row center-align">
                <div class="col s12 m11 l11">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/h5_big_card.jpg" style="height: 50vh; width:100%; ">
                            <span class="card-title" style="font-size: 2.2vh;">HOTEL ROME *** </span>
                        </div>
                        <div class="card-action">
                            <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Small Room</p>
                            <p style=" color:gray; text-align:left; "><i class="far fa-user"></i> 1 GUESTS <i style="margin-left:10px;" class="fas fa-ruler-combined"></i>15 ft2</p>
                            <p style=" color:gray; text-align:left; ">This is 15 square-foot room by Motel
                                features double-height ceilings, harmonic geometries and a drop-dead gorgeous colors.</p>
                            <p style=" color:gray; text-align:left; margin-top: 10px; ">
                                <a href="room_flex.php?room_img=h5_big_card.jpg&room_type=Small Room&room_price=30&hotel_name=HOTEL ROME&star=3" style="align-self:left; background-color: #1c1c1c; border:1px solid gray; " class=" waves-effect waves-light btn ">BOOK NOW FROM 30 $</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m6 l6 left" style="margin-top: 4px;">
            <div class="row">
                <div class="col s12 m6 ">
                    <div class="card  hoverable">
                        <div class="card-image">
                            <img src="img/h5_small_card_1.jpg" class="responsive-img" style="height:34vh;">
                            <span class="card-title" style="margin: 0px;padding: 20px; font-size: 2vh; font-weight:500;">DOUBLE ROOM</span>
                            <a href="room_flex.php?room_img=h5_small_card_1.jpg&room_type=Double Room&room_price=25&hotel_name=HOTEL LONDON&star=5" style="background-color: #1c1c1c;" class="btn-floating halfway-fab waves-effect waves-light "><i class="material-icons">shopping_cart</i></a>
                        </div>
                        <div class="card-content valign-wrapper" style="height: 30px;">
                            <p style=" display: inline;"><a style="align-self:left; color:#1c1c1c;  font-weight: bolder; " class=" waves-effect waves-light right ">BOOK NOW FROM 25 $</a></p></span>

                        </div>

                    </div>
                </div>
                <div class="col s12 m6 ">
                    <div class="card   hoverable">
                        <div class="card-image">
                            <img src="img/h5_small_card_2.jpg" class="responsive-img" style="height:34vh;">
                            <span class="card-title" style="margin: 0px;padding: 20px; font-size: 2vh; font-weight:500;">FAMILY ROOM</span>
                            <a href="room_flex.php?room_img=h5_small_card_2.jpg&room_type=Family Room&room_price=30&hotel_name=HOTEL BERLIN&star=4" style="background-color: #1c1c1c;" class="btn-floating halfway-fab waves-effect waves-light "><i class="material-icons">shopping_cart</i></a>
                        </div>
                        <div class="card-content valign-wrapper" style="height: 30px;">
                            <p style=" display: inline;"><a style="align-self:left; color:#1c1c1c;  font-weight: bolder; " class=" waves-effect waves-light right ">BOOK NOW FROM 30 $</a></p></span>
                        </div>

                    </div>
                </div>
                <div class="col s12 m6 ">
                    <div class="card   hoverable">
                        <div class="card-image">
                            <img src="img/h5_small_card_3.jpg" class="responsive-img" style="height:34vh;">
                            <span class="card-title" style="margin: 0px;padding: 20px; font-size: 2vh; font-weight:500;">LUXURY ROOM</span>
                            <a href="room_flex.php?room_img=h5_small_card_3.jpg&room_type=Luxury Room&room_price=100&hotel_name=HOTEL NEW YORK&star=4" style="background-color: #1c1c1c;" class="btn-floating halfway-fab waves-effect waves-light "><i class="material-icons">shopping_cart</i></a>
                        </div>
                        <div class="card-content valign-wrapper" style="height: 30px;">
                            <p style=" display: inline;"><a style="align-self:left; color:#1c1c1c;  font-weight: bolder; " class=" waves-effect waves-light right ">BOOK NOW FROM 100 $</a></p></span>
                        </div>

                    </div>
                </div>
                <div class="col s12 m6 ">
                    <div class="card  hoverable">
                        <div class="card-image">
                            <img src="img/h5_small_card_4.jpg" class="responsive-img" style="height:34vh; filter: brightness(80%);">
                            <span class="card-title" style="margin: 0px;padding: 20px; font-size: 2vh; font-weight:500;">APARTMENT</span>
                            <a href="room_flex.php?room_img=h5_small_card_4.jpg&room_type=Apartment&room_price=80&hotel_name=HOTEL LONDON&star=5" style="background-color: #1c1c1c;" class="btn-floating halfway-fab waves-effect waves-light "><i class="material-icons">shopping_cart</i></a>

                        </div>
                        <div class="card-content valign-wrapper" style="height: 30px;">
                            <p style=" display: inline;"><a style="align-self:left; color:#1c1c1c;  font-weight: bolder; " class=" waves-effect waves-light right ">BOOK NOW FROM 80 $</a></p></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CLOOAGE AND DISCOVER LOATIONS STARTS HERE --------------------------------------------------------------------- -->

    <div class="row" style="background-color: #ffffff;">
        <div class="col s12 m5 l5" style="background-color: #ffffff;">
            <img class="responsive-img " src="img/locations2.png">
        </div>
        <div class="col s12 m7 l7 " style="background-color: #1c1c1c; padding:9.8vw; ">
            <p style="color: white; font-size: 2.2vh;">LUXURY HOTEL & BEST RESORT</p>
            <h1 style="color: wheat; font-size: 10vh;">Discover our Locations</h1>
            <div class="row">
                <div class="col s12 m6 l6">
                    <p style="color:wheat;">
                        Restaurant: Motel Kitchen
                        I've already written about how good this bar and restaurant is. It serves up homemade blueberries,
                        fresh baked pancakes with maple syrup, chicken breasts stuffed in cinnamon rolls…and a beer garden

                    </p>
                </div>
                <div class="col s12 m6 l6">
                    <p style="color:wheat;">
                        BAR : Motel Kitchen
                        I've already written about how good this bar and restaurant is. It serves up homemade blueberries,
                        fresh baked pancakes with maple syrup, chicken breasts stuffed in cinnamon rolls…and a beer garden
                    </p>
                </div>

            </div>
            <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="promotions.php" style="align-self:left; font-weight:500; background-color: #1c1c1c; border:1px solid gray; " class=" waves-effect waves-light btn ">CHECK ALL PACKAGES </a></p>
        </div>

    </div>
    <div class="row center-align z-depth-0" style="background-color:#f9f9f9; padding:20px; margin: 10px; border-radius:10px;">
        <p style="color:gray; font-size: 4vh;">
            Motel is a Hotel cum bar,restautrant where you can have fun in your holidays and can enjoy luxury lifestyle experiance </p>
    </div>

    <!-- RESTURENT AND RECEPTION SHOWCASE  SECTION STARTS HERE ------------------------------------------------------------------->

    <div class="row" style="background-color: #ffffff; margin:10px;">
        <div class="row" style="margin: 0px;">
            <!-- left -->
            <div class="col s12 m6 l6 center-align" style="padding: 40px;">
                <p data-aos="fade-in" data-aos-duration="500" style="color:darkgray; font-size: 2vh; font-weight: 500;">
                    FINE FOOD</p>
                <h1 data-aos="fade-down" data-aos-duration="1000" style="font-size: 5vh; color: #727475;">Restaurant
                </h1>
                <p data-aos="fade-up" data-aos-duration="500" style="color:gray; font-weight: 600; margin:30px; margin-top: 50px;">Motel Receptions
                    I've already written about how good this bar and restaurant is. It serves up homemade blueberries,
                    fresh baked pancakes with maple syrup.</p>
                <p data-aos="flip-down" data-aos-duration="1000" style=" color:gray; text-align:center; margin-top: 7px; ">
                    <a href="restaurant.php" style="align-self:left; font-weight:500; margin:20px; background-color: transparent; color:#1c1c1c; border:2px solid #1c1c1c; " class=" waves-effect waves-light-gray  btn-large ">Read More </a></p>
            </div>

            <!-- right -->
            <div class="col s12 m6 l6 center-align" style="padding: 10px;">
                <div class="carousel carousel-slider">
                    <div class=" carousel-item fadeIn " style=" width: 100%;
            background: url(img/h5_card_resturent_1.jpg) no-repeat 50% 50%  ;
            background-size: cover;">
                        <!-- second card -->
                    </div>
                    <div class=" carousel-item fadeIn" style=" width: 100%;
            background: url(img/h5_card_resturent_2.jpg) no-repeat 50% 50%;
            background-size: cover;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- left -->
            <div class="col s12 m6 l6 center-align" style="padding: 10px;">
                <div class="carousel carousel-slider">
                    <div class=" carousel-item fadeIn " style=" 
            background: url(img/h7_header_bg.jpg) no-repeat 50% 50%  ;
            background-size: cover;">
                        <!-- second card -->
                    </div>
                    <div class=" carousel-item fadeIn" style=" 
            background: url(img/promotions_card_bg1.jpg) no-repeat 50% 50%;
            background-size: cover;">
                    </div>
                </div>


            </div>

            <!-- right -->
            <div class="col s12 m6 l6 center-align " style="padding: 40px;">
                <p data-aos="fade-in" data-aos-duration="500" style="color:darkgray; font-size: 2vh; font-weight: 500;">
                    MOTEL</p>
                <h1 data-aos="fade-down" data-aos-duration="1000" style="font-size: 5vh; color: #727475;">Bar
                </h1>
                <p data-aos="fade-up" data-aos-duration="500" style="color:gray; font-weight: 600; margin:30px; margin-top: 50px;">Motel Receptions
                    I've already written about how good this bar and restaurant is. It serves up homemade blueberries,
                    fresh baked pancakes with maple syrup</p>
                <p data-aos="flip-up" data-aos-duration="1000" style=" color:gray; text-align:center; margin-top: 10px; "> <a href="bar.php" style="align-self:left; font-weight:500; margin:20px; background-color: transparent; color:#1c1c1c; border:2px solid #1c1c1c; " class=" waves-effect waves-light-gray  btn-large ">Read More </a></p>
            </div>
        </div>


    </div>

    </div>

    <!-- video senction starts here -------------------------------------------------------------->

    <div class="row" style=" width: 100%;
    height: 80vh;
    background: url(img/h5_video_bg.jpg) no-repeat 50% 50%;
    background-size: cover;">
        <div class="col s12 m12 l12 center-align" style="height: 80vh; padding: 8.6vw; background-color:rgba(0,0,0 ,0.5) ; backdrop-filter: blur(2px);">
            <h1 style="font-size: 10vh; color:white"> Relax and Enjoy<br>
                your Holiday</h1>
            <p style="font-size: 2vh; color:gray">LUXURY HOTEL & BEST RESORT</p>
            <a class="waves-effect waves-light  modal-trigger" href="#modal1" style="margin: 10px; color:lightgray"><i class="far fa-play-circle fa-4x"></i></a>
        </div>

        <div id="modal1" class="modal">

            <div class=" video-container">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/7WkT4SmrzwE" frameborder="0" allowfullscreen></iframe>
            </div>

        </div>
    </div>

    <!-- BLOG SECTION  --------------------------------------------------------------------------------->

    <div class="row center-align" style="margin-top: 50px; background-color: #ffffff; padding:20px;">
        <p style="color: gray; font-size: 2vh;">HOTEL NEWS</p>
        <h1 style="color: #727475; font-size: 8vh;">Our Blog</h1>
        <div class="col s12 m4 l4">
            <div class="row">
                <div class="col s12 m12 l12">
                    <div class="card">
                        <div class="card-image">
                            <img class="responsive-img" src="img/h5_blog_card1.jpg">
                            <span class="card-title" style="font-size: 2.2vh;">LUXURY HOTEL </span>
                        </div>
                        <div class="card-action">
                            <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">New Website</p>
                            <p style=" color:gray; text-align:left; "> Check out our new website where you find best and new features with best user experiance to book rooms order food and bar.
                            </p>
                            <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="news_single_post_r_sidebar.php" style="align-self:left; background-color: transparent; color:#1c1c1c; border:2px solid gray; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l12 center-align ">
                    <div class="col s12 m12 l12 waves-effect waves-light-green" style="background-color: #1c1c1c;">
                        <a href="news_single_post_r_sidebar.php">
                            <p style="color: #f9f9f9; font-size: 5vh;"><i class="fas fa-link fa-lg"></i><br>Check New
                                <br> Events</p>
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="row" style="margin-top: 10px;">
                <div class="col s12 m12 l12 center-align ">
                    <div class="col s12 m12 l12 waves-effect waves-light-green" style="background-color: #1c1c1c; padding:10px;">

                        <p style="color: #f9f9f9; font-size: 4vh;">Follow our Resort
                            <br>Luxury Hotels
                        </p>
                        <hr style="width: 30px;">
                        <p style="color: #f9f9f9; font-size: 2.5vh;"><i class="fas fa-quote-right"></i> Jhon Doe</p>
                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/h5_blog_card2.jpg">
                            <span class="card-title" style="font-size: 2.2vh;">LUXURY HOTEL </span>
                        </div>
                        <div class="card-action">
                            <p style="text-align:left;color:gray; margin-top: 0px; font-size: 4vh;">Around Us</p>
                            <p style=" color:gray; text-align:left; ">Check our Surroundings and location to relax
                                enjoy and fun this included bar , restaurant, pool,spa ect.where you can have fun and can enjoy
                                your hoildays.</p>
                            <p style=" color:gray; text-align:left; margin-top: 10px; "> <a href="around.php" style="align-self:left; background-color: transparent; color:#1c1c1c; border:2px solid gray; margin-top:20px;" class=" waves-effect waves-light-green btn ">READ MORE</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="row" style="margin-top: 10px;">
                <div class="col s12 m12 l12 center-align ">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/h5_blog_card3.jpg">
                            <span class="card-title" style=" font-size: 2.2vh;"><a style="color: #ffffff; text-align: left;" href="news_single_post_r_sidebar.php">News
                                    <hr>
                                    <p style="color: #f9f9f9; font-size: 3vh;font-weight: 600;">RELAX ZONE</p>
                                </a>
                            </span>
                        </div>

                    </div>
                </div>
                <div class="col s12 m12 l12">
                    <div class="card">
                        <div class="card-image">
                            <img src="img/h5_blog_card4.jpg">
                            <span class="card-title" style=" font-size: 2.2vh;"><a style="color: #ffffff; text-align: left;" href="news_single_post_r_sidebar.php">News
                                    <hr>
                                    <p style="color: #f9f9f9; font-size: 3vh; font-weight: 600;">Daily Walk</p>
                                </a>
                            </span> </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- BLOG SECTION ENS HERE --------------------------------------------------------------------------------------------------- -->
    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>
</body>

</html>




<script>
    let date = new Date();
    var months = ["Jan", "Feb", "Mar", "April", "May", "June", "July", "Aug", "Sep", "Oct", "Nov", "Dec"];
    let mon = months[date.getMonth()];

    document.getElementById("check_in").placeholder = date.getDate() + " " + mon;
    document.getElementById("check_out").placeholder = date.getDate() + 1 + " " + mon;

    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
   
    $(document).ready(function() {
        $('.datepicker').datepicker();
    });


    AOS.init();
</script>
<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .glass_div {
        border-radius: 10px;
        padding: 15px;
        width: 50vw;
        margin-bottom: 30vh;
        background-color: rgba(253, 254, 254, 0.3);
        backdrop-filter: blur(10px);
        border: 1px solid transparent;
    }

    @media only screen and (max-width: 600px) {
        .glass_div {
            width: 80vw;
        }
    }
</style>