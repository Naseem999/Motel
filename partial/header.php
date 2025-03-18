<?php
session_start();
include_once 'head.php';
?>

<!-- mobile nav section=================================================================================================== -->
<nav class="show-on-small" style=" display: none;  background-color:transparent ; backdrop-filter: blur(40px); box-shadow: 10px 10px 10px rgba(46,54,68,0.03);">
    <div class="nav-wrapper">
        <div class="row  z-depth-5" style=" background-color: white; ">
            <div class="col s9 m9" style="height: 10vh;">
                <a href="h7.php"> <img class="responsive-image" src="img/logo1.png" style=" height:9vh; 
                 width:30vw; margin: 0.5;   object-fit:contain;  ">
                </a>
            </div>
            <div class="col s3 m3 valign-wrapper" style="height: 10vh;">
                <a href="" data-target="mobile-demo" style="  color: black;  " class="sidenav-trigger   ">
                    <i class="material-icons">menu</i>
                </a>
            </div>

        </div>

</nav>
<div class="sidenav" id="mobile-demo">
    <div class="row center-align valign-wrapper">
        <?php
        if (isset($_SESSION['username'])) {
        ?>

            <div class="col s6 valign-wrapper " style=" margin-left: 0px; background-color: #737576; color:white; height: 100%; border-bottom-right-radius: 10px;
            border-top-right-radius: 10px;">
                <p style="font-weight: 900;"><?php echo $_SESSION['username']; ?></p>
                <a href="h7.php"> <img class="responsive-img" src="img/logo.svg" style=" height:7vh; 
                 width:40vw; margin: 0.5vh;   object-fit:contain;  ">
                </a>
            </div>
            <div class="col s6 z-depth-2 " style="margin: 10px;  width: 35vw; border-radius:90% ; height: 20vh; background: url(img/user.jpg) no-repeat 50% 50%;
     background-size: cover;"></div>

        <?php
        } else {
        ?>
            <div class="col s12">
                <a href="h7.php"> <img class="responsive-image" src="img/logo.svg" style=" height:7vh; 
                 width:30vw; margin: 0.5vh;   object-fit:contain;  ">
                </a>
                <div class="col s12">
                    <div class="col s6">
                        <a href="account.php" class="left" style="color: #727475;">
                            <i class="small material-icons" style="margin-top: 2px;">account_circle</i>
                        </a>

                    </div>
                    <div class="col s6 ">
                        <a href="account.php" class="right" style="color: #727475;">
                            <i class="small material-icons">lock </i>
                        </a>

                    </div>
                </div>
            </div>

        <?php
        }
        ?>

    </div>
    <div class="row ">
        <ul class="collapsible ">
            <li class="col s12 ">
                <div class="collapsible-header " style="color:black;">Home<i class="fas fa-caret-down" style="margin-left: 74%;"></i>
                </div>
                <div class="collapsible-body gray">
                    <div>
                        <div class="col s10"> <a style="margin:2%; color: #737576;" href="index.php">Home 1</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%; color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%; color: #737576;" href="home_a.php">Home 2</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%; color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%; color: #737576;" href="home_b.php">Home Video</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%; color:lightgray"></i></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col s12 ">
                <div class="collapsible-header " style="color:black;">Rooms<i class="fas fa-caret-down" style="margin-left: 72%;"></i>
                </div>
                <div class="collapsible-body gray">
                    <div>
                        <div class="col s10"> <a style="margin:2%; color: #737576;" href="room_gallery.php">Room Gallery</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%; color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%; color: #737576;" href="room_video.php">Room Video</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>

                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="room_default.php">Room Default</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>

                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="single_branch.php">Signle Branch</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>

                </div>
            </li>

            <li class="col s12 ">
                <div class="collapsible-header " style="color:black;">Pages<i class="fas fa-caret-down" style="margin-left: 73%;"></i>
                </div>
                <div class="collapsible-body gray">
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="around.php">Around Us</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="t&c.php">Terms & Conditions</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="services.php">Services</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="contact.php">Contact</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="contact2.php">Contact2</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="restaurant.php">Restaurant</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="bar.php">Bar</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="about.php">About Us</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="about2.php">About Us 2</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="promotions.php">Promotions</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="testimonials.php">Testimonials</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="gallery.php">Gallery</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>

                </div>
            </li>

            <li class="col s12 ">
                <div class="collapsible-header" style="color:black;">News_Archive<i class="fas fa-caret-down" style="margin-left: 55%;"></i>
                </div>
                <div class="collapsible-body gray">
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="news_full_w.php">Full
                                Width</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="news_r_sidebar.php">Right
                                Sidebar</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="news_l_sidebar.php">Left
                                Sidebar</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="col s12 ">
                <div class="collapsible-header" style="color:black;">Single_Post<i class="fas fa-caret-down" style="margin-left: 60%;"></i>
                </div>
                <div class="collapsible-body gray">
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="news_single_post_FW.php">Full
                                Width</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="news_single_post_r_sidebar.php">Right
                                Sidebar</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                    <div>
                        <div class="col s10"> <a style="margin:2%;color: #737576;" href="news_single_post_l_sidebar.php">Left
                                Sidebar</a>
                        </div>
                        <div class="col s2 valign-wrapper">
                            <p><i class="fas fa-external-link-alt right" style="margin:3%;color:lightgray"></i></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="col s12 ">
                <div class="collapsible-header" style="color:black;"><a style="color: #1c1c1c;" href="cart.php">Cart</a>
                </div>
            </li>

        </ul>
    </div>
    <div class="row center-align " style=" margin-top:2em;">
        <?php
        if (isset($_SESSION['username'])) {
        ?>
            <a href="partial/logout.php" class=" waves-effect waves-light red" type=submit" name="action" style="border-radius: 5px; padding: 10px; padding-left: 15px; padding-right: 15px; color:white ">Logout
            </a>
    </div>
<?php
        }
