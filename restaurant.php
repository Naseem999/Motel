<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Restaurant-Motel</title>
</head>

<body style="background-color: #f6f6f6;">
    <?php
    include_once 'partial/header.php';
    ?>
    <div class="row" style="z-index: 0;">
        <div class="carousel carousel-slider">
            <div class=" carousel-item fadeIn" style=" width: 100%; height: 100vh;
filter: brightness(90%);
    background: url(img/restaurant_header_bg.jpg) no-repeat 50% 50%;
    background-size: cover;">
            </div>
            <div class=" carousel-item fadeIn " style="  width: 100%;
 
    background: url(img/restaurant_header_bg2.jpg) no-repeat 50% 50%  ;
    filter: brightness(60%);
    background-size: cover;">
            </div>
            <div class=" carousel-item fadeIn" style=" width: 100%;
   filter: brightness(60%);
    background: url(img/restaurant_header_bg3.jpg) no-repeat 50% 50%;
    background-size: cover;">
            </div>
            <div class=" carousel-item fadeIn " style="  width: 100%;
 
 background: url(img/restaurant_header_bg4.jpg) no-repeat 50% 50%  ;
 filter: brightness(60%);
 background-size: cover;">
            </div>
            <div class=" carousel-item fadeIn " style="  width: 100%;
 
 background: url(img/restaurant_header_bg5.jpg) no-repeat 50% 50%  ;
 filter: brightness(60%);
 background-size: cover;">
            </div>
            <div class="row  center-align carousel-fixed-item center " style="height: 85vh; ">
                <img class="responsive-img" src="img/restaurant_header_main1.png">

            </div>

        </div>
    </div>

    <div class="row serve_section">
        <div class="col s12 m4 l4">
            <div class="card  hoverable" style="border-radius:10px; ">
                <div class="card-image waves-effect waves-block waves-light" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <img class="activator responsive-img" src="img/restaurant_header_bg3.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4" style="font-weight: 500; "> Vegetarian <i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal white " style=" border-radius: 10px;">
                    <hr style="width: 20px;">
                    <br>
                    <span class="card-title  text-darken-4" style="font-weight: 900; color:	#808080">Vegetarian <a style="color: #adadad;"> <i onclick="mix();" class="material-icons right">close</i></a></span>
                    <p style="color:#A0A0A0;">
                        1) Extra Vegetable Fried Rice.<br>
                        2) Peanut Slaw with Soba Noodles<br>
                        3) Pinto Posole<br>
                        4) Vegetable Paella<br>
                    </p>
                    <p style=" color:#f6f6f6; text-align:left; margin-top: 10px; "> <a href="#veg" style="align-self:left;
                                         background-color: transparent; color:#808080; margin-top:20px;" class=" waves-effect waves-light-green btn " onclick="veg();">Find More</a></p>
                </div>

            </div>
        </div>

        <div class="col s12 m4 l4">
            <div class="card  hoverable" style="border-radius:10px; ">
                <div class="card-image waves-effect waves-block waves-light" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <img class="activator responsive-img" src="img/restaurant_card1_bg.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4" style="font-weight: 500; "> Continental <i class="material-icons right">more_vert</i></span>
                </div>
                <div class="card-reveal white" style=" border-radius: 10px;">
                    <hr style="width: 20px;">
                    <br>
                    <span class="card-title  text-darken-4" style="font-weight: 900; color:#808080">Continental<a style="color: #adadad;"> <i onclick="mix();" class="material-icons right">close</i></a></span>
                    <p style="color: #A0A0A0;">
                        1) Extra Vegetable Fried Rice.<br>
                        2) Peanut Slaw with Soba Noodles<br>
                        3) Pinto Posole<br>
                        4) Vegetable Paella<br>
                    </p>
                    <p style=" color:#f6f6f6; text-align:left; margin-top: 10px; "> <a href="#conti" style="align-self:left;
                                         background-color: transparent; color:#808080; margin-top:20px;" class=" waves-effect waves-light-green btn " onclick="conti();">Find More</a></p>
                </div>

            </div>
        </div>
        <div class="col s12 m4 l4">
            <div class="card  hoverable" style="border-radius:10px; ">
                <div class="card-image waves-effect waves-block waves-light" style="border-top-left-radius: 10px; border-top-right-radius: 10px;">
                    <img class="activator responsive-img" src="img/restaurant_card2_bg.jpg">
                </div>
                <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4" style="font-weight: 500; "> Non-Vegetarian <i class="material-icons right">more_vert</i> </span>
                </div>
                <div class="card-reveal white " style=" border-radius: 10px;">
                    <hr style="width: 20px;">
                    <br>
                    <span class="card-title  text-darken-4" style="font-weight: 900; color:#808080">Non-Vegetarian <a style="color: #adadad;"> <i onclick="mix();" class="material-icons right">close</i></a></span>
                    <p style="color: #A0A0A0;">
                        1) Extra Vegetable Fried Rice.<br>
                        2) Peanut Slaw with Soba Noodles<br>
                        3) Pinto Posole<br>
                        4) Vegetable Paella<br>
                    </p>
                    <p style=" color:#f6f6f6; text-align:left; margin-top: 10px; "> <a href="#non_veg" style="align-self:left;
                                         background-color: transparent; color:#808080; margin-top:20px;" class=" waves-effect waves-light-green btn " onclick="non_veg();">Find More</a></p>
                </div>

            </div>
        </div>
    </div>


    <!-- menu section ---------------------------------------------------------------------------------------------- -->

    <div class="row serve_section" id="mix" style="display: block;">
        <?php
        include_once 'foods/mix.php';
        ?>
    </div>

    <div class="row serve_section" id="veg" style="display: none;">
        <?php
        include_once 'foods/veg.php';
        ?>
    </div>

    <div class="row serve_section" id="non_veg" style="display: none;">
        <?php
        include_once 'foods/non_veg.php';
        ?>
    </div>

    <div class="row serve_section" id="conti" style="display: none;">
        <?php
        include_once 'foods/continental.php';
        ?>
    </div>

    <!-- facilities options ===================================================================================== -->

    <div class="row" style="padding: 20px;">
        <div class="col s12 m3 l3 center-align " style="border-right: 1px solid #e2e0e0; border-bottom: 1px solid #e2e0e0; padding: 20px; background-color: #f6f6f6;">
            <i style="color: #adadad;" class="fas fa-utensils fa-4x "></i>
            <p style="color: #adadad;">INTERNATIONAL</p>
        </div>
        <div class="col s12 m3 l3 center-align " style="border-right: 1px solid #e2e0e0; border-bottom: 1px solid #e2e0e0; padding: 20px; background-color: #f6f6f6;">
            <i style="color: #adadad;" class="fas fa-cocktail fa-4x "></i>
            <p style="color: #adadad;"> COCKTAILS</p>
        </div>

        <div class="col s12 m3 l3 center-align " style="border-right: 1px solid #e2e0e0; border-bottom: 1px solid #e2e0e0; padding: 20px;background-color: #f6f6f6;">
            <i style="color: #adadad;" class="fas fa-smoking-ban fa-4x "></i>
            <p style="color: #adadad;">NO-SMOKING</p>
        </div>

        <div class="col s12 m3 l3 center-align " style="border-right: 1px solid #e2e0e0;border-bottom: 1px solid #e2e0e0; padding: 20px; background-color: #f6f6f6;">
            <i style="color: #adadad;" class="fas fa-water fa-4x "></i>
            <p style="color: #adadad;">SEA VIEW</p>
        </div>
    </div>

    <!-- parallax section ============================================================================== -->

    <div class="row" style="margin-bottom: 0px;">
        <div class="parallax-container" style="width:100%; height: auto ">

            <div class="parallax">
                <img style="filter:brightness(85%) " src="img/services_facilitues_parrlax_bg.jpg" alt="Parallax">
            </div>

            <div class="row " style="   margin: 3vh; ">
                <div class="col m4 l4"></div>
                <div class="col s12 m4 l4" style="padding: 0px; ">
                    <div class="card col s12 m12 l12 center-align" style=" margin-top: 4.8vh; padding:20px;  background-color:rgba(0,0,0,0.2) ; backdrop-filter:blur(10px) grayscale(20%); height: 85vh; ">
                        <div class="card-content white-text">
                            <p style="font-weight: 500;">BOOK NOW</p>
                            <span class="card-title" style="margin-top:3vh;  font-weight: 700;">Request a Table</span>
                            <br><br>
                            <input placeholder="Name" id="first_name" type="text" style="border:1px solid gray; background-color:transparent;  text-align: center; ">
                            <br><br>
                            <input placeholder="Email" id="first_name" type="email" class="validate" style="border:1px solid gray; background-color:transparent; text-align: center;">
                            <br><br>
                            <textarea placeholder="message" id="first_name" type="email" class=" " style=" overflow-y: auto;  resize: none; border:1px solid gray; height:10vh; background-color:transparent; text-align: center;"></textarea>
                            <br><br>
                            <a href="thanks.php" style=" border: 0.5px solid gary ; background-color: transparent; width: 70%; margin-top: 10px; width: 80%;" class=" waves-effect waves-light btn-large z-depth-5 ">SEND NOW</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div id="cart_btn" style=" padding: 25px;
           position: fixed;
           bottom: 0;
           z-index: 1;
           right: 0;
          margin: 0px;
          margin-bottom: 0px;  
          ">
            <?php
            $sql = "SELECT * FROM cart ";
            $result = mysqli_query($con, $sql);
            $resultch = mysqli_num_rows($result);
            $num_items = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $num_items++;
            }
            ?>

            <span id="cart_num" class="right"
             style=" border-radius: 100px; margin-bottom:0px; vertical-align:top; background-color: transparent; margin-right: 10px;  font-size:3.2vh; color:rgb(237, 90, 107); font-weight: bolder;">
        <?php echo $num_items;?>
        </span>
            <p style="  color:gray; text-align:right; margin-top: 0px; z-index: 1;"> <a href="cart.php" style="background-color: rgb(237, 90, 107); " class=" z-depth-5 btn-floating btn-large waves-effect waves-light  ">
                    <i class="large material-icons">shopping_cart</i>
                </a>
            </p>

        </div>

    </div>

    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    if (isset($_GET['msg'])) {
    ?>
        <script>
            var toastHTML =
                "<span style='color:#a9ffac;'>Item Added To Cart</span>"
            var toastElement = document.querySelector('.toast');
            M.toast({
                html: toastHTML,
                displayLength: 6000,
                outDuration: 600
            });
            document.getElementById("cart_btn").style.animation = "bounce 1.5s linear 2";
            document.getElementById("cart_num").style.animation = "bounce 1.5s linear 7";
        </script>
    <?php
    }
    ?>
