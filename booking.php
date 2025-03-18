<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Motel-Checkout</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    if (isset($_GET['book_submit'])) {
        $img = mysqli_real_escape_string($con, $_GET['room_img']);
        $price = mysqli_real_escape_string($con, $_GET['room_price']);
        $room_name = mysqli_real_escape_string($con, $_GET['room_name']);
        if ($_GET['checkin'] != '') {
            $checkin = mysqli_real_escape_string($con, $_GET['checkin']);
        } else {
            $timestamp = strtotime("today");
            $checkin = date("m-d", $timestamp);
        }
        if ($_GET['checkout'] != '') {
            $checkout = mysqli_real_escape_string($con, $_GET['checkout']);
        } else {
            $timestamp = strtotime("tomorrow");
            $checkout = date("m-d", $timestamp);
        }

        if ($_GET['nights'] != '') {
            $nights = mysqli_real_escape_string($con, $_GET['nights']);
        } else {
            $nights = 1;
        }

        // room guest
        if ($room_name == "Small Room") {
            $guest = 1;
        }
        if ($room_name == "Family Room") {
            $guest = 3;
        }
        if ($room_name == "Double Room") {
            $guest = 2;
        }
        if ($room_name == "Luxury Room") {
            $guest = 2;
        }
        if ($room_name == "Apartment") {
            $guest = 5;
        }
        if ($room_name == "Room with View") {
            $guest = 4;
        }
    }
    ?>

    <!-- header section -->
    <div class="row header_sec">
        <div class="parallax-container" style="  height:35vh">

            <div class="parallax">
                <img src="img/account_header_bg.jpg" alt="Parallax">
            </div>

            <div class="row" style="  width: 100%; height: 100%;  margin-top:9vh; ">
                <div class="col s12 m12 l12 center-align">
                    <h3 style="   text-align: center; 
                    font-weight: 600; margin-bottom: 0px;  font-size: 8.5vh; color: #f6f6f6; ">
                        Checkout
                    </h3>
                    <hr style="width: 60px; height: 2px; border: none; background-color: #dedede;">
                </div>

            </div>
        </div>
    </div>

    <!-- main sec -->
    <div class="row main_row">
        <!-- side bar ============================================================================================================ -->
        <div class="col s12 m4 l4" style="padding: 0px;">
            <div class="card large" style="height: auto; box-shadow: none; border: 1px solid #dedede;">
                <div class="card-image">
                    <img style="filter: brightness(80%);" src="img/<?php echo $img; ?>">
                    <span class="card-title"><?php echo $room_name; ?></span>
                </div>
                <div class="card-content">
                    <table class="centered">
                        <thead>
                            <tr style="border: none;">
                                <th style="color: #727475;">Check-In</th>
                                <th style="color: #727475;">Check-Out</th>
                                <th style="color: #727475;">Guest</th>
                                <th style="color: #727475;">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="border: none;">
                                <td style="color: #727475;"><?php echo $checkin; ?></td>
                                <td style="color: #727475;"><?php echo $checkout; ?></td>
                                <td style="color: #727475;"><?php echo $guest; ?></td>
                                <td style="color: #ea4e60;">$<?php echo $price; ?></td>
                            </tr>
                            <tr style="border-top: 1px solid #585858 ; border-bottom: none;">
                                <td></td>
                                <td></td>
                                <td style="color: #727475; font-weight: bold;">Tax</td>
                                <td style="color: #ea4e60;">$33</td>
                            </tr>
                            <tr style="border: none;">
                                <td></td>
                                <td></td>
                                <td style="color: #727475; font-weight: bold;">VAT</td>
                                <td style="color: #ea4e60;">$5</td>
                            </tr>
                            <tr style="border-top: 1px solid #585858 ; border-bottom: none;">
                                <td></td>
                                <td></td>
                                <td style="color: #727475; font-weight: bold;">Grand Total</td>
                                <td style="font-weight: bold; color: #ea4e60;">$<?php echo $price + 33 + 5; ?></td>
                            </tr>
                        </tbody>
                    </table>


                </div>

            </div>

        </div>
        <div class="col m1 l1" style="width:10px"></div>
        <!-- right side -->
        <div class="col s12 m7 l7">
            <p style="color:#727475; font-weight:600 ; font-size: 3.5vh;  margin-top: 15px;">Add Your Info</p>
            <div class="row">
                <div class="col s12 m6 l6 ">
                    <div class="card-content white-text">
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 500;">Name *</span>
                        <br><br>
                        <input id="first_name" type="text" style="border:1px solid #f1f1f1;width: 98%;  background-color: #f9f9f9;;
                    padding:1px;      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 500;">Email *</span>
                        <br><br>
                        <input id="first_name" type="email" class="validate" style="
                     background-color: #f9f9f9; border:1px solid #f1f1f1; width: 98%; ">
                        <br><br>
                    </div>
                </div>
                <div class="col s12 m6 l6 ">
                    <div class="card-content white-text">
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 500;">Surname </span>
                        <br><br>
                        <input id="first_name" type="text" style="border:1px solid #f1f1f1;width: 98%;  background-color: #f9f9f9;;
                    padding:1px;      ">
                        <br><br>
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 500;">Mobile No *</span>
                        <br><br>
                        <input id="first_name" type="email" class="validate" style="
                     background-color: #f9f9f9; border:1px solid #f1f1f1; width: 98%; ">
                        <br><br>
                    </div>
                </div>
                <div class="col s12 m12 l12 ">
                    <div class="card-content white-text">
                        <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 500;">Address *</span>
                        <br><br>
                        <textarea id="first_name" type="email" class=" " style="border:1px solid #f1f1f1;width: 99%;  overflow-y: auto;    height:10vh; 
                     background-color: #f9f9f9;; "></textarea>
                        <br><br>
                    </div>
                </div>
            </div>

            <div class="row main_row" style="margin-top: -100px;">
                <div class="col s12 m12 l12">
                    <p style="color:#727475; font-weight:600 ; font-size: 3.5vh;  margin-top: 15px;">Payment Options</p>
                    <ul class="collapsible expandable z-depth-0" style="border: none;">
                        <li>
                            <div class="collapsible-header" style="color: #dedede; border: none;"><i style="color: #727475;" class="fas fa-wallet"></i><span style=" color: #727475; font-size: 2.7vh; font-weight: 600;">
                                    Wallets</span></div>
                            <div class="collapsible-body ">

                                <div class="row ">
                                    <div class="col s12 m3 l3 hoverable" id="pytm" onclick="highlight1();" style="margin: 5px; cursor: pointer; padding: 10px; border:  1px solid #dedede; border-radius: 8px;">
                                        <div class="col s6 m6 l6 center-align " style=" padding: 0px;">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 0px; height:6vh; width: 70%; " class="left responsive-img" src="img/checkout_paytm.svg">
                                        </div>
                                        <div class="col s6 m6 l6  " style="margin-bottom: 0px;">
                                            <p id="pytm_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-2x"></i></p>
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: left; font-size:  2.2vh; color: #585858;">Paytm</p>
                                            <p style="text-align: left; margin: 0px; font-size:  2.7vh; color: #ea4e60;">LINK</p>
                                        </div>
                                    </div>

                                    <div class="col s12 m3 l3 hoverable" id="amz_pay" onclick="highlight2();" style="cursor: pointer; padding: 10px; margin: 5px; border:  1px solid #dedede; border-radius: 8px;">
                                        <div class="col s6 m6 l6 center-align " style=" padding: 0px;">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 0px; height:6vh; width: 70%;" class="left responsive-img" src="img/checkout_amazon-pay.svg">
                                        </div>
                                        <div class="col s6 m6 l6  " style="margin-bottom: 0px;">
                                            <p id="amz_pay_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-2x"></i></p>
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: left; font-size:  2.2vh; color: #585858;">Amazon Pay</p>
                                            <p style="text-align: left; margin: 0px; font-size:  2.7vh; color: #ea4e60;">LINK</p>
                                        </div>
                                    </div>

                                    <div class="col s12 m3 l3 hoverable" id="g_pay" onclick="highlight3();" style="cursor: pointer; padding: 10px; margin: 5px;border:  1px solid #dedede; border-radius: 8px;">
                                        <div class="col s6 m6 l6 center-align " style=" padding: 0px;">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 7px; height:6vh; width: 70%;" class="left responsive-img" src="img/checkout_google-pay.svg">
                                        </div>
                                        <div class="col s6 m6 l6  " style="margin-bottom: 0px;">
                                            <p id="g_pay_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-2x"></i></p>
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: left; font-size:  2.2vh; color: #585858;">Google Pay</p>
                                            <p style="text-align: left; margin: 0px; font-size:  2.7vh; color: #ea4e60;">LINK</p>
                                        </div>
                                    </div>
                                    <div class="col s12 m12 l12" style="margin-top: 20px;">
                                        <input id="first_name" type="text" placeholder="+91 9998977787" style="font-size: 3vh; padding:3px; border:2px solid #dedede;border-radius: 5px; width: 100%; ">
                                        <br>
                                        <span class="card-title" style="margin-top:2vh; color:#ea4e60 ;  font-weight: 500;">Enter valid Phone *</span>
                                        <br>
                                        <button class="btn-large waves-effect waves-light " type="submit" style="width:101.9%; margin-top:10px; background-color: #ea4e60; border-radius: 5px; font-weight: 600;" name="action">Continue
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </li>

                        <!-- cards -->
                        <li>
                            <div class="collapsible-header" style="color: #dedede; border: none;"><i style="color: #727475;" class="far fa-credit-card"></i><span style=" color: #727475; font-size: 2.7vh; font-weight: 600;">
                                    Credit/Debit & ATM Cards</span></div>
                            <div class="collapsible-body ">
                                <div class="row">
                                    <div class="col s12 m10 l10" style="border: 1px solid #5cef62; background-color: #f6fdf6; border-radius: 8px; padding: 5px;">
                                        <div class="col s2 m1 l1">
                                            <p style=" color: #5cef62;" class="left"><i class="far fa-check-circle fa-lg"></i></p>
                                        </div>
                                        <div class="col s10 m10 l10" style="padding: 0px;">
                                            <p style="text-align: left; font-size:  2.2vh; font-weight: bold ; color: #585858;">Add Debit / Credit / ATM Card</p>
                                        </div>
                                        <div class="col s12 m6 l6 center-align " style=" padding: 0px; display: flex;justify-content: space-between;">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 3px; height:6vh;  width: 3em;" class="left responsive-img" src="img/checkout_sodexo.png">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 3px; height:6vh; " class="left responsive-img" src="img/checkout_visa.png">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 3px; height:6vh;" class="left responsive-img" src="img/checkout_mastercard.png">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 3px; height:6vh;" class="left responsive-img" src="img/checkout_creditcard.png">
                                            <img style="border: 1px solid #dedede; border-radius: 3px; padding: 13px; height:6vh; width: 4em;" class="left responsive-img" src="img/checkout_rupay.png">
                                        </div>
                                        <div class="col s12 m12 l12 " style="margin-top: 20px;">
                                            <input placeholder="Name On Card" type="text" style="font-size: 2.5vh; padding: 4px; border:1px solid #dedede;width: 98%; border-radius: 5px;  background-color: white ;">
                                            <input placeholder="Card Number" type="text" style="font-size: 2.5vh; padding: 4px; border:1px solid #dedede;width: 98%; border-radius: 5px;  background-color: white ;">
                                            <div class="col s8 m8 l8" style="padding: 0px;">
                                                <input placeholder="Expiry Date (MM/YY)" type="text" style="font-size: 2.5vh; padding: 4px; border:1px solid #dedede;width: 98%; border-radius: 5px;  background-color: white ;">
                                            </div>
                                            <div class="col s4 m4 l4">
                                                <input placeholder="CVV" type="text" style="font-size: 2.5vh; padding: 4px; border:1px solid #dedede;width: 100%; border-radius: 5px;  background-color: white ;">
                                            </div>
                                            <input placeholder=" Nickname for card" type="text" style="font-size: 2.5vh; padding: 4px; border:1px solid #dedede;width: 98%; border-radius: 5px;  background-color: white ;">
                                            <button class="btn-large waves-effect waves-light " type="submit" style="width:100%; margin-bottom:10px;  margin-top:10px; background-color: #ea4e60; border-radius: 5px; font-weight: 600;" name="action">Continue
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                        <!-- Net Banking -->
                        <li>
                            <div class="collapsible-header" style="color: #dedede; border: none;"><i style="color: #727475;" class="fas fa-university"></i><span style=" color: #727475; font-size: 2.7vh; font-weight: 600;">
                                    Netbanking</span></div>
                            <div class="collapsible-body ">

                                <div class="row ">

                                    <div class="col s12 m3 l3 hoverable" id="hdfc" onclick="highlight_bnk1();" style="cursor: pointer; padding: 10px; margin: 5px; border:  1px solid #dedede; border-radius: 8px;">

                                        <div class="col s12 m12 l12  " style="margin-bottom: 0px;">
                                            <p id="hdfc_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-lg"></i></p>
                                        </div>
                                        <div class="col s12 m12 l12 center-align " style=" padding: 0px;">

                                            <img style=" border-radius: 3px; padding: 0px; height:5vh; width: 100%;" class="left responsive-img" src="img/checkout_hdfc.svg">
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: center; font-size:  2.2vh; color: #585858;">HDFC Bank</p>
                                        </div>
                                    </div>
                                    <div class="col s12 m3 l3 hoverable" id="icici" onclick="highlight_bnk2();" style="cursor: pointer; padding: 10px; margin: 5px; border:  1px solid #dedede; border-radius: 8px;">

                                        <div class="col s12 m12 l12  " style="margin-bottom: 0px;">
                                            <p id="icici_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-lg"></i></p>
                                        </div>
                                        <div class="col s12 m12 l12 center-align " style=" padding: 0px;">
                                            <img style=" border-radius: 3px; padding: 0px; height:5vh; width: 100%;" class="left responsive-img" src="img/checkout_icici.svg">
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: center; font-size:  2.2vh; color: #585858;">ICICI </p>
                                        </div>
                                    </div>
                                    <div class="col s12 m3 l3 hoverable" id="axis" onclick="highlight_bnk3();" style="cursor: pointer; padding: 10px; margin: 5px; border:  1px solid #dedede; border-radius: 8px;">

                                        <div class="col s12 m12 l12  " style="margin-bottom: 0px;">
                                            <p id="axis_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-lg"></i></p>
                                        </div>
                                        <div class="col s12 m12 l12 center-align " style=" padding: 0px;">
                                            <img style=" border-radius: 3px; padding: 0px; height:5vh; width: 100%;" class="left responsive-img" src="img/checkout_axis_Bank.svg">
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: center; font-size:  2.2vh; color: #585858;">AXIS Bank </p>
                                        </div>
                                    </div>
                                    <div class="col s12 m3 l3 hoverable" id="kotak" onclick="highlight_bnk4();" style="cursor: pointer; padding: 10px; margin: 5px; border:  1px solid #dedede; border-radius: 8px;">

                                        <div class="col s12 m12 l12  " style="margin-bottom: 0px;">
                                            <p id="kotak_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-lg"></i></p>
                                        </div>
                                        <div class="col s12 m12 l12 center-align " style=" padding: 0px;">

                                            <img style=" border-radius: 3px; padding: 0px; height:5vh; width: 100%;" class="left responsive-img" src="img/checkout_kotal.svg">
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: center; font-size:  2.2vh; color: #585858;">Kotak Mahindra Bank </p>
                                        </div>
                                    </div>
                                    <div class="col s12 m3 l3 hoverable" id="sbi" onclick="highlight_bnk5();" style="cursor: pointer; padding: 10px; margin: 5px; border:  1px solid #dedede; border-radius: 8px;">

                                        <div class="col s12 m12 l12  " style="margin-bottom: 0px;">
                                            <p id="sbi_check" style="margin: 5px; color: #a3a3a3;" class="right"><i class="far fa-check-circle fa-lg"></i></p>
                                        </div>
                                        <div class="col s12 m12 l12 center-align " style=" padding: 0px;">

                                            <img style=" border-radius: 3px; padding: 0px; height:5vh; width: 100%;" class="left responsive-img" src="img/checkout_sbi.svg">
                                        </div>
                                        <div class="col s12 m12  l12" style="padding: 2px; margin-top: 0px;">
                                            <p style="text-align: center; font-size:  2.2vh; color: #585858;">State Bank of India </p>
                                        </div>
                                    </div>


                                    <div class="col s12 m12 l12" style="margin-top: 20px;">
                                        <button class="btn-large waves-effect waves-light " type="submit" style="width:101.9%; margin-top:10px; background-color: #ea4e60; border-radius: 5px; font-weight: 600;" name="action">Continue
                                        </button>

                                    </div>
                                </div>

                            </div>
                        </li>

                        <!-- UPI -->

                        <!-- cards -->
                        <li>
                            <div class="collapsible-header" style="color: #dedede; border: none;"><i style="color: #727475;" class="fas fa-mobile-alt"></i><span style=" color: #727475; font-size: 2.7vh; font-weight: 600;">
                                    Pay via UPI</span></div>
                            <div class="collapsible-body ">
                                <div class="row">
                                    <div class="col s12 m10 l10" style="border: 1px solid #5cef62; background-color: #f6fdf6; border-radius: 8px; padding: 5px;">
                                        <div class="col s2 m1 l1">
                                            <p style=" color: #5cef62;" class="left"><i class="far fa-check-circle fa-lg"></i></p>
                                        </div>
                                        <div class="col s10 m10 l10" style="padding: 0px;">
                                            <p style="text-align: left; font-size:  2.2vh; font-weight: bold ; color: #585858;">Add Debit / Credit / ATM Card</p>
                                        </div>
                                        <div class="col s12 m5 l5 center-align " style=" padding: 0px; display: flex;justify-content: space-between;">
                                            <img style="  padding: 3px; height:6vh;  width: 3em;" class="left responsive-img" src="img/checkout_google-pay.svg">
                                            <img style="  padding: 3px; height:6vh; " class="left responsive-img" src="img/checkout_paytm.svg">
                                            <img style="  padding: 3px; height:6vh;" class="left responsive-img" src="img/checkout_phonepe.svg">
                                            <img style=" padding: 13px; height:6vh;" class="left responsive-img" src="img/checkout_upi.svg">
                                        </div>
                                        <div class="col s12 m12 l12 " style="margin-top: 20px;">

                                            <div class="col s12 m8 l8" style="padding: 0px;">
                                                <input placeholder="example@upi" type="text" style="font-size: 2.5vh; padding: 4px; border:1px solid #dedede;width: 98%; border-radius: 5px;  background-color: white ;">
                                            </div>
                                            <div class="col s12 m4 l4">
                                                <button class="btn-large waves-effect waves-light " type="submit" style="width:100%; background-color: #ea4e60; border-radius: 5px; font-weight: 600;" name="action">Continue
                                                </button> </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </li>

                    </ul>

                </div>
            </div>
            <div class="col s12 m8 l8 " style="margin-top: 20px; margin-bottom: 20px;">
                <a href="thanks.php" class="btn-large waves-effect waves-light " type="submit" style=" width: 100%;  background-color: #ea4e60; border-radius: 5px; font-weight: 600;" name="action">Checkout
                </a>
            </div>
        </div>

    </div>




    <?php
    include_once 'partial/footer.php';
    include_once 'partial/scripts.php';
    ?>