?>

</div>


</div>




<!-- desktop section nav here -->

<div class="row transparent" style="margin: 0px; z-index: 1;">

    <nav class="  valign-wrapper hide-on-med-and-down " style="background-color:#1c1c1c ; backdrop-filter: blur(100px); height: 5vh; border:solid  4px transparent">
        <?php
        if (isset($_SESSION['username'])) {
        ?>
            <ul id="nav-mobile" style="margin-left: 90%; ">
                <li class="valign-wrapper" style="margin-right:10px;"> <i class="large material-icons">account_circle</i><a class="modal-trigger" href="#user_profile"><?php echo $_SESSION['username']; ?></a></li>
            </ul>
        <?php
        } else {
        ?>
            <ul id="nav-mobile" style="margin-left: 76vw; ">
                <li class="valign-wrapper" style="margin-right:10px;"> <i class="large material-icons">account_circle</i><a href="account.php">Register</a></li>
                <li class="valign-wrapper"> <i class="large material-icons">lock</i><a href="account.php">Login </a></li>
                <li class="valign-wrapper"> <i class="large material-icons">shopping_cart</i><a href="cart.php">Cart </a></li>

            </ul>
        <?php

        }
        ?>

    </nav>
    <nav class="hide-on-med-and-down" style="height: 20vh; background-color:rgba(255, 255, 255, 0.5) ; backdrop-filter: blur(20px); box-shadow: 10px 10px 10px rgba(46,54,68,0.03);">
        <div class="nav-wrapper">
            <div class="row center-align " style="height: 15vh;">
                <img class="responsive-image" src="img/logo1.png" style="height:10vh;  width:100vw; margin-top: 30px; object-fit:contain;  ">
            </div>
            <div class="row center-align" style="border: 1px solid lightgray;  background-color: white; ">

                <div class="col s12 m12" style="display: inline;">
                    <a class="modal-trigger" href="#home"  style="margin:12px;color: gray; font-size:2.2vh;font-weight:400">HOME </a>
                    <a class="modal-trigger" href="#rooms" style=" margin:12px;color: gray; font-size:2.2vh;font-weight:400">ROOMS</a>
                    <a href="about.php" style="margin:12px; color: gray; font-size:2.2vh;font-weight:400">ABOUT US</a>
                    <a class="modal-trigger" href="#pages" style="margin:12px; color: gray; font-size:2.2vh;font-weight:400">PAGES</a>
                    <a class="modal-trigger" href="#news" style="margin:12px; color: gray; font-size:2.2vh;font-weight:400">NEWS</a>
                    <a href="contact.php" style="margin:12px; color: gray; font-size:2.2vh;font-weight:400">CONTACT</a>

                    <a href="room_gallery.php" style="margin:12px; color: gray; font-size:2vh;font-weight:400; border-radius: 20px; background-color: #1c1c1c;" class="modal-trigger waves-effect waves-green btn-flat ">Book Now </a>

                </div>
            </div>
    </nav>
