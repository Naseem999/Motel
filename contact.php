<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'partial/head.php';
    ?>
    <title>Contact-Motel</title>
</head>

<body>
    <?php
    include_once 'partial/header.php';
    ?>

    <div class="row">
        <div class="parallax-container" style="width:100%; height: 60vh">
            <div class="parallax">
                <img class="mySlides" style="filter:brightness(20%); " src="img/contact_header_bg.jpg" alt="Parallax">
            </div>
            <div class="row " style=" width: 100%;  margin-top: 12vh; ">
                <div class="col s12 m12 l12 center-align">
                    <h3 style="text-align: center; font-weight: 600; font-size: 7.5vh; color: whitesmoke;">
                        CONTACT US
                    </h3>
                </div>

            </div>
        </div>

    </div>

    <div class="row" >
        <div class="col s12 m6 l6">
            <h1 style="color:#727475; font-size: 4.5vh;">Drop us a line</h1>
            <p style="color: #bbbabb; font-size: 2.4vh;  line-height: 24px;                            
                            font-family: 'Poppins', sans-serif; ">
                Vivamus volutpat eros pulvinar velit laoreet, sit amet egestas erat dignissim.
                Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum.
                Nam nulla ipsum, venenatis malesuada felis quis, ultricies convallis neque.
                Pellentesque tristique fringilla tempus. Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim.</p>

            <div class="card-content white-text">
                <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 700;">Name:</span>
                <br><br>
                <input id="first_name" type="text" style="border:none; background-color: #bbbabb;
                    padding:1px;      ">
                <br><br>
                <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 700;">Email:</span>
                <br><br>
                <input id="first_name" type="email" class="validate" style="
                     background-color: #bbbabb;border:none; ">
                <br><br>
                <span class="card-title" style="margin-top:3vh; color:#727475 ;  font-weight: 700;">Message:</span>
                <br><br>
                <textarea id="first_name" type="email" class=" " style="border:none; overflow-y: auto;    height:10vh; 
                     background-color: #bbbabb; "></textarea>
                <br><br>
                <a href="thanks.php" style=" background-color: #727475;  margin-top: 10px; " class=" waves-effect waves-light btn  ">SEND NOW</a>
            </div>
        </div>

        <div class="col s12 m6 l6" style="margin-top: 7vh;">
            <div class="col s12 m12 l12" style="height: 50vh;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224498.3976975449!2d76.93027191640627!3d28.455822599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1e70a6c00001%3A0xef9030b6cd2655e2!2sTaj%20City%20Centre%20Gurugram!5e0!3m2!1sen!2sin!4v1608290560256!5m2!1sen!2sin" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="row" style="padding: 20px;">
                <div class="col s12 m6 l6">

                    <table >
                        <tbody>
                            <tr>
                                <td style="color: #727475;">Address :</td>
                                <td></td>
                                <td style="color: #bbbabb;">Avenue 234</td>
                            </tr>
                            <tr>
                                <td style="color: #727475;">City :</td>
                                <td></td>
                                <td style="color: #bbbabb;">Gurugram</td>
                            </tr>
                            <tr>
                                <td style="color: #727475;">Check-In :</td>
                                <td></td>
                                <td style="color: #bbbabb;">15:00 am</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col s12 m6 l6 center-align">

                    <table  >
                        <tbody>
                            <tr>
                                <td style="color: #727475;">Phone :</td>
                                <td></td>
                                <td style="color: #bbbabb; text-align: center;">00 837920234</td>
                            </tr>
                            <tr>
                                <td style="color: #727475; ">Email :</td>
                                <td></td>
                                <td style="color: #bbbabb; text-align: center;">motel123@gmail.com</td>
                            </tr>
                            <tr>
                                <td style="color: #727475;">Check-Out :</td>
                                <td></td>
                                <td style="color: #bbbabb; text-align: center;">11:00 am</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row center-align" style="margin: 3.5vh;">
                <p style="color: #bbbabb;">AVAILABLE AT 10AM – 8PM</p>
                <hr style="width: 20px; text-align: left;">
                <p style="color: #727475; font-size: 5vh; margin-top: 0px;">+91 9866672254</p>
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
</script>