</body>

</html>
<script>
    $(document).ready(function() {
        $('.parallax').parallax();
    });

    function highlight_bnk1() {
        document.getElementById("hdfc").style.border = "1px solid #5cef62 ";
        document.getElementById("hdfc").style.backgroundColor = "#fdfdfd ";
        document.getElementById("hdfc_check").style.color = " #5cef62 ";
        // hdfc
        document.getElementById("icici").style.border = "1px solid #dedede ";
        document.getElementById("icici").style.backgroundColor = "#ffffff ";
        document.getElementById("icici_check").style.color = " #dedede ";

        document.getElementById("axis").style.border = "1px solid #dedede ";
        document.getElementById("axis").style.backgroundColor = "#ffffff ";
        document.getElementById("axis_check").style.color = " #dedede ";

        document.getElementById("kotak").style.border = "1px solid #dedede ";
        document.getElementById("kotak").style.backgroundColor = "#ffffff ";
        document.getElementById("kotak_check").style.color = " #dedede ";

        document.getElementById("sbi").style.border = "1px solid #dedede ";
        document.getElementById("sbi").style.backgroundColor = "#ffffff ";
        document.getElementById("sbi_check").style.color = " #dedede ";

    }

    function highlight_bnk2() {
        document.getElementById("hdfc").style.border = "1px solid #dedede ";
        document.getElementById("hdfc").style.backgroundColor = "#ffffff ";
        document.getElementById("hdfc_check").style.color = " #dedede ";
        // ICICI
        document.getElementById("icici").style.border = "1px solid #5cef62 ";
        document.getElementById("icici").style.backgroundColor = "#fdfdfd ";
        document.getElementById("icici_check").style.color = " #5cef62 ";
        // icici
        document.getElementById("axis").style.border = "1px solid #dedede ";
        document.getElementById("axis").style.backgroundColor = "#ffffff ";
        document.getElementById("axis_check").style.color = " #dedede ";

        document.getElementById("kotak").style.border = "1px solid #dedede ";
        document.getElementById("kotak").style.backgroundColor = "#ffffff ";
        document.getElementById("kotak_check").style.color = " #dedede ";

        document.getElementById("sbi").style.border = "1px solid #dedede ";
        document.getElementById("sbi").style.backgroundColor = "#ffffff ";
        document.getElementById("sbi_check").style.color = " #dedede ";

    }

    function highlight_bnk3() {
        document.getElementById("hdfc").style.border = "1px solid #dedede ";
        document.getElementById("hdfc").style.backgroundColor = "#ffffff ";
        document.getElementById("hdfc_check").style.color = " #dedede ";
        document.getElementById("icici").style.border = "1px solid #dedede ";
        document.getElementById("icici").style.backgroundColor = "#ffffff ";
        document.getElementById("icici_check").style.color = " #dedede ";
        // AXIS
        document.getElementById("axis").style.border = "1px solid #5cef62 ";
        document.getElementById("axis").style.backgroundColor = "#fdfdfd ";
        document.getElementById("axis_check").style.color = " #5cef62 ";
        // AXIS
        document.getElementById("kotak").style.border = "1px solid #dedede ";
        document.getElementById("kotak").style.backgroundColor = "#ffffff ";
        document.getElementById("kotak_check").style.color = " #dedede ";

        document.getElementById("sbi").style.border = "1px solid #dedede ";
        document.getElementById("sbi").style.backgroundColor = "#ffffff ";
        document.getElementById("sbi_check").style.color = " #dedede ";

    }


    function highlight_bnk4() {
        document.getElementById("hdfc").style.border = "1px solid #dedede ";
        document.getElementById("hdfc").style.backgroundColor = "#ffffff ";
        document.getElementById("hdfc_check").style.color = " #dedede ";
        document.getElementById("icici").style.border = "1px solid #dedede ";
        document.getElementById("icici").style.backgroundColor = "#ffffff ";
        document.getElementById("icici_check").style.color = " #dedede ";
        document.getElementById("axis").style.border = "1px solid #dedede ";
        document.getElementById("axis").style.backgroundColor = "#ffffff ";
        document.getElementById("axis_check").style.color = " #dedede ";
        // KOTAK
        document.getElementById("kotak").style.border = "1px solid #5cef62 ";
        document.getElementById("kotak").style.backgroundColor = "#fdfdfd ";
        document.getElementById("kotak_check").style.color = " #5cef62 ";
        // KOTAK
        document.getElementById("sbi").style.border = "1px solid #dedede ";
        document.getElementById("sbi").style.backgroundColor = "#ffffff ";
        document.getElementById("sbi_check").style.color = " #dedede ";

    }

    function highlight_bnk5() {
        document.getElementById("hdfc").style.border = "1px solid #dedede ";
        document.getElementById("hdfc").style.backgroundColor = "#ffffff ";
        document.getElementById("hdfc_check").style.color = " #dedede ";
        document.getElementById("icici").style.border = "1px solid #dedede ";
        document.getElementById("icici").style.backgroundColor = "#ffffff ";
        document.getElementById("icici_check").style.color = " #dedede ";
        document.getElementById("axis").style.border = "1px solid #dedede ";
        document.getElementById("axis").style.backgroundColor = "#ffffff ";
        document.getElementById("axis_check").style.color = " #dedede ";
        document.getElementById("kotak").style.border = "1px solid #dedede ";
        document.getElementById("kotak").style.backgroundColor = "#ffffff ";
        document.getElementById("kotak_check").style.color = " #dedede ";
        // SBI
        document.getElementById("sbi").style.border = "1px solid #5cef62 ";
        document.getElementById("sbi").style.backgroundColor = "#fdfdfd ";
        document.getElementById("sbi_check").style.color = " #5cef62 ";

    }

    function highlight1() {
        document.getElementById("pytm").style.border = "1px solid #5cef62 ";
        document.getElementById("pytm").style.backgroundColor = "#fdfdfd ";
        document.getElementById("pytm_check").style.color = " #5cef62 ";
        // ptm
        document.getElementById("g_pay").style.border = "1px solid #dedede ";
        document.getElementById("g_pay").style.backgroundColor = "#ffffff";
        document.getElementById("g_pay_check").style.color = " #dedede ";
        document.getElementById("amz_pay").style.border = "1px solid #dedede ";
        document.getElementById("amz_pay").style.backgroundColor = "#ffffff";
        document.getElementById("amz_pay_check").style.color = " #dedede ";
    }

    function highlight2() {
        document.getElementById("pytm").style.border = "1px solid #dedede ";
        document.getElementById("pytm").style.backgroundColor = "#ffffff ";
        document.getElementById("pytm_check").style.color = " #dedede  ";
        document.getElementById("g_pay").style.border = "1px solid #dedede ";
        document.getElementById("g_pay").style.backgroundColor = "#ffffff";
        document.getElementById("g_pay_check").style.color = " #dedede ";
        // amz
        document.getElementById("amz_pay").style.border = "1px solid #5cef62 ";
        document.getElementById("amz_pay").style.backgroundColor = "#fdfdfd";
        document.getElementById("amz_pay_check").style.color = " #5cef62 ";

    }

    function highlight3() {
        document.getElementById("pytm").style.border = "1px solid #dedede ";
        document.getElementById("pytm").style.backgroundColor = "#ffffff ";
        document.getElementById("pytm_check").style.color = " #dedede  ";
        // g_pay
        document.getElementById("g_pay").style.border = "1px solid #5cef62 ";
        document.getElementById("g_pay").style.backgroundColor = "#fdfdfd";
        document.getElementById("g_pay_check").style.color = " #5cef62 ";
        // g_pay
        document.getElementById("amz_pay").style.border = "1px solid #dedede ";
        document.getElementById("amz_pay").style.backgroundColor = "#ffffff";
        document.getElementById("amz_pay_check").style.color = " #dedede ";

    }