</div>

<!-- HOME -->
<div id="home" class="modal " style=" border: 2px solid transparent; background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(30px);  border-radius: 50px; width: 80%; ">
    <div class="modal-content">
        <div class="row" style="padding: 50px;">
            <div class="col m6 l6">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;border: 1px solid transparent; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h7_parllax_bg1.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Home 1
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="index.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col m6 l6">

                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;border: 1px solid transparent; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h5_blog_card2.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Home 2
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="home_a.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col m6 l6">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;border: 1px solid transparent; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/restaurant_header_bg5.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Home Video
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="home_b.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!--  -->

            

        </div>
    </div>
</div>

<!-- pages -->
<div id="pages" class="modal z-depth-5" style="border: 2px solid transparent; background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(30px);  border-radius: 50px; width: 80%; ">
    <div class="modal-content">
        <div class="row">

            <!-- AROUND US -->
            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/around_parllax_bg.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Around US
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="around.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- T&C -->
            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/tnc_parrlax_bg.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <span style="color: #727475; font-size:medium; font-weight: 300; margin-top: 20px;">Terms & Conditions
                        </span>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="t&c.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Services -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/about_s_card_bg3.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Services
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="services.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CONTACT 1 -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;  ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/conatct_model_nav_link.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Contact 1
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="contact.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- CONTACT 2 -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/conatct_model_nav_link.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Contact 2
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="contact2.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Restaurant -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/restaurant_header_bg.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Restaurant
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="restaurant.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

             <!-- bar -->

             <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/bar_book_bg.jpg)  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Bar
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="bar.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ABOUT US  -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h7_parllax_bg_check.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">About Us
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="about.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- ABOUT US 2 -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h7_parllax_bg_check.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">About Us 2
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="about2.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Promotions -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/promotions_header_bg.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Promotions
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="promotions.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/services_parrlax_bg4.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Testimonials
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="testimonials.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

            <!-- gallery -->

            <div class="col m4 l4">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h5_big_card.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Gallery
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="gallery.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rooms -->
<div id="rooms" class="modal " style=" border: 2px solid transparent; background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(30px);  border-radius: 50px; width: 80%; ">
    <div class="modal-content">
        <div class="row" style="padding: 50px;">
            <div class="col m6 l6">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;border: 1px solid transparent; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h7_s_card_5.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Room Gallery
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="room_gallery.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col m6 l6">

                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;border: 1px solid transparent; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h7_s_card_7.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Room Video
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="room_video.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!--  -->
            <div class="col m6 l6">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;border: 1px solid transparent; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h5_small_card_5.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Room Default
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="room_default.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!--  -->

            <div class="col m6 l6">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px;border: 1px solid transparent; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h7_s_card_4.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <p style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Single Branch
                        </p>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="single_branch.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- NEWS -->

