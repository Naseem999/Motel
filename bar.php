<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Motel-Bar</title>
</head>

<body style="background-color:#f9f9f9;">
    <?php
    include_once 'partial/header.php';
    ?>
    <!-- header section =================================================-->
    <div class="row header_sec">
        <div class="parallax-container" style="  height:65vh">

            <div class="parallax">
                <img style="filter: brightness(105%);" src="img/steak night (3).png" alt="Parallax">
            </div>

            <div class="row" style="  width: 100%;  margin-top:10vh; ">
                <div class="col s12 m12 l12 center-align">
                    <h1 style=" font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; text-align: center; font-weight: 700; margin-bottom: 20px; font-size: 8.5vh; color: wheat; text-shadow: 8px 0px 11px rgba(236,166,33,0.79);">
                        Motel Beer Bar
                    </h1>

                    <a href="#products" class="z-depth-5 waves-effect waves-light btn-large" style=" margin: 20px; border: 1px solid gray; background-color:#ffc123;">Take a Mug </a>


                </div>

            </div>
        </div>
    </div>

    <!-- main========================================= -->
    <div id="products" class="row products_row">
        <h1 style="text-align: center; color: gray; font-size: 4vh; margin-top: -20px; margin: 10px;">OUR BEST</h1>
        <hr style="width: 20px; margin-top: 0px; margin-bottom: 7vh;">
        <!-- ========================================================================================================================== -->
        <!-- 1st -->

        <div  class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_card_1.png">
                </div>
                <div class="card-content">

                </div>
                <div class="card-reveal" style=" border-radius: 20px;">
                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray ;font-size: 2.5vh;  "> DARK BEER <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh; font-weight: 700; margin: 9px; margin-left: 0px;">$10</p>
                        <p style="font-size: 2.3vh; color: gray;margin: 0px;">Color: Gold to copper-colored
                            Clarity: Chill haze is allowable at cold temperatures
                            Perceived Malt Aroma & Flavor: Low to medium residual malt sweetness should be present
                            Perceived Hop Aroma & Flavor: Very low to medium-low
                            Perceived Bitterness: Medium
                        </p>
                    </div>
                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white; " href="#bar1" class="modal-trigger  z-depth-2  btn-floating btn-large waves-effect waves-light-red ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>
                </div>
            </div>

        </div>
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value=" Dark Beer">
            <input name="item_price" type="hidden" value="10">
            <input name="item_img" type="hidden" value="bar_card_1.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar1" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_card_1.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal">
                                Dark Beer</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.5vh; font-weight: 300;  ">$10 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>





        <!-- ======================================================================================================================== -->
        <!-- 2nd -->
        <div class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_card_2.png">
                </div>
                <div class="card-content">

                </div>
                <div class="card-reveal" style=" border-radius: 20px;">

                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray ;font-size: 2.5vh;   "> BROWN ALE <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh;  font-weight: 700; margin: 9px; margin-left: 0px;">$20</p>
                        <p style="font-size: 2.3vh; color: gray; margin: 0px;">Color: Amber to deep copper
                            Clarity: Chill haze is acceptable at low temperatures
                            Perceived Malt Aroma & Flavor: Medium to medium-high
                            Perceived Hop Aroma & Flavor: Medium to medium-high
                            Perceived Bitterness: Medium to medium-high
                        </p>
                    </div>

                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white; " href="#bar2" class="modal-trigger z-depth-2 btn-floating btn-large waves-effect waves-light-red ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>

                </div>
            </div>

        </div>

        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value="Brown Ale">
            <input name="item_price" type="hidden" value="20">
            <input name="item_img" type="hidden" value="bar_card_2.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar2" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_card_2.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal">
                                Brown Ale</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.5vh; font-weight: 300;  ">$20 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>

        <!-- =============================================================================================================================== -->

        <!-- 3rd -->
        <div class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_card_3.png">
                </div>
                <div class="card-content">

                </div>
                <div class="card-reveal" style=" border-radius: 20px;">
                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray;font-size: 2.5vh;    "> LIGHT LAGER <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh; font-weight: 700; margin: 9px; margin-left: 0px;">$30</p>
                        <p style="color: gray; margin: 0px; font-size: 2.3vh;">Color: Gold to light brown
                            Clarity: Chill haze is acceptable at low temperatures
                            Perceived Malt Aroma & Flavor: Malty, caramel aroma may be present. A low to medium-low, soft and chewy caramel malt ﬂavor should be present.
                            Perceived Hop Aroma & Flavor: Should not be present
                            Perceived Bitterness: Low
                        </p>
                    </div>
                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white;  " href="#bar3" class="modal-trigger z-depth-2 btn-floating btn-large waves-effect waves-light ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>

                </div>
            </div>

        </div>
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value=" Light Lager ">
            <input name="item_price" type="hidden" value="30">
            <input name="item_img" type="hidden" value="bar_card_3.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar3" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_card_3.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal">
                                Light Lager</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.5vh; font-weight: 300;  ">$30 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>
        <!-- =================================================================================================================== -->
        <!-- 4th -->

        <div class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_card_4.png">
                </div>
                <div class="card-content" style="text-align: right;">
                </div>
                <div class="card-reveal" style=" border-radius: 20px;">
                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray;font-size: 2.5vh;    ">GOLDEN ALE <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh; font-weight: 700; margin: 9px; margin-left: 0px;">$40</p>
                        <p style="color: gray; font-size: 2.3vh; margin: 0px;">Color: Amber to dark brown
                            Clarity: Chill haze is acceptable at low temperatures
                            Perceived Malt Aroma & Flavor: Malty, caramel aroma is present. The style exhibits a medium degree of sweet malt and caramel. The overall impression is smooth and balanced.
                            Perceived Bitterness: Perceptible but low
                        </p>
                    </div>
                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white;  " href="#bar4" class="modal-trigger z-depth-2 btn-floating btn-large waves-effect waves-light ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>

                </div>
            </div>

        </div>
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value="Golden Ale">
            <input name="item_price" type="hidden" value="40">
            <input name="item_img" type="hidden" value="bar_card_4.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar4" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_card_4.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal">
                                Golden Ale</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.5vh; font-weight: 300;  ">$40 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>
        <!-- ===================================================================================================================== -->

    </div>

    <!-- parrlax sec=============================================== -->
    <div class="row">
        <div class="parallax-container" style="height: auto;">

            <div class="parallax">
                <img src="img/bar_parrlax_bg (1).jpg" alt="Parallax">
            </div>

            <div class="row" style="  width: 100%;  margin-top:3vh; ">
                <div class="hide-on-med-and-down col s12 m1 l1" style="height:5vh; "></div>
                <div class="col s12 m6 l6 " style=" padding: 2vh; background-color: rgba(255,255,255,0.6);  backdrop-filter: blur(10px); ">
                    <div class="card transparent" style="  border: 5px solid #ffc123; height: 60vh; box-shadow: none; margin: 0px;">

                        <div class="card-action" style="border: none; height: auto;">
                            <p class="card-title left" style="color:black ; margin: 0px; font-size: 4.5vh; font-weight: 800;">SPACIAL OFFER</p>
                            <p class="left" style="color:black ; font-size: 3.5vh;  margin-top:5vh; ">
                                Buy 5 full pack of chill and flavoured beer and get 10 % off on every purchase for next two months with a free
                                bucket of fresh beer.

                            </p>
                            <a href="news_single_post_r_sidebar.php" class=" waves-effect waves-light btn-large" style="  margin-top: 20px; border: 1px solid gray; color: black; font-weight: bolder; background-color:#ffc123;">
                                view more </a>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>

    <!-- new flavoures -->
    <div class="row products_row">
        <h1 style="text-align: center; color: gray; font-size: 4vh; margin-top: -20px; margin: 10px;">NEW FLAVOURS</h1>
        <hr style="width: 20px; margin-top: 0px; margin-bottom: 7vh;">
        <!-- ============================================================================================================= -->
        <!-- 1st -->
        <div class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_fav_card_1.png">
                </div>
                <div class="card-content">

                </div>
                <div class="card-reveal" style=" border-radius: 20px;">
                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray ;font-size: 2.5vh;  "> MOON CURSER <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh; font-weight: 700; margin: 9px; margin-left: 0px;">$80</p>
                        <p style="font-size: 2.3vh; color: gray;margin: 0px;">Color: Gold to copper-colored
                            Clarity: Chill haze is allowable at cold temperatures
                            Perceived Malt Aroma & Flavor: Low to medium residual malt sweetness should be present
                            Perceived Hop Aroma & Flavor: Very low to medium-low
                            Perceived Bitterness: Medium
                        </p>
                    </div>
                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white;  " href="#bar5" class="modal-trigger z-depth-2  btn-floating btn-large waves-effect waves-light ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>
                </div>
            </div>

        </div>
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value="Moon Curser">
            <input name="item_price" type="hidden" value="80">
            <input name="item_img" type="hidden" value="bar_fav_card_1.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar5" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_fav_card_1.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal">
                                Moon Curser</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.5vh; font-weight: 300;  ">$80 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>
        <!-- ==================================================================================================================== -->
        <!-- 2nd -->
        <div class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_fav_card_2.png">
                </div>
                <div class="card-content">

                </div>
                <div class="card-reveal" style=" border-radius: 20px;">
                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray ;font-size: 2.5vh;   "> RUM CHATA <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh;  font-weight: 700; margin: 9px; margin-left: 0px;">$150</p>
                        <p style="font-size: 2.3vh; color: gray; margin: 0px;">Color: Amber to deep copper
                            Clarity: Chill haze is acceptable at low temperatures
                            Perceived Malt Aroma & Flavor: Medium to medium-high
                            Perceived Hop Aroma & Flavor: Medium to medium-high
                            Perceived Bitterness: Medium to medium-high
                        </p>
                    </div>
                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white;  " href="#bar6" class="modal-trigger z-depth-2  btn-floating btn-large waves-effect waves-light ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>
                </div>
            </div>

        </div>
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value="Rum Chata">
            <input name="item_price" type="hidden" value="150">
            <input name="item_img" type="hidden" value="bar_fav_card_2.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar6" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_fav_card_2.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal">
                                Rum Chata</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 2.8vh; font-weight: 300;  ">$150 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>

        <!-- ============================================================================================================ -->
        <!-- 3rd -->
        <div class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_fav_card_3.png">
                </div>
                <div class="card-content">

                </div>
                <div class="card-reveal" style=" border-radius: 20px;">
                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray;font-size: 2.5vh;    "> STERLIING <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh; font-weight: 700; margin: 9px; margin-left: 0px;">$200</p>
                        <p style="color: gray; margin: 0px; font-size: 2.3vh;">Color: Gold to light brown
                            Clarity: Chill haze is acceptable at low temperatures
                            Perceived Malt Aroma & Flavor: Malty, caramel aroma may be present. A low to medium-low, soft and chewy caramel malt ﬂavor should be present.
                            Perceived Hop Aroma & Flavor: Should not be present
                            Perceived Bitterness: Low
                        </p>
                    </div>
                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white;  " href="#bar7" class="modal-trigger z-depth-2  btn-floating btn-large waves-effect waves-light ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>
                </div>
            </div>

        </div>
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value="Sterling">
            <input name="item_price" type="hidden" value="200">
            <input name="item_img" type="hidden" value="bar_fav_card_3.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar7" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_fav_card_3.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal1">
                                Sterling</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.2vh; font-weight: 300;  ">$200 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style="background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>




        <!--  -->

        <div class="col s12 m3 l3">
            <div class="card z-depth-5 hoverable" style=" border-radius: 20px; background-color: #f9f9f9;">
                <div class="card-image waves-effect waves-block waves-light-red" style=" padding: 0px; padding-top: 20px;">
                    <img class="activator" style="height: 50vh; object-fit: contain;" src="img/bar_fav_card_4.png">
                </div>
                <div class="card-content" style="text-align: right;">
                </div>
                <div class="card-reveal" style=" border-radius: 20px;">
                    <div style="height: 40vh;">
                        <span class="card-title" style="font-weight: 900; color:darkgray;font-size: 2.5vh;    ">OBHOB <i class="material-icons right">close</i></span>
                        <p style="color: red; font-size: 2.2vh; font-weight: 700; margin: 9px; margin-left: 0px;">$40</p>
                        <p style="color: gray; font-size: 2.3vh; margin: 0px;">Color: Amber to dark brown
                            Clarity: Chill haze is acceptable at low temperatures
                            Perceived Malt Aroma & Flavor: Malty, caramel aroma is present. The style exhibits a medium degree of sweet malt and caramel. The overall impression is smooth and balanced.
                            Perceived Bitterness: Perceptible but low
                        </p>
                    </div>
                    <div class="card-action" style="border: none;">
                        <p style=" color:gray; text-align:center; margin-top: 5px; "> <a style="
                                         background-color: white;  " href="#bar8" class="modal-trigger z-depth-2  btn-floating btn-large waves-effect waves-light ">
                                <i style="color: gray;" class="large material-icons">shopping_cart</i></a></p>
                    </div>
                </div>
            </div>

        </div>
        <form action="cart_sys/add_cart.php" method="post">
            <input name="item_name" type="hidden" value="Obhob">
            <input name="item_price" type="hidden" value="500">
            <input name="item_img" type="hidden" value="bar_fav_card_4.png">
            <input name="item_type" type="hidden" value="alcohol">

            <div id="bar8" class="modal bottom-sheet" style=" border-top-left-radius: 15px;border-top-right-radius: 15px; background-color: rgba(0,0,0,0.5); backdrop-filter: blur(20px)">
                <div class="modal-content" style="margin-top:2px; padding: 5px;background-color: transparent;">
                    <div class="row z-depth-2" style="border-radius: 15px;  margin-bottom: 0px;background-color:#f6f6f6; ">
                        <div class="col s3 m3 l3 center-align" style="height: 15vh;border-right:1px solid  #dedede ; padding: 2px;">
                            <img src="img/bar_fav_card_4.png" class="responsive-img " style=" height: 14vh;  object-fit: contain;">
                        </div>
                        <div class="col s3 m3 l3 " style="border-right:1px solid  #dedede ;height: 15vh;">
                            <p class="para_modal1">
                                Obhob</p>

                        </div>
                        <div class="col s3 m3 l3" style="border-right:1px solid  #dedede ; height: 15vh; ">
                            <p style="text-align: center; margin-top:5vh; color: red; font-size: 3.2vh; font-weight: 300;  ">$500 </p>

                        </div>
                        <div class="col s3 m3 l3 center-align ">
                            <input id="number" type="number" name="item_quantity" min="1" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer " style="background-color: transparent;">
                    <a href="#!" class=" modal-action modal-close waves-effect waves-red btn " style=" background-color: #a3a3a3;">Cancle</a>
                    <button style="background-color: rgb(237, 90, 107); font-weight: bold;" type="submit" name="add_cart_submit" class=" waves-effect waves-light btn ">Add To Cart </button>
                </div>
            </div>
        </form>

    </div>

    <!-- video -->
    <div class="row  products_row" style="margin-top:10vh; margin-bottom: 15vh;">
        <div class="col s12 m6 l6 center-align">
            <video class="video_beer z-depth-5  responsive-video hoverable" autoplay muted loop>
                <source src="img/bar_vid1.m4v" type="video/mp4">
            </video>
        </div>
        <div class="col s12 m6 l6" style="margin-top: 10px;">
            <div class="row ">
                <div class="col s12 m3 l3 img_div  ">
                    <img class="img_icons responsive-img " src="img/barrel.svg">
                </div>
                <div class="col s12  m9 l9 icon_text_div">
                    <p style=" font-weight: 900; color:gray;font-size: 2.5vh; margin-top: 0px; margin-bottom: 0px; ">BREWERY PROCESS</p>
                    <p style="font-weight: lighter; color:#a3a3a3;font-size: 2vh; margin-top: 0px;  ">Beer is more than just water, hops, malt and yeast. In the beer making process various ingredients are mixed,
                        processed and sometimes the structure of the raw materials is altered.
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col s12 m3 l3 img_div  ">
                    <img class="img_icons responsive-img " src="img/beer.svg">
                </div>
                <div class="col s12  m9 l9 icon_text_div">
                    <p style=" font-weight: 900; color:gray;font-size: 2.5vh; margin-top: 0px; margin-bottom: 0px; ">
                        CRAFT BEER</p>
                    <p style="font-weight: lighter; color:#a3a3a3;font-size: 2vh; margin-top: 0px;  ">A craft brewery or microbrewery
                        is a brewery that produces small amounts of beer, typically less than large breweriesand is often independently owned. Such breweries are generally perceived and marketed.
                    </p>
                </div>
            </div>
            <div class="row ">
                <div class="col s12 m3 l3 img_div  ">
                    <img class="img_icons responsive-img " src="img/beer-box.svg">
                </div>
                <div class="col s12  m9 l9 icon_text_div">
                    <p style=" font-weight: 900; color:gray;font-size: 2.5vh; margin-top: 0px; margin-bottom: 0px; ">FRESH SERVED</p>
                    <p style="font-weight: lighter; color:#a3a3a3;font-size: 2vh; margin-top: 0px;  ">
                        our Motel craft brewery is a brewery that produces small amounts of beer, typically less than large breweriesand is
                        and it is fresh served in our bar .
                    </p>
                </div>
            </div>

        </div>
    </div>

    <div class="row" style="margin-bottom: 0px;">
        <div class="parallax-container" style="height: 50vh;">

            <div class="parallax">
                <img style="filter: brightness(50%);" src="img/bar_book_bg.jpg" alt="Parallax">
            </div>

            <div class="row" style="  width: 100%;  margin-top:10vh; ">
                <div class="col s12 m12 l12 center-align " style=" padding: 2vh; ">

                    <p class="book_text">
                        BOOK YOUR SEAT AND START THE FUN.</p>

                    <a href="thanks.php" class=" waves-effect waves-light btn-large" style="  margin-top: 50px; border: 1px solid gray; color: black; font-weight: bolder; background-color:#ffc123;">
                        book now </a>

                </div>
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

        <span id="cart_num" class="right" style=" border-radius: 100px; margin-bottom:0px; vertical-align:top; background-color: transparent; margin-right: 10px;  font-size:3.2vh; color:rgb(237, 90, 107); font-weight: bolder;">
            <?php echo $num_items; ?>
        </span>
        <p style="  color:gray; text-align:right; margin-top: 0px; z-index: 1;"> <a href="cart.php" style="background-color: rgb(237, 90, 107); " class=" z-depth-5 btn-floating btn-large waves-effect waves-light  ">
                <i class="large material-icons">shopping_cart</i>
            </a>
        </p>

    </div>
    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    if (isset($_GET['msg'])) {
    ?>
        <script>
            var toastHTML =
                "<span style='color:#a9ffac'>Added To Cart</span>"
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


    .para_modal {
        text-align: center;
        margin-top: 2.5vw;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }

    .para_modal1 {
        text-align: center;
        margin-top: 2.5vw;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }


    #number {
        text-align: center;
        width: 60px;
        border: none;
        font-size: 3.5vh;
        color: #727475;
        font-weight: 500;
        margin-top: 3.8vh;

    }

    .card {
        background-color: transparent;
        box-shadow: none;
    }



    .img_icons {
        height: 90px;
        width: 90px;
    }

    .img_div {
        text-align: right;
    }

    .icon_text_div {
        text-align: left;
    }

    .video_beer {
        border-radius: 20px;
    }

    .book_text {
        color: #ffc123;
        margin: 0px;
        font-size: 5vh;
        font-weight: 800;
    }

    .products_row {
        margin: 40px;
    }

    .header_sec {
        margin: 23px;
    }


    @media only screen and (max-width: 600px) {
        .para_modal {
            text-align: center;
            margin-top: 3vh;
            color: #727475;
            font-size: 3vh;
            font-weight: 300;
        }

        .para_modal1 {
            text-align: center;
            margin-top: 5vh;
            color: #727475;
            font-size: 3vh;
            font-weight: 300;
        }

        .card {
            background-color: #f9f9f9;
            box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .book_text {
            font-size: 4vh;

        }

        .products_row {
            margin: 0px;
        }

        .video_beer {
            border-radius: 10px;
        }

        .header_sec {
            margin: 0px;
            margin-bottom: 50px;
        }

        .img_icons {

            height: 90px;
            width: 90px;
        }

        .img_div {
            text-align: center;
            margin-top: 20px;
        }

        .icon_text_div {
            text-align: center;
            margin-top: 10px;
        }
    }
</style>
<script>
    $(document).ready(function() {
        $('.parallax').parallax();
    });
</script>