</script>

<style>
    .header_sec {
        margin: 23px;

    }

    .main_row {
        margin: 60px;
    }

    #number {
        text-align: center;
        border: none;
        width: 70%;
        font-size: 3.5vh;
        color: #727475;
        font-weight: 500;
        margin-top: 3.8vh;

    }

    .para_modal1 {
        text-align: center;
        margin-top: 2.5vw;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }

    .sub_total {
        margin-right: -8px;
        text-align: right;
        font-weight: 500;
        font-size: 3vh;
        color: #585858;
    }

    .para_modal2 {
        text-align: center;
        margin-top: 5vh;
        color: #727475;
        font-size: 3vh;
        font-weight: 300;
    }

    .text {
        color: #a3a3a3;
        font-size: 2vh;
        text-align: left;
        font-weight: 500;

    }

    .quant {
        color: #727475;
        font-size: 2.5vh;
        text-align: left;
        font-weight: 500;
        margin-top: 0px;
    }

    #price {
        text-align: center;
        width: 100%;
        border: none;
        font-size: 2.5vh;
        margin-top: 5px;
        color: #727475;
        font-weight: 500;

    }

    #total {
        text-align: center;
        width: 100%;
        border: none;
        font-size: 2.5vh;
        margin-top: 5px;
        color: #ea4e60;
        font-weight: 500;

    }

    @media only screen and (max-width: 600px) {
        .header_sec {
            margin: 0px;
            margin-bottom: 50px;
        }

        .main_row {
            margin: 0px;
        }

        .sub_total {
            margin-right: -8px;
            text-align: left;
            font-weight: 700;
            font-size: 3vh;
            color: #585858;
        }

        .para_modal1 {
            text-align: center;
            margin-top: 3.6vh;
            color: #727475;
            font-size: 3vh;
            font-weight: 300;
        }

        .para_modal2 {
            text-align: center;
            margin-top: 1vh;
            color: #727475;
            font-size: 2.3vh;
            font-weight: 300;
        }

        #price {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 2vh;
            margin-top: 8px;
            color: #727475;
            font-weight: 500;
        }

        #total {
            text-align: center;
            width: 100%;
            border: none;
            font-size: 2vh;
            margin-top: 8px;
            color: red;
            font-weight: 500;
        }


        .text {
            color: #727475;
            font-size: 2vh;
            text-align: left;
        }

    }

    ::-webkit-scrollbar {
        width: 0px;
    }
</style>