<div id="news" class="modal " style="  border: 2px solid transparent; background-color: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(30px);  border-radius: 50px; width: 80%; ">
    <div class="modal-content">
        <div class="row">
            <div class="col m6 l6 center-align" style="padding: 50px;  ">
                <h1 style="color: #1c1c1c; font-size: 4vh; margin: 10px;">Archieve</h1>
                <hr style="width: 50px;">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/news_car_bg1.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <span style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Full-Width
                        </span>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="news_full_w.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/promotions_header_bg.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <span style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Right-Sidebar
                        </span>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="news_r_sidebar.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/around_parllax_bg.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <span style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Left-Sidebar
                        </span>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="news_l_sidebar.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- =================================== -->
            <div class="col m6 l6 center-align" style="padding: 50px;   ">
                <h1 style="color: #1c1c1c; font-size: 4vh; margin: 10px;">Single Post</h1>
                <hr style="width: 50px;">
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h5_video_bg.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <span style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Full-Width
                        </span>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="news_single_post_FW.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h5_video_bg1.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <span style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Right-Sidebar
                        </span>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="news_single_post_r_sidebar.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
                <div class="valign-wrapper card-panel white " style=" border-radius: 20px; padding: 0px; ">
                    <div class="col  m4 l4" style="
                        border-top-left-radius: 20px;
                        border-bottom-left-radius: 20px;
                        height: 9vh;
                        background: url(img/h5_blog_card2.jpg) no-repeat 50% 50%  ;
                        background-size: cover;
             
                          ">
                    </div>
                    <div class="col  m6 l6 center-align">
                        <span style="color: #727475; font-size: medium; font-weight: 300; margin-top: 20px;">Left-Sidebar
                        </span>
                    </div>
                    <div class="col  m2 l2 waves-effect waves-light-green" style="background-color:#f9f9f9; height: 9vh;  
                         border-top-right-radius: 20px;
                        border-bottom-right-radius: 20px; ">
                        <a href="news_single_post_l_sidebar.php">
                            <p><i class="fas fa-external-link-alt fa-2x" style="margin:3%; color: gray; "></i></p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- user profile -->
<?php
if (isset($_SESSION['username'])) {
?>
    <div id="user_profile" class="modal user_p z-depth-5">
        <div class="modal-content">
            <div class="container center-align">
                <div class="row center-align">
                    <img class="circle z-depth-5 responsive-img" src="img/user.jpg" style="height: 130px; width:130px;">
                </div>
                <div class="row center-align">
                    <p style="color:#E8E8E8; font-size: 4vh;margin: 0px; font-weight: 400; "><?php echo $_SESSION['username']; ?></p>
                    <span style="color: #727475;"><?php echo $_SESSION['email'] ?> </span>
                    <hr>
                    <div class="row center-align" style="width: 100%; margin: 0px;">
                        <div class="col m12 l12"></div>
                        <table class="centered">
                            <tbody>
                                <tr>
                                    <td>Frist Name:</td>
                                    <td></td>
                                    <td><?php echo $_SESSION['f_name'] ?></td>
                                </tr>
                                <tr>
                                    <td>Last Name:</td>
                                    <td></td>
                                    <td><?php echo $_SESSION['l_name'] ?></td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                    <div class="row center-align">
                        <a href="partial/logout.php" class="btn waves-effect waves-light red" type="submit" name="action" style="margin-top: 20px; border-radius: 15px;">Logout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
    ?>

    <?php
    include_once 'scripts.php';
    ?>
    </div>


    <style>
        .modal-overlay {
            opacity: 0 !important;
            background: rgba(0, 0, 0, 0);
        }

        li {
            display: inline;
        }

        .modal::-webkit-scrollbar {
            width: 0px !important;
            /* width of the entire scrollbar */
        }

        .user_p {

            left: 0;
            right: 0;
            border-radius: 20px;
            padding: 0px;
            min-height: 75%;
            max-height: 40%;
            width: 50%;
            will-change: top, opacity;
            border: 1px solid transparent;
            background-color: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(17px);
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.collapsible').collapsible();
        });
        $(document).ready(function() {
            $('.sidenav').sidenav();
        });

        $(document).ready(function() {
            $('.modal').modal();
        })
    </script>