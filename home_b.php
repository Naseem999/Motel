<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Motel-Home_video</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>
    <div class="row">
        <div class="parallax-container" style="height: 95vh;">
            <div class="parallax">
                <video autoplay muted loop id="myVideo">
                    <source src="img/Motel Vid1-1.m4v" type="video/mp4">

                </video>

            </div>

            <div class="row " style=" width: 100%;  margin-top:30vh; ">
                <div class="col s12 m12 l12 center-align">
                    <span style="font-size: 2vh; color: #f9f9f9;">MOTEL.BAR.RESTAURANT</span>
                    <h3  style=" text-align: center; font-weight: lighter; font-size: 9vh; color: wheat;">LUXARY HOTEL
                    </h3>
                    <hr style="width: 50px;">
                    <a href="room_gallery.php" class="bounce z-depth-5  waves-effect waves-light-red btn " 
                    style="margin-top: 6vh; background-color:wheat; color: black;
                        ">
                        BOOK NOW </a>
                </div>

            </div>
        </div>
    </div>

    <div class="row footer" style=" margin-bottom: 0px; background-color: #f9f9f9;">

    <div class="row center-align" style="background-color: #1c1c1c;  padding:40px;">
        <div class="col s12 m4 l4 ">
            <p style="color:#f9f9f9; font-size: 3.5vh;">Phone Support<br>
                <span style="color: #f9f9f9; font-size: 2vh;">24 HOURS A DAY</span>
            </p>
            <p style="color: #f9f9f9; font-size: 2.5vh;">+ 01 345 647 745</p>

        </div>
        <div class="col s12 m4 l4 ">
            <p style="color:#f9f9f9; font-size: 3.5vh;">Connect With Us<br>
                <span style="color: #f9f9f9; font-size: 2vh;">SOCIAL MEDIA CHANNELS</span>
            </p>
            <p style="color: #f9f9f9; font-size: 2.5vh; ">
                <a href="#" style="color: #f9f9f9;"><i class="fab fa-instagram fa-lg" style="margin:8px;"></i></a>
                <a href="#" style="color: #f9f9f9;"><i class="fab fa-twitter fa-lg" style="margin:8px;"></i></a>
                <a href="#" style="color: #f9f9f9;"><i class="fab fa-facebook-f fa-lg" style="margin:8px;"></i></a>
                <a href="#" style="color: #f9f9f9;"><i class="fab fa-pinterest-p fa-lg" style="margin:8px;"></i></a>
                <a href="#" style="color: #f9f9f9;"><i class="fab fa-youtube fa-lg" style="margin:8px;"></i></a>

            </p>

        </div>
        <div class="col s12 m4 l4  ">
            <p style="color:#f9f9f9; font-size: 3.5vh;">Newsletter<br>
                <span style="color: #f9f9f9; font-size: 2vh;">SIGN UP FOR SPECIAL OFFERS</span>
            </p>
            <div class="col s6 offset-s3">
                <input placeholder="Email" id="first_name" type="text" class="validate" style="color: #1c1c1c; text-align: center; background-color: #f9f9f9; border-radius: 3px;">
            </div>
            <div class="col s12 m3 l3 " style="background-color:transparent; border-radius: 5px; margin-top:5px;">
                <a class="waves-effect waves-light btn " style="background-color:transparent; border:1px solid gray">Subscribe</a>
            </div>
        </div>
    </div>

        <div class="hide-on-med-and-down col s12 m6 l6 center-align" style="padding: 10px; display: inline;">
            <a href="#" style="margin:12px;color: gray; font-size:2vh;font-weight:400">HOME</a>
            <a href="#" style="margin:12px;color: gray; font-size:2vh;font-weight:400">ROOMS</a>
            <a href="#" style="margin:12px; color: gray; font-size:2vh;font-weight:400">ABOUT US</a>
            <a href="#" style="margin:12px; color: gray; font-size:2vh;font-weight:400">PAGES</a>
            <a href="#" style="margin:12px; color: gray; font-size:2vh;font-weight:400">NEWS</a>
            <a href="#" style="margin:12px; color: gray; font-size:2vh;font-weight:400">CONTACT</a>
        </div>
        <div class="col s12 m6 l6 ">
            <img class="responsive-img" src="http://www.nicdarkthemes.com/themes/hotel/wp/demo/chalet-wordpress-theme/wp-content/uploads/sites/7/2017/08/partners.png">
        </div>
    </div>
   
    <?php
    include_once 'partial/scripts.php';
    ?>
</body>

</html>
<style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
    }
   
    .bounce{

	animation: bounce 2s infinite;
	-webkit-animation: bounce 2s infinite;
	-moz-animation: bounce 2s infinite;
	-o-animation: bounce 2s infinite;
}
 
@-webkit-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {-webkit-transform: translateY(0);}	
	40% {-webkit-transform: translateY(-30px);}
	60% {-webkit-transform: translateY(-15px);}
}
 
@-moz-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {-moz-transform: translateY(0);}
	40% {-moz-transform: translateY(-30px);}
	60% {-moz-transform: translateY(-15px);}
}
 
@-o-keyframes bounce {
	0%, 20%, 50%, 80%, 100% {-o-transform: translateY(0);}
	40% {-o-transform: translateY(-30px);}
	60% {-o-transform: translateY(-15px);}
}
@keyframes bounce {
	0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
	40% {transform: translateY(-30px);}
	60% {transform: translateY(-15px);}
}
</style>

<script>
    $(document).ready(function() {
        $('.parallax').parallax();
    });
</script>