</body>

</html>

<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    @-webkit-keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            -webkit-transform: translateY(0);
        }

        40% {
            -webkit-transform: translateY(-30px);
        }

        60% {
            -webkit-transform: translateY(-15px);
        }
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
            transform: translateY(0);
        }

        40% {
            transform: translateY(-30px);
        }

        60% {
            transform: translateY(-15px);
        }
    }

    .bounce {
        -webkit-animation-name: bounce;
        animation-name: bounce;
    }

    .serve_section {
        margin: 50px;
    }

    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (max-width: 600px) {
        .serve_section {
            margin: 0px;
            margin-top: 20px;
        }

        .serveice_card {
            margin-top: 10px;
        }

    }
</style>
<script>
    function mix() {
        var conti = document.getElementById("conti");
        var mix = document.getElementById("mix");
        var veg = document.getElementById("veg");
        var non = document.getElementById("non_veg");
        if (mix.style.display === "none") {
            mix.style.display = "block";
            veg.style.display = "none";
            conti.style.display = "none";
            non.style.display = "none";

        }
    }


    function non_veg() {
        var conti = document.getElementById("conti");
        var mix = document.getElementById("mix");
        var veg = document.getElementById("veg");
        var non = document.getElementById("non_veg");
        if (non.style.display === "none") {
            non.style.display = "block";
            veg.style.display = "none";
            conti.style.display = "none";
            mix.style.display = "none";

        }
    }

    function veg() {
        var mix = document.getElementById("mix");
        var conti = document.getElementById("conti");
        var veg = document.getElementById("veg");
        var non = document.getElementById("non_veg");
        if (veg.style.display === "none") {
            veg.style.display = "block";
            non.style.display = "none";
            conti.style.display = "none";
            mix.style.display = "none";


        }
    }

    function conti() {
        var mix = document.getElementById("mix");
        var conti = document.getElementById("conti");
        var veg = document.getElementById("veg");
        var non = document.getElementById("non_veg");
        if (conti.style.display === "none") {
            conti.style.display = "block";
            non.style.display = "none";
            veg.style.display = "none";
            mix.style.display = "none";

        }
    }


    $('.carousel.carousel-slider').carousel({
        fullWidth: true,
        indicators: true
    });
   
    setInterval(function() {
        $('.carousel.carousel-slider').carousel('next');
    }, 5000);

    $(document).ready(function() {
        $('.parallax').parallax();
        $('.collapsible').collapsible();
    });